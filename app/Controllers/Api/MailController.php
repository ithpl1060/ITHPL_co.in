<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\MailModel;

class MailController extends BaseController
{
    public function fetchMail()
    {
        $mailModel = new MailModel();

        $draw = $this->request->getVar('draw');
        $start = $this->request->getVar('start');
        $length = $this->request->getVar('length');
        $searchValue = $this->request->getVar('search')['value'] ?? null;
        $orderColumnIndex = $this->request->getVar('order')[0]['column'] ?? 0;
        $orderDir = $this->request->getVar('order')[0]['dir'] ?? 'asc';

        $columns = [
            'id',
            'email',
            'created_at'
        ];

        $orderColumn = $columns[$orderColumnIndex] ?? 'id';

        $dataList = $mailModel->getAllMailData($searchValue, $length, $start, $orderColumn, $orderDir);
        $totalRecords = $mailModel->countAllMailData();
        $totalFiltered = $mailModel->countFilteredMailData($searchValue);

        $data = [];

        foreach ($dataList as $row) {
            $data[] = [
                'id' => $row['id'],
                'email' => $row['email'],
                'source_page' => $row['source_page'] ?? 'home',
              
                'created_at' => $row['created_at'] ?? '',
            ];
        }

        return $this->response->setJSON([
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalFiltered,
            'data' => $data
        ]);
    }

    public function subscribe()
    {
        $email = $this->request->getVar('email');
        $sourcePage = $this->request->getVar('source_page') ?? 'home';


        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->response->setStatusCode(400);
        }

        $mailModel = new MailModel();

        // Optional: prevent duplicate subscriptions
        $existing = $mailModel->where('email', $email)->first();
        if (!empty($existing)) {
            // Already subscribed - treat as success but no body required for the homepage
            return $this->response->setStatusCode(204);
        }

        $data = [
            'email' => $email,
             'source_page',
             'source_page' => $sourcePage,
            'created_at' => date('Y-m-d H:i:s')
           
        ];

        $insertId = $mailModel->insert($data);

        if ($insertId) {
            // Success - no response body needed for homepage callers
            return $this->response->setStatusCode(204);
        }

        return $this->response->setStatusCode(500);
    }
}
