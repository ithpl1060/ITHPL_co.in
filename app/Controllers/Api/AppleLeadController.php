<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\AppleLeadModel;
use CodeIgniter\API\ResponseTrait;

class AppleLeadController extends BaseController
{
    use ResponseTrait;

    protected $leadModel;

    public function __construct()
    {
        $this->leadModel = new AppleLeadModel();
    }

    /**
     * Handle Apple product buy form submission from frontend modal
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

        $fullName    = trim((string)$this->request->getVar('full_name'));
        $workEmail   = trim((string)$this->request->getVar('work_email'));
        $phone       = trim((string)$this->request->getVar('phone'));
        $companyName = trim((string)$this->request->getVar('company_name'));
        $city        = trim((string)$this->request->getVar('city'));
        $fleetQty    = trim((string)$this->request->getVar('fleet_qty'));
        $gstin       = trim((string)$this->request->getVar('gstin'));
        $productName = trim((string)$this->request->getVar('product_name'));
        $specsSummary      = trim((string)$this->request->getVar('specs_summary'));
        $deploymentServices = trim((string)$this->request->getVar('deployment_services'));
        $notes       = trim((string)$this->request->getVar('notes'));
        $sourcePage  = trim((string)$this->request->getVar('source_page')) ?: 'apple_product';
        $refId       = trim((string)$this->request->getVar('ref_id'));

        // Validation
        if (empty($fullName)) {
            return $this->response->setStatusCode(400)->setJSON([
                'status'  => 400,
                'message' => 'Full Name is required.'
            ]);
        }

        if (empty($workEmail) || !filter_var($workEmail, FILTER_VALIDATE_EMAIL)) {
            return $this->response->setStatusCode(400)->setJSON([
                'status'  => 400,
                'message' => 'A valid Work Email is required.'
            ]);
        }

        if (empty($phone)) {
            return $this->response->setStatusCode(400)->setJSON([
                'status'  => 400,
                'message' => 'Phone number is required.'
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
            'full_name'           => $fullName,
            'work_email'          => $workEmail,
            'phone'               => $phone,
            'company_name'        => $companyName,
            'city'                => $city ?: null,
            'fleet_qty'           => $fleetQty ?: null,
            'gstin'               => $gstin ?: null,
            'product_name'        => $productName ?: null,
            'specs_summary'       => $specsSummary ?: null,
            'deployment_services' => $deploymentServices ?: null,
            'notes'               => $notes ?: null,
            'source_page'         => $sourcePage,
            'ref_id'              => $refId ?: null,
            'ip_address'          => $ipAddress,
            'user_agent'          => mb_substr($userAgent, 0, 500),
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ];

        try {
            $insertId = $this->leadModel->insert($leadData);

            if ($insertId) {
                return $this->response->setStatusCode(200)->setJSON([
                    'status'   => 200,
                    'message'  => 'Thank you! Your order request has been received successfully. Our team will get in touch with you shortly.',
                    'lead_id'  => $insertId
                ]);
            } else {
                return $this->response->setStatusCode(500)->setJSON([
                    'status'  => 500,
                    'message' => 'Failed to save your submission. Please try again.'
                ]);
            }
        } catch (\Throwable $e) {
            log_message('error', 'AppleLeadController::submit error: ' . $e->getMessage());
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
            0  => 'id',
            1  => 'full_name',
            2  => 'phone',
            3  => 'work_email',
            4  => 'company_name',
            5  => 'product_name',
            6  => 'specs_summary',
            7  => 'fleet_qty',
            8  => 'city',
            9  => 'ref_id',
            10 => 'created_at',
            11 => 'id',
        ];

        $orderColumn = $columns[$orderColumnIndex] ?? 'id';

        $dataList      = $this->leadModel->getAllLeadsData($searchValue, $length, $start, $orderColumn, $orderDir);
        $totalRecords  = $this->leadModel->countAllLeadsData();
        $totalFiltered = $this->leadModel->countFilteredLeadsData($searchValue);

        $data = [];
        foreach ($dataList as $row) {
            $data[] = [
                'id'                  => $row['id'],
                'full_name'           => esc($row['full_name']),
                'phone'               => esc($row['phone']),
                'work_email'          => esc($row['work_email']),
                'company_name'        => esc($row['company_name']),
                'product_name'        => esc($row['product_name'] ?: '-'),
                'specs_summary'       => esc($row['specs_summary'] ?: '-'),
                'fleet_qty'           => esc($row['fleet_qty'] ?: '-'),
                'city'                => esc($row['city'] ?: '-'),
                'ref_id'              => esc($row['ref_id'] ?: '-'),
                'created_at'          => date('d M Y, h:i A', strtotime($row['created_at'])),
                'raw_created_at'      => $row['created_at'],
                'action'              => '
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-info view-apple-lead-btn" data-id="' . $row['id'] . '" title="View Details">
                            <i class="fa fa-eye"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger delete-apple-lead-btn" data-id="' . $row['id'] . '" title="Delete">
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
     * Direct Excel / CSV Export of Apple Product Leads
     */
    public function exportLeads()
    {
        $search = $this->request->getGet('search') ?: null;
        $leads  = $this->leadModel->getAllForExport($search, 'id', 'desc');

        $fileName = 'Apple_Product_Leads_' . date('Y-m-d_His') . '.csv';

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
            'Ref ID',
            'Full Name',
            'Phone',
            'Work Email',
            'Company Name',
            'City',
            'Fleet Qty',
            'GSTIN',
            'Product',
            'Specs',
            'Deployment Services',
            'Notes',
            'Source Page',
            'IP Address',
            'Submitted Date & Time'
        ]);

        $sr = 1;
        foreach ($leads as $lead) {
            fputcsv($output, [
                $sr++,
                $lead['ref_id'] ?: '',
                $lead['full_name'],
                $lead['phone'],
                $lead['work_email'],
                $lead['company_name'],
                $lead['city'] ?: '',
                $lead['fleet_qty'] ?: '',
                $lead['gstin'] ?: '',
                $lead['product_name'] ?: '',
                $lead['specs_summary'] ?: '',
                $lead['deployment_services'] ?: '',
                $lead['notes'] ?: '',
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
