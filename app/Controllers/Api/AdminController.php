<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\UserModel;
use Firebase\JWT\JWT;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;


class AdminController extends BaseController
{
    use ResponseTrait;
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function getUser($id = 0)
    {
        // Fetch all products from the database
        if ($id) {
            $data = $this->userModel->where('id', $id)->first();
        } else {
            $data = $this->userModel->findAll();
        }

        if (!empty($data)) {
            $response = [
                'status' => 200,
                'message' => 'User Fetched successfully!',
                'data' => $data
            ];
        } else {
            $response = [
                'status' => 404,
                'message' => 'Data not Found!'
            ];
        }
        return $this->response->setJSON($response);
    }

    public function register()
    {

        // ✅ Step 1: Count existing users
        $userCount = $this->userModel->countAll();

        // ✅ Step 2: Check if limit (4 users) is reached
        if ($userCount >= 4) {
            return $this->response->setStatusCode(403)->setJSON([
                'message' => 'User limit reached. Only 4 users can be registered.'
            ]);
        }

        $username = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $rules = [
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[users.email]'
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[5]|max_length[255]'
            ],
            'confirm_password' => [
                'label' => 'Confirm Password',
                'rules' => 'required|matches[password]'
            ],
            'first_name' => 'required',
            // 'last_name'  => 'required',
            'contact'    => 'required',
        ];


        if ($this->validate($rules)) {

            $data = [
                'email' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'first_name' => $this->request->getVar('first_name'),
                'last_name' => $this->request->getVar('last_name'),
                'contact' => $this->request->getVar('contact'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];

            $result = $this->userModel->save($data);

            $key = getenv('JWT_SECRET');
            $iat = time(); // current timestamp value
            $exp = $iat + 3600;

            $payload = [
                "iss" => "Issuer of the JWT",
                "aud" => "Audience that the JWT",
                "sub" => "Subject of the JWT",
                "iat" => $iat,
                //Time the JWT issued at
                "exp" => $exp,
                // Expiration time of token
                "email" => $this->userModel->getInsertID(),
            ];
            //print_r($payload);exit;
            try {
                $token = JWT::encode($payload, $key, 'HS256');
            } catch (\Exception $e) {
                exit($e->getMessage());
            }

            $response['message'] = 'Thank you for registering your new account!';
            $response['userid'] = $this->userModel->getInsertID();
            $response['url'] = base_url();
            $response['token'] = $token;
            $response['status'] = 200;

            return $this->respond($response, 200);
        } else {
            return $this->response->setStatusCode(409)->setJSON([
                'errors' => $this->validator->getErrors(),
                'message' => 'Invalid Inputs'
            ]);
        }
    }

    public function updateUser()
    {
        $userData = [
            'id' => $this->request->getVar('uid'),
            'email' => $this->request->getVar('uEmail'),
            'first_name' => $this->request->getVar('uFirst_name'),
            'last_name' => $this->request->getVar('uLast_name'),
            'contact' => $this->request->getVar('uContact'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if (!$this->userModel->save($userData)) {
            return $this->response->setStatusCode(500)->setJSON([
                'message' => 'Failed to update user.'
            ]);
        }

        $response = [
            'status' => 200,
            'message' => 'User Data Updated Successfully!',
        ];

        return $this->response->setStatusCode(200)->setJSON($response);
    }

    public function index()
    {

        $data = [
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];

        $user = $this->userModel->where('email', $data['email'])->first();

        if (is_null($user)) {
            return $this->respond(['error' => 'Invalid username or password.'], 401);
        }

        $pwd_verify = password_verify($data['password'], $user['password']);

        if (!$pwd_verify) {
            return $this->respond(['error' => 'Invalid username or password.'], 401);
        }

        // print_r($data);
        $empDetails = $this->userModel->get_authenticate($data);
        // print_r($empDetails);
        // exit;

        $key = getenv('JWT_SECRET');
        $iat = time(); // current timestamp value
        $exp = $iat + 3600;

        $payload = array(
            "iss" => "Issuer of the JWT",
            "aud" => "Audience that the JWT",
            "sub" => "Subject of the JWT",
            "iat" => $iat,
            //Time the JWT issued at
            "exp" => $exp,
            // Expiration time of token
            "email" => $user['email'],
        );

        $token = JWT::encode($payload, $key, 'HS256');

        $session = \Config\Services::session();

        $sessionData = array(
            'username' => $user['email'],
            'userid' => $user['id'],
            'token' => $token,
            'logged_in' => TRUE
        );

        $session->set('loginSession', $sessionData);


        $response['msg'] = 'user login successfully!';
        $response['empDetails'] = $empDetails;
        $response['userid'] = $user['id'];
        $response['url'] = base_url();
        $response['type'] = 'master';
        $response['token'] = $token;
        $response['status'] = 200;

        return $this->respond($response, 200);
    }


    public function fetchUsers()
    {

        $draw = $this->request->getVar('draw');
        $start = $this->request->getVar('start');
        $length = $this->request->getVar('length');
        $searchValue = $this->request->getVar('search')['value'];
        $orderColumnIndex = $this->request->getVar('order')[0]['column'] ?? 0;
        $orderDir = $this->request->getVar('order')[0]['dir'] ?? 'desc';

        $columns = [
            'id',
            'first_name',
            'last_name',
            'email',
            'name',
            'contact',
            'created_at',
        ];

        $orderColumn = $columns[$orderColumnIndex] ?? 'id';

        $dataList = $this->userModel->getAllUsers($searchValue, $length, $start, $orderColumn, $orderDir);
        $totalRecords = $this->userModel->countAllUsers();
        $totalFiltered = $this->userModel->countFilteredUsers($searchValue);

        $data = [];

        foreach ($dataList as $row) {
            $data[] = [
                'id' => $row['id'],
                'name' => esc($row['first_name'] . ' ' . $row['last_name']),
                'email' => esc($row['email']),
                'contact' => esc($row['contact']),
                'action' => '
                                <a href="javascript:void(0);" onclick="updateUser(' . $row['id'] . ')" title="Update User">
                                    <i class="mdi mdi-tooltip-edit" style="font-size: 20px;"></i>
                                </a>' . '&nbsp;' . '
                                <a href="javascript:void(0);" onclick="changePassword(' . $row['id'] . ')" title="Change Password">
                                    <i class="fa fa-eye" style="font-size: 20px;"></i>
                                </a>'
            ];
        }

        // . '&nbsp;' . '
        // <a href="javascript:void(0);" onclick="deleteUser(' . $row['id'] . ')" title="Delete User">
        // <i class="mdi mdi-delete-circle" style="font-size: 20px;"></i>
        // </a>'

        return $this->response->setJSON([
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalFiltered,
            'data' => $data
        ]);
    }

    public function deleteUser($id = 0)
    {

        $existingData =  $this->userModel->where('id', $id)->first();
        if ($existingData['is_admin'] == 1) {
            return $this->response->setStatusCode(403)->setJSON([
                'message' => 'Admin can’t be deleted!'
            ]);
        }

        if ($existingData) {
            $result =  $this->userModel->where('id', $id)->delete();
            if (!empty($result)) {
                $response = [
                    'status' => 200,
                    'message' => 'Data Deleted successfully!',
                    'data' => $result
                ];
            } else {
                $response = [
                    'status' => 404,
                    'message' => 'Data not Found!'
                ];
            }
        } else {
            $response = [
                'status' => 404,
                'message' => 'Data not Found!'
            ];
        }
        return $this->response->setJSON($response);
    }


    public function changePassword()
    {
        $id = $this->request->getVar('pId');
        $password = $this->request->getVar('uPassword');

        // print_r($id);
        // exit;

        if (!$password) {
            return $this->response->setStatusCode(400)->setJSON([
                'message' => 'Password are required.'
            ]);
        }

        $data = [
            'id' => $id,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'updated_at' => date('Y-m-d H:i:s') // optional
        ];

        if ($this->userModel->save($data)) {
            return $this->response->setStatusCode(200)->setJSON([
                'message' => 'Password updated successfully.'
            ]);
        } else {
            return $this->response->setStatusCode(500)->setJSON([
                'message' => 'Failed to update password.'
            ]);
        }
    }
}
