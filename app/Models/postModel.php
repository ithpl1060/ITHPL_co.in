<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'title',
        'slug',
        'user_id',
        'highlight_text',
        'body',
        'status',
        'category_id',
        'img_url',
        'created_by',
        'updated_by'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    public function getAllPosts($search = null, $limit = null, $offset = null, $orderColumn = null, $orderDir = 'desc')
    {
        $builder = $this->db->table('posts ps');
        // $builder->select('*');
        $builder->select('ps.*, u.id as user_id, u.first_name, u.last_name');
        $builder->join('users u', 'u.id = ps.created_by', 'left');
        if (!empty($search)) {
            $builder->groupStart()
                ->like('ps.title', $search)
                ->orLike('ps.slug', $search)
                ->orLike('ps.status', $search)
                ->orLike('ps.created_by', $search)
                ->orLike('u.first_name', $search)
                ->orLike('u.last_name', $search)
                ->groupEnd();
        }

        if (!empty($orderColumn)) {
            if ($orderColumn === 'id') {
                $orderColumn = 'ps.id';
                $builder->orderBy($orderColumn, $orderDir);
            }
        } else {
            $builder->orderBy('ps.id', 'desc');
        }

        if ($limit !== null && $offset !== null) {
            $builder->limit($limit, $offset);
        }

        return $builder->get()->getResultArray();
    }

    public function countAllPosts()
    {
        $builder = $this->db->table('posts');
        return $builder->countAllResults();
    }

    public function countFilteredPosts($search = null)
    {
        $builder = $this->db->table('posts ps');
        $builder->select('*');
        $builder->join('users u', 'u.id = ps.created_by', 'left');
        if (!empty($search)) {
            $builder->groupStart()
                ->like('ps.title', $search)
                ->orLike('ps.slug', $search)
                ->orLike('ps.status', $search)
                ->orLike('ps.created_by', $search)
                ->orLike('u.first_name', $search)
                ->orLike('u.last_name', $search)
                ->groupEnd();
        }

        return $builder->countAllResults();
    }
}