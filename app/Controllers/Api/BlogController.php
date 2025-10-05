<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\PostModel;
use CodeIgniter\HTTP\ResponseInterface;

class BlogController extends BaseController
{
    public function createCategory()
    {
        $category = new CategoryModel();

        $data = [
            'name' => $this->request->getVar('category'),
            'slug' => $this->request->getVar('slug')
        ];
        // print_r($data); exit; 
        $result = $category->insert($data);

        if (!empty($result)) {

            $response = [
                'status' => 200,
                'message' => 'Category Created Successfully!',
                'data' => $result
            ];
            return $this->response->setJSON($response);
        } else {
            $response = [
                'status' => 404,
                'message' => 'Data not Found!'
            ];
            return $this->response->setJSON($response);
        }
    }

    public function getCategory($id = 0)
    {
        $category = new CategoryModel();
        if ($id) {
            $data = $category->where('id', $id)->first();
        } else {
            $data = $category->findAll();
        }
        if (!empty($data)) {
            $response = [
                'status' => 200,
                'message' => 'All Data Fetch successfully!',
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

    public function createPost()
    {
        $post = new PostModel();

        $data = [
            'title' => $this->request->getVar('title'),
            'slug' => $this->request->getVar('slug'),
            'body' => $this->request->getVar('body'),
            'status' => $this->request->getVar('status'),
            'category_id' => $this->request->getVar('category_id')
        ];
        // print_r($data); exit;
        $id = $post->insert($data);

        if ($id) {
            $newPost = $post->find($id);
            return $this->response->setJSON([
                'status' => 200,
                'message' => 'Post Created Successfully!',
                'data' => $newPost
            ]);
        } else {
            return $this->response->setStatusCode(400)
                ->setJSON([
                    'status' => 400,
                    'message' => 'Post creation failed!'
                ]);
        }
    }

    public function getPost($id = 0)
    {
        $post = new PostModel();
        if ($id) {
            $data = $post->where('id', $id)->first();
        } else {
            $data = $post->findAll();
        }
        if (!empty($data)) {
            $response = [
                'status' => 200,
                'message' => 'All Data Fetch successfully!',
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
}