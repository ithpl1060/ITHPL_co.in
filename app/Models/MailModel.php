<?php

namespace App\Models;

use CodeIgniter\Model;

class MailModel extends Model
{
    protected $table            = 'mail';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'email',
        'created_at',
        'source_page',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';

    public function getAllMailData($search = null, $limit = null, $offset = null, $orderColumn = null, $orderDir = 'desc')
    {
        $builder = $this->db->table('mail m');
       $builder->select('m.id, m.email, m.source_page, m.created_at');

        if (!empty($search)) {
            $builder->groupStart()
                ->like('m.email', $search)
                ->groupEnd();
        }

        if (!empty($orderColumn)) {
            $builder->orderBy($orderColumn, $orderDir);
        }

        if ($limit !== null && $offset !== null) {
            $builder->limit($limit, $offset);
        }

        return $builder->get()->getResultArray();
    }

    public function countAllMailData()
    {
        $builder = $this->db->table('mail');
        return $builder->countAllResults();
    }

    public function countFilteredMailData($search = null)
    {
        $builder = $this->db->table('mail m');
        $builder->select('m.id');

        if (!empty($search)) {
            $builder->groupStart()
                ->like('m.email', $search)
                ->groupEnd();
        }

        return $builder->countAllResults();
    }
}
