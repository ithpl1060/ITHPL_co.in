<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'email',
        'password',
        'first_name',
        'last_name',
        'contact',
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



    // public function get_authenticate($data)
    // {
    //     $builder = $this->db->table('users am');
    //     $builder->select('*') // List all columns you want to select
    //         ->where("am.email", $data['email'])
    //         ->where("am.password", $data['password']);
    //     $result = $builder->get()->getRowArray();
    //     // print_r($builder->get()->getLastQuery());

    //     return $result;
    // }

    public function get_authenticate(array $data)
    {
        $builder = $this->db->table('users');
        $builder->select('*')->where('email', $data['email']);

        $user = $builder->get()->getRowArray();

        if ($user && password_verify($data['password'], $user['password'])) {
            return $user;
        }

        return null;
    }



    public function getAllUsers($search = null, $limit = null, $offset = null, $orderColumn = null, $orderDir = 'desc')
    {
        $builder = $this->db->table('users');

        // Search conditions including role_name
        if (!empty($search)) {
            $builder->groupStart()
                ->like('users.first_name', $search)
                ->orLike('users.last_name', $search)
                ->orLike('users.email', $search)
                ->orLike('users.contact', $search)
                ->groupEnd();
        }

        // Sorting
        if (!empty($orderColumn)) {
            $builder->orderBy($orderColumn, $orderDir);
        }

        // Pagination
        if ($limit !== null && $offset !== null) {
            $builder->limit($limit, $offset);
        }

        return $builder->get()->getResultArray();
    }

    public function countAllUsers()
    {
        $builder = $this->db->table('users');

        return $builder->countAllResults();
    }

    public function countFilteredUsers($search = null)
    {
        $builder = $this->db->table('users');

        if (!empty($search)) {
            $builder->groupStart()
                ->like('users.first_name', $search)
                ->orLike('users.last_name', $search)
                ->orLike('users.email', $search)
                ->orLike('users.contact', $search)
                ->groupEnd();
        }

        return $builder->countAllResults();
    }
}
