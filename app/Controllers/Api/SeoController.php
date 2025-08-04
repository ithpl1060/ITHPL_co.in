<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\SeoModel;
use CodeIgniter\HTTP\ResponseInterface;

class SeoController extends BaseController
{

    public function getSeo($id = 0)
    {
        $seo = new SeoModel();

        if ($id) {
            $data = $seo->where('id', $id)->first();
        } else {
            $data = $seo->findAll();
        }

        if (!empty($data)) {
            $response = [
                'status' => 200,
                'message' => 'All Data Fetch successfully!',
                'data' => $data
            ];
        } else {
            $response = [
                'status' => 404,
                'message' => 'Data not Found!'
            ];
        }
        return $this->response->setJSON($response);
    }

    public function create()
    {
        $seo = new SeoModel();

        $data = [
            'page_slug' => $this->request->getVar('pageSlug'),
            'meta_title' => $this->request->getVar('title'),
            'url_path' => $this->request->getVar('urlPath'),
            'meta_description' => $this->request->getVar('desc'),
            'meta_keywords' => $this->request->getVar('keywords'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $id = $this->request->getPost('id');
        if (empty($id)) {

            $result = $seo->insert($data);

            if (!empty($result)) {

                $response = [
                    'status' => 200,
                    'message' => 'Seo Slug Created Successfully!',
                    'data' => $result
                ];
                return $this->response->setJSON($response);
            } else {
                $response = [
                    'status' => 404,
                    'message' => 'Data not Found!'
                ];
                return $this->response->setJSON($response);
            }
        } else {
            // $result = $iconModel->get_data($id);
            $result = $seo->where('id', $id)->first();

            if (!empty($result)) {
                unset($data['created_at']);
                $status = $seo->update($id, $data);
                if ($status) {
                    $response = [
                        'status' => 200,
                        'message' => 'Seo Slug Updated Successfully!',
                        'data' => $result
                    ];
                    return $this->response->setJSON($response);
                } else {
                    $response = [
                        'status' => 404,
                        'message' => 'Data not Found!'
                    ];
                    return $this->response->setJSON($response);
                }
            }
        }
    }
    public function fetchSeo()
    {
        $seoModel = new SeoModel();

        $draw = $this->request->getVar('draw');
        $start = $this->request->getVar('start');
        $length = $this->request->getVar('length');
        $searchValue = $this->request->getVar('search')['value'];
        $orderColumnIndex = $this->request->getVar('order')[0]['column'] ?? 0;
        $orderDir = $this->request->getVar('order')[0]['dir'] ?? 'asc';

        $columns = [
            'id',
            'page_slug',
            'meta_title',
            'url_path',
            'meta_description',
            'meta_keywords',

        ];

        $orderColumn = $columns[$orderColumnIndex] ?? 'id';

        $dataList = $seoModel->getAllSeoData($searchValue, $length, $start, $orderColumn, $orderDir);
        $totalRecords = $seoModel->countAllSeoData();
        $totalFiltered = $seoModel->countFilteredSeoData($searchValue);

        $data = [];

        foreach ($dataList as $row) {
            $data[] = [
                'id' => $row['id'],
                'page_slug' => $row['page_slug'],
                'meta_title' => $row['meta_title'],
                'url_path' => $row['url_path'],
                'meta_description' => $row['meta_description'],
                'meta_keywords' => $row['meta_keywords'],
                'action' => '
                <a href="javascript:void(0);" 
                    onclick="updateSeoDetails(' . $row['id'] . ')"
                    title="Update SEO">
                    <i class="mdi mdi-tooltip-edit" style="font-size: 20px;"></i>
                </a>&nbsp;
                <a href="javascript:void(0);" 
                    onclick="deleteSeoDetails(' . $row['id'] . ')"
                    title="Delete SEO">
                    <i class="mdi mdi-delete-circle" style="font-size: 20px;"></i>
                </a>'
            ];
        }

        return $this->response->setJSON([
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalFiltered,
            'data' => $data
        ]);
    }


    public function delete($id = 0)
    {
        $seo = new SeoModel();

        $existingData = $seo->where('id', $id)->first();

        if ($existingData) {
            $result = $seo->where('id', $id)->delete();
            if (!empty($result)) {
                $response = [
                    'status' => 200,
                    'message' => 'Data Deleted successfully!',
                    'data' => $result
                ];
            } else {
                $response = [
                    'status' => 404,
                    'message' => 'Data not Found!'
                ];
            }
        } else {
            $response = [
                'status' => 404,
                'message' => 'Data not Found!'
            ];
        }
        return $this->response->setJSON($response);
    }
}
