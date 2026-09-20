<?php

namespace App\Models;

use CodeIgniter\Model;

class AppleLeadModel extends Model
{
    protected $table            = 'apple_leads';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'full_name',
        'work_email',
        'phone',
        'company_name',
        'city',
        'fleet_qty',
        'gstin',
        'product_name',
        'specs_summary',
        'deployment_services',
        'notes',
        'source_page',
        'ref_id',
        'ip_address',
        'user_agent',
        'created_at',
        'updated_at',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function __construct()
    {
        parent::__construct();
        $this->ensureTableExists();
    }

    /**
     * Ensure the apple_leads table exists in MySQL database
     */
    public function ensureTableExists()
    {
        try {
            if (!$this->db->tableExists($this->table)) {
                $forge = \Config\Database::forge();
                $forge->addField([
                    'id' => [
                        'type'           => 'INT',
                        'constraint'     => 11,
                        'unsigned'       => true,
                        'auto_increment' => true,
                    ],
                    'full_name' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                    ],
                    'work_email' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                    ],
                    'phone' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '50',
                    ],
                    'company_name' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                    ],
                    'city' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '150',
                        'null'       => true,
                    ],
                    'fleet_qty' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '20',
                        'null'       => true,
                    ],
                    'gstin' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '20',
                        'null'       => true,
                    ],
                    'product_name' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '100',
                        'null'       => true,
                    ],
                    'specs_summary' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '500',
                        'null'       => true,
                    ],
                    'deployment_services' => [
                        'type'       => 'TEXT',
                        'null'       => true,
                    ],
                    'notes' => [
                        'type'       => 'TEXT',
                        'null'       => true,
                    ],
                    'source_page' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '100',
                        'default'    => 'apple_product',
                    ],
                    'ref_id' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '30',
                        'null'       => true,
                    ],
                    'ip_address' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '45',
                        'null'       => true,
                    ],
                    'user_agent' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '500',
                        'null'       => true,
                    ],
                    'created_at' => [
                        'type' => 'DATETIME',
                        'null' => true,
                    ],
                    'updated_at' => [
                        'type' => 'DATETIME',
                        'null' => true,
                    ],
                ]);

                $forge->addKey('id', true);
                $forge->addKey('work_email');
                $forge->addKey('created_at');
                $forge->createTable($this->table, true);
            }
        } catch (\Throwable $e) {
            log_message('error', 'AppleLeadModel::ensureTableExists error: ' . $e->getMessage());
        }
    }

    /**
     * Get paginated and filtered leads data for DataTables
     */
    public function getAllLeadsData($search = null, $limit = null, $offset = null, $orderColumn = 'id', $orderDir = 'desc')
    {
        $builder = $this->db->table($this->table);
        $builder->select('id, full_name, work_email, phone, company_name, city, fleet_qty, gstin, product_name, specs_summary, deployment_services, notes, source_page, ref_id, ip_address, user_agent, created_at');

        if (!empty($search)) {
            $builder->groupStart()
                ->like('full_name', $search)
                ->orLike('work_email', $search)
                ->orLike('phone', $search)
                ->orLike('company_name', $search)
                ->orLike('city', $search)
                ->orLike('product_name', $search)
                ->orLike('specs_summary', $search)
                ->orLike('ref_id', $search)
                ->orLike('gstin', $search)
                ->groupEnd();
        }

        if (!empty($orderColumn)) {
            $builder->orderBy($orderColumn, $orderDir);
        } else {
            $builder->orderBy('id', 'desc');
        }

        if ($limit !== null && $offset !== null) {
            $builder->limit($limit, $offset);
        }

        return $builder->get()->getResultArray();
    }

    /**
     * Total count of all leads
     */
    public function countAllLeadsData()
    {
        $builder = $this->db->table($this->table);
        return $builder->countAllResults();
    }

    /**
     * Count of filtered leads
     */
    public function countFilteredLeadsData($search = null)
    {
        $builder = $this->db->table($this->table);
        $builder->select('id');

        if (!empty($search)) {
            $builder->groupStart()
                ->like('full_name', $search)
                ->orLike('work_email', $search)
                ->orLike('phone', $search)
                ->orLike('company_name', $search)
                ->orLike('city', $search)
                ->orLike('product_name', $search)
                ->orLike('specs_summary', $search)
                ->orLike('ref_id', $search)
                ->orLike('gstin', $search)
                ->groupEnd();
        }

        return $builder->countAllResults();
    }

    /**
     * Get all records for Export (Excel / CSV)
     */
    public function getAllForExport($search = null, $orderColumn = 'id', $orderDir = 'desc')
    {
        $builder = $this->db->table($this->table);
        $builder->select('id, full_name, work_email, phone, company_name, city, fleet_qty, gstin, product_name, specs_summary, deployment_services, notes, source_page, ref_id, ip_address, created_at');

        if (!empty($search)) {
            $builder->groupStart()
                ->like('full_name', $search)
                ->orLike('work_email', $search)
                ->orLike('phone', $search)
                ->orLike('company_name', $search)
                ->orLike('city', $search)
                ->orLike('product_name', $search)
                ->orLike('specs_summary', $search)
                ->orLike('ref_id', $search)
                ->groupEnd();
        }

        if (!empty($orderColumn)) {
            $builder->orderBy($orderColumn, $orderDir);
        } else {
            $builder->orderBy('id', 'desc');
        }

        return $builder->get()->getResultArray();
    }

    /**
     * Get Lead Statistics (Total, Today, This Month)
     */
    public function getLeadStats()
    {
        $total = $this->countAllResults();
        $today = $this->where('DATE(created_at)', date('Y-m-d'))->countAllResults();
        $thisMonth = $this->where('MONTH(created_at)', date('m'))
                          ->where('YEAR(created_at)', date('Y'))
                          ->countAllResults();

        return [
            'total'      => $total,
            'today'      => $today,
            'this_month' => $thisMonth,
        ];
    }
}
