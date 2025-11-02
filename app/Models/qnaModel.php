<?php

namespace App\Models;

use CodeIgniter\Model;

class QnaModel extends Model
{
    protected $table = 'qna';
    protected $primaryKey = 'id';
    protected $allowedFields = ['post_id','question','answer','status','created_by','updated_by','created_at','updated_at'];
    protected $useTimestamps = true;

    // Get all Q&A for DataTable with search, order, limit
    public function getAllQna($search = '', $limit = 10, $start = 0, $orderColumn = 'id', $orderDir = 'asc')
    {
        //$builder = $this->builder();
         $builder = $this->db->table('qna q');

        $builder->select('q.*, p.title as post');
        $builder->join('posts p', 'p.id = q.post_id', 'left');
        if ($search) {
            $builder->groupStart()
                    ->like('q.question', $search)
                    ->orLike('q.answer', $search)
                    ->orLike('p.title', $search)
                    ->groupEnd();
        }
        $builder->orderBy($orderColumn, $orderDir);
        $builder->limit($limit, $start);
        return $builder->get()->getResultArray();
    }

    public function countAllQna()
    {
        return $this->countAllResults(false); // false to not reset query
    }

    public function countFilteredQna($search = '')
    {
        $builder = $this->builder();
        if ($search) {
            $builder->groupStart()
                    ->like('question', $search)
                    ->orLike('answer', $search)
                    ->groupEnd();
        }
        return $builder->countAllResults();
    }
    public function getQNAById($id)
    {
        return $this->select('qna.*, p.title as post')
            ->join('posts p', 'p.id = q.post_id', 'left')
            ->where('qna.id', $id)
            ->first();
    }

}
