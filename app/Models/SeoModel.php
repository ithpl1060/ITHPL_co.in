<?php

namespace App\Models;

use CodeIgniter\Model;

class SeoModel extends Model
{
    protected $table            = 'seo_pages';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'page_slug',
        'meta_title',
        'url_path',
        'meta_description',
        'meta_keywords',
        'created_at',
        'updated_at',
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


    public function getAllSeoData($search = null, $limit = null, $offset = null, $orderColumn = null, $orderDir = 'desc')
    {
        $builder = $this->db->table('seo_pages sp');
        $builder->select('*');

        if (!empty($search)) {
            $builder->groupStart()
                ->like('sp.page_slug', $search)
                ->orLike('sp.meta_title', $search)
                ->orLike('sp.url_path', $search)
                ->orLike('sp.meta_description', $search)
                ->orLike('sp.meta_keywords', $search)
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

    public function countAllSeoData()
    {
        $builder = $this->db->table('seo_pages');
        return $builder->countAllResults();
    }

    public function countFilteredSeoData($search = null)
    {
        $builder = $this->db->table('seo_pages sp');
        $builder->select('*');

        if (!empty($search)) {
            $builder->groupStart()
                ->like('sp.page_slug', $search)
                ->orLike('sp.meta_title', $search)
                ->orLike('sp.url_path', $search)
                ->orLike('sp.meta_description', $search)
                ->orLike('sp.meta_keywords', $search)
                ->groupEnd();
        }

        return $builder->countAllResults();
    }
}
