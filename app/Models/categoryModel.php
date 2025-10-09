<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table            = 'post_category';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name',
        'slug',
        'is_active'
        ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

      public function getAllCategories($search = null, $limit = null, $offset = null, $orderColumn = null, $orderDir = 'desc')
    {
        $builder = $this->db->table('post_category pc');
        $builder->select('*');

        if (!empty($search)) {
            $builder->groupStart()
                ->like('pc.name', $search)
                ->orLike('pc.slug', $search)
                ->orLike('pc.is_active', $search)
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

    public function countAllCategories()
    {
        $builder = $this->db->table('post_category');
        return $builder->countAllResults();
    }

    public function countFilteredCategories($search = null)
    {
        $builder = $this->db->table('post_category pc');
        $builder->select('*');

        if (!empty($search)) {
            $builder->groupStart()
                ->like('pc.name', $search)
                ->orLike('pc.slug', $search)
                ->orLike('pc.is_active', $search)
                ->groupEnd();
        }

        return $builder->countAllResults();
    }
}