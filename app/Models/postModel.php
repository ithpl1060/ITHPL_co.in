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
        'updated_by',
        'is_popular'
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

        $builder->select('ps.*, u.id as user_id, u.first_name, u.last_name,pc.name as cname');
        $builder->join('users u', 'u.id = ps.created_by', 'left');
        $builder->join('post_category pc', 'pc.id = ps.category_id', 'left');
    
        if (!empty($search)) {
            $builder->groupStart()
                ->like('ps.title', $search)
                ->orLike('ps.slug', $search)
                ->orLike('ps.status', $search)
                ->orLike('ps.created_by', $search)
                ->orLike('u.first_name', $search)
                ->orLike('u.last_name', $search)
                ->orLike('pc.name', $search)
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
        $builder->join('post_category pc', 'pc.id = ps.category_id', 'left');
        if (!empty($search)) {
            $builder->groupStart()
                ->like('ps.title', $search)
                ->orLike('ps.slug', $search)
                ->orLike('ps.status', $search)
                ->orLike('ps.created_by', $search)
                ->orLike('u.first_name', $search)
                ->orLike('u.last_name', $search)
                ->orLike('pc.name', $search)
                ->groupEnd();
        }

        return $builder->countAllResults();
    }

    public function getPostBySlug($slug)
    {
        
    $post = $this->select('posts.*, post_category.name as category')
        ->join('post_category', 'post_category.id = posts.category_id', 'left')
        ->where('posts.slug', $slug)
        ->first();

    if ($post) {
        $qnaModel = new \App\Models\QnaModel();
        $post['qna'] = $qnaModel
        ->where('post_id', $post['id'])
        ->orderBy('created_at', 'DESC')->findAll();
    }

    return $post;
    }
    public function getPopularPosts()
{
    // Get all popular posts
    $posts = $this->select('posts.*, post_category.name as category')
        ->join('post_category', 'post_category.id = posts.category_id', 'left')
        ->where('posts.is_popular', 1)
        ->orderBy('posts.created_at', 'DESC')
        ->get()
        ->getResultArray();

    // Load QnA model
    $qnaModel = new \App\Models\QnaModel();

    // Attach QnA for each post
    foreach ($posts as &$post) {
        $post['qna'] = $qnaModel
            ->where('post_id', $post['id'])
            ->orderBy('created_at', 'DESC')
            ->findAll();
    }

    return $posts;
}

    public function fetchAllPosts()
    {
        return $this->select('posts.*, post_category.name as category')
            ->join('post_category', 'post_category.id = posts.category_id', 'left')
            ->orderBy('posts.created_at', 'DESC')
            ->findAll();
    }
}