<?php

namespace App\Models;

use CodeIgniter\Model;

class HpLeadModel extends Model
{
    protected $table            = 'hp_leads';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'full_name',
        'mobile_number',
        'business_email',
        'company_name',
        'designation',
        'city',
        'consent_processing',
        'consent_marketing',
        'source_page',
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
     * Ensure the hp_leads table exists in MySQL database
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
                    'mobile_number' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '50',
                    ],
                    'business_email' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                    ],
                    'company_name' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                    ],
                    'designation' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '255',
                        'null'       => true,
                    ],
                    'city' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '150',
                        'null'       => true,
                    ],
                    'consent_processing' => [
                        'type'       => 'TINYINT',
                        'constraint' => 1,
                        'default'    => 0,
                    ],
                    'consent_marketing' => [
                        'type'       => 'TINYINT',
                        'constraint' => 1,
                        'default'    => 0,
                    ],
                    'source_page' => [
                        'type'       => 'VARCHAR',
                        'constraint' => '100',
                        'default'    => 'hpaipcs',
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
                $forge->addKey('business_email');
                $forge->addKey('created_at');
                $forge->createTable($this->table, true);
            }
        } catch (\Throwable $e) {
            log_message('error', 'HpLeadModel::ensureTableExists error: ' . $e->getMessage());
        }
    }

    /**
     * Get paginated and filtered leads data for DataTables
     */
    public function getAllLeadsData($search = null, $limit = null, $offset = null, $orderColumn = 'id', $orderDir = 'desc')
    {
        $builder = $this->db->table($this->table);
        $builder->select('id, full_name, mobile_number, business_email, company_name, designation, city, consent_processing, consent_marketing, source_page, ip_address, created_at');

        if (!empty($search)) {
            $builder->groupStart()
                ->like('full_name', $search)
                ->orLike('mobile_number', $search)
                ->orLike('business_email', $search)
                ->orLike('company_name', $search)
                ->orLike('designation', $search)
                ->orLike('city', $search)
                ->orLike('source_page', $search)
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
                ->orLike('mobile_number', $search)
                ->orLike('business_email', $search)
                ->orLike('company_name', $search)
                ->orLike('designation', $search)
                ->orLike('city', $search)
                ->orLike('source_page', $search)
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
        $builder->select('id, full_name, mobile_number, business_email, company_name, designation, city, consent_processing, consent_marketing, source_page, ip_address, created_at');

        if (!empty($search)) {
            $builder->groupStart()
                ->like('full_name', $search)
                ->orLike('mobile_number', $search)
                ->orLike('business_email', $search)
                ->orLike('company_name', $search)
                ->orLike('designation', $search)
                ->orLike('city', $search)
                ->orLike('source_page', $search)
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
