<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\HpLeadModel;
use CodeIgniter\API\ResponseTrait;

class HpLeadController extends BaseController
{
    use ResponseTrait;

    protected $leadModel;

    public function __construct()
    {
        $this->leadModel = new HpLeadModel();
    }

    /**
     * Handle "Get Instant Access" form submission from frontend landing page
     */
    public function submit()
    {
        // Check if request is POST
        if ($this->request->getMethod() !== 'post' && $this->request->getMethod() !== 'POST') {
            return $this->response->setStatusCode(405)->setJSON([
                'status'  => 405,
                'message' => 'Method Not Allowed'
            ]);
        }

        $fullName      = trim((string)$this->request->getVar('full_name'));
        $mobileNumber  = trim((string)$this->request->getVar('mobile_number'));
        $businessEmail = trim((string)$this->request->getVar('business_email'));
        $companyName   = trim((string)$this->request->getVar('company_name'));
        $designation   = trim((string)$this->request->getVar('designation'));
        $city          = trim((string)$this->request->getVar('city'));
        $consentProc   = $this->request->getVar('consent_processing') ? 1 : 0;
        $consentMktg   = $this->request->getVar('consent_marketing') ? 1 : 0;
        $sourcePage    = trim((string)$this->request->getVar('source_page')) ?: 'hpaipcs';

        // Validation
        if (empty($fullName)) {
            return $this->response->setStatusCode(400)->setJSON([
                'status'  => 400,
                'message' => 'Full Name is required.'
            ]);
        }

        if (empty($mobileNumber)) {
            return $this->response->setStatusCode(400)->setJSON([
                'status'  => 400,
                'message' => 'Mobile Number is required.'
            ]);
        }

        if (empty($businessEmail) || !filter_var($businessEmail, FILTER_VALIDATE_EMAIL)) {
            return $this->response->setStatusCode(400)->setJSON([
                'status'  => 400,
                'message' => 'A valid Business Email is required.'
            ]);
        }

        if (empty($companyName)) {
            return $this->response->setStatusCode(400)->setJSON([
                'status'  => 400,
                'message' => 'Company Name is required.'
            ]);
        }

        // Gather client metadata
        $ipAddress = $this->request->getIPAddress();
        $userAgent = (string)$this->request->getUserAgent();

        $leadData = [
            'full_name'          => $fullName,
            'mobile_number'      => $mobileNumber,
            'business_email'     => $businessEmail,
            'company_name'       => $companyName,
            'designation'        => $designation ?: null,
            'city'               => $city ?: null,
            'consent_processing' => $consentProc,
            'consent_marketing'  => $consentMktg,
            'source_page'        => $sourcePage,
            'ip_address'         => $ipAddress,
            'user_agent'         => mb_substr($userAgent, 0, 500),
            'created_at'         => date('Y-m-d H:i:s'),
            'updated_at'         => date('Y-m-d H:i:s'),
        ];

        try {
            $insertId = $this->leadModel->insert($leadData);

            if ($insertId) {
                return $this->response->setStatusCode(200)->setJSON([
                    'status'   => 200,
                    'message'  => 'Thank you! Your request for instant access has been received successfully. Our team will get in touch with you shortly.',
                    'lead_id'  => $insertId
                ]);
            } else {
                return $this->response->setStatusCode(500)->setJSON([
                    'status'  => 500,
                    'message' => 'Failed to save your submission. Please try again.'
                ]);
            }
        } catch (\Throwable $e) {
            log_message('error', 'HpLeadController::submit error: ' . $e->getMessage());
            return $this->response->setStatusCode(500)->setJSON([
                'status'  => 500,
                'message' => 'An error occurred while processing your request. Please try again.'
            ]);
        }
    }

    /**
     * Fetch Leads for Admin DataTables (Server-side)
     */
    public function fetchLeads()
    {
        $draw             = $this->request->getVar('draw');
        $start            = $this->request->getVar('start');
        $length           = $this->request->getVar('length');
        $searchValue      = $this->request->getVar('search')['value'] ?? null;
        $orderColumnIndex = $this->request->getVar('order')[0]['column'] ?? 0;
        $orderDir         = $this->request->getVar('order')[0]['dir'] ?? 'desc';

        $columns = [
            0 => 'id',
            1 => 'full_name',
            2 => 'mobile_number',
            3 => 'business_email',
            4 => 'company_name',
            5 => 'designation',
            6 => 'city',
            7 => 'consent_processing',
            8 => 'consent_marketing',
            9 => 'created_at',
            10 => 'id',
        ];

        $orderColumn = $columns[$orderColumnIndex] ?? 'id';

        $dataList      = $this->leadModel->getAllLeadsData($searchValue, $length, $start, $orderColumn, $orderDir);
        $totalRecords  = $this->leadModel->countAllLeadsData();
        $totalFiltered = $this->leadModel->countFilteredLeadsData($searchValue);

        $data = [];
        foreach ($dataList as $row) {
            $data[] = [
                'id'                 => $row['id'],
                'full_name'          => esc($row['full_name']),
                'mobile_number'      => esc($row['mobile_number']),
                'business_email'     => esc($row['business_email']),
                'company_name'       => esc($row['company_name']),
                'designation'        => esc($row['designation'] ?: '-'),
                'city'               => esc($row['city'] ?: '-'),
                'consent_processing' => $row['consent_processing'] == 1 ? '<span class="badge badge-success">Accepted</span>' : '<span class="badge badge-secondary">No</span>',
                'consent_marketing'  => $row['consent_marketing'] == 1 ? '<span class="badge badge-info">Agreed</span>' : '<span class="badge badge-secondary">No</span>',
                'source_page'        => esc($row['source_page']),
                'ip_address'         => esc($row['ip_address'] ?: '-'),
                'created_at'         => date('d M Y, h:i A', strtotime($row['created_at'])),
                'raw_created_at'     => $row['created_at'],
                'action'             => '
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-info view-lead-btn" data-id="' . $row['id'] . '" title="View Details">
                            <i class="fa fa-eye"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger delete-lead-btn" data-id="' . $row['id'] . '" title="Delete">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                '
            ];
        }

        return $this->response->setJSON([
            'draw'            => intval($draw),
            'recordsTotal'    => $totalRecords,
            'recordsFiltered' => $totalFiltered,
            'data'            => $data
        ]);
    }

    /**
     * Direct Excel / CSV Export of HP AI PCs Leads
     */
    public function exportLeads()
    {
        $search = $this->request->getGet('search') ?: null;
        $leads  = $this->leadModel->getAllForExport($search, 'id', 'desc');

        $fileName = 'HP_AI_PCs_Leads_' . date('Y-m-d_His') . '.csv';

        // Set headers for download
        header('Content-Type: text/csv; charset=UTF-8');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
        header('Pragma: no-cache');
        header('Expires: 0');

        $output = fopen('php://output', 'w');

        // Add UTF-8 BOM for Excel compatibility
        fprintf($output, chr(0xEF) . chr(0xBB) . chr(0xBF));

        // CSV Header
        fputcsv($output, [
            'SR No',
            'Full Name',
            'Mobile Number',
            'Business Email',
            'Company Name',
            'Designation',
            'City',
            'Processing Consent',
            'Marketing Consent',
            'Source Page',
            'IP Address',
            'Submitted Date & Time'
        ]);

        $sr = 1;
        foreach ($leads as $lead) {
            fputcsv($output, [
                $sr++,
                $lead['full_name'],
                $lead['mobile_number'],
                $lead['business_email'],
                $lead['company_name'],
                $lead['designation'] ?: '',
                $lead['city'] ?: '',
                $lead['consent_processing'] == 1 ? 'Yes' : 'No',
                $lead['consent_marketing'] == 1 ? 'Yes' : 'No',
                $lead['source_page'],
                $lead['ip_address'] ?: '',
                $lead['created_at'] ? date('Y-m-d H:i:s', strtotime($lead['created_at'])) : ''
            ]);
        }

        fclose($output);
        exit;
    }

    /**
     * Get single lead details for modal
     */
    public function getLead($id = 0)
    {
        $id = intval($id);
        if (!$id) {
            return $this->response->setStatusCode(400)->setJSON([
                'status'  => 400,
                'message' => 'Invalid Lead ID'
            ]);
        }

        $lead = $this->leadModel->find($id);
        if (!$lead) {
            return $this->response->setStatusCode(404)->setJSON([
                'status'  => 404,
                'message' => 'Lead not found'
            ]);
        }

        return $this->response->setJSON([
            'status' => 200,
            'data'   => $lead
        ]);
    }

    /**
     * Delete a lead entry
     */
    public function deleteLead($id = 0)
    {
        $id = intval($id);
        if (!$id) {
            return $this->response->setStatusCode(400)->setJSON([
                'status'  => 400,
                'message' => 'Invalid Lead ID'
            ]);
        }

        $lead = $this->leadModel->find($id);
        if (!$lead) {
            return $this->response->setStatusCode(404)->setJSON([
                'status'  => 404,
                'message' => 'Lead not found'
            ]);
        }

        $deleted = $this->leadModel->delete($id);
        if ($deleted) {
            return $this->response->setJSON([
                'status'  => 200,
                'message' => 'Lead deleted successfully'
            ]);
        }

        return $this->response->setStatusCode(500)->setJSON([
            'status'  => 500,
            'message' => 'Failed to delete lead'
        ]);
    }

    /**
     * Get lead statistics (Total, Today, Month)
     */
    public function getStats()
    {
        $stats = $this->leadModel->getLeadStats();
        return $this->response->setJSON([
            'status' => 200,
            'data'   => $stats
        ]);
    }
}
