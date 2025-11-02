<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\PostModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\QnaModel;


class BlogController extends BaseController
{
    public function createCategory()
    {
        $category = new CategoryModel();

        $data = [
            'name' => $this->request->getVar('category'),
            'slug' => $this->request->getVar('slug'),
            'is_active' => $this->request->getVar('is_active') ?? 0,
        ];

        $data['icon_img'] = $this->handleImageUpload('icon_image');
        //print_r($data); exit; 
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

    public function getCategory()
    {
        $category = new CategoryModel();
        $draw = $this->request->getVar('draw');
        $start = $this->request->getVar('start');
        $length = $this->request->getVar('length');
        $searchValue = $this->request->getVar('search')['value'];
        $orderColumnIndex = $this->request->getVar('order')[0]['column'] ?? 0;
        $orderDir = $this->request->getVar('order')[0]['dir'] ?? 'asc';

        $columns = [
            'id',
            'name',
            'slug',
            'is_active'
        ];

        $orderColumn = $columns[$orderColumnIndex] ?? 'id';
        $dataList = $category->getAllCategories($searchValue, $length, $start, $orderColumn, $orderDir);
        $totalRecords = $category->countAllCategories();
        $totalFiltered = $category->countFilteredCategories($searchValue);

        $data = [];

        foreach ($dataList as $row) {
            $data[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'slug' => $row['slug'],
                'is_active' => $row['is_active'],
            ];
        }

        return $this->response->setJSON([
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalFiltered,
            'data' => $data
        ]);
    }

    public function getCategoryById($id)
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
    public function updateCategory($id = null)
    {
        $category = new CategoryModel();

        if (!$id) {
            return $this->response->setJSON([
                'status' => 400,
                'message' => 'Invalid request: Category ID missing!'
            ]);
        }

        // Collect input data from request
        $data = [
            'name' => $this->request->getVar('category'),
            'slug' => $this->request->getVar('slug'),
            'is_active' => $this->request->getVar('is_active') ?? 0,
        ];

        // Check if category exists
        $existing = $category->find($id);
        if (!$existing) {
            return $this->response->setJSON([
                'status' => 404,
                'message' => 'Category not found!'
            ]);
        }

        // Perform update
        $fileName = $this->request->getFile('icon_image');
        if ($fileName === false || strlen($fileName) === 0) {
        } else {
            $data['icon_img'] = $this->handleImageUpload('icon_image');
        }
        $result = $category->update($id, $data);

        if ($result) {
            $updatedData = $category->find($id);
            return $this->response->setJSON([
                'status' => 200,
                'message' => 'Category Updated Successfully!',
                'data' => $updatedData
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 500,
                'message' => 'Failed to update category!'
            ]);
        }
    }

    public function createPost()
    {
        $post = new PostModel();
        $isInsert=false;
        $data = [
            'id' => $this->request->getVar('id'),
            'title' => $this->request->getVar('title'),
            'slug' => $this->request->getVar('slug'),
            'user_id' => $this->request->getVar('empId'),
            'highlight_text' => $this->request->getVar('post_highlight_content'),
            'body' => $this->request->getVar('post_content'),
            'status' => $this->request->getVar('status'),
            'category_id' => $this->request->getVar('category_id'),
            'created_by' => $this->request->getVar('empId'),
            'is_popular' => $this->request->getVar('popular')
        ];

        if (empty($data['id'])) {
            $data['img_url'] = $this->handleImageUpload('blog_image');
            $id = $post->insert($data);
            $isInsert = true;
        } else {
            //update the post
            $data['updated_by']=$this->request->getVar('empId');
            $fileName = $this->request->getFile('blog_image');
            if ($fileName === false || strlen($fileName) === 0) {
            } else {
                $data['img_url'] = $this->handleImageUpload('blog_image');
            }
             $post->update($data['id'], $data);
             $id = $data['id'];
            //print_r($data); exit;
        }


        if ($id) {
            
            $newPost = $post->find($id);
            return $this->response->setJSON([
                'status' => 200,
                'message' => $isInsert? 'Post Created Succssfully' : 'Post Updated Successfully!',
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

    public function getPostForUI()
    {
        $start = $this->request->getVar('page') ?? 0;
        $length = $this->request->getVar('limit') ?? 6; // posts per page
        $searchValue = $this->request->getVar('search');
        //$searchValue = $this->request->getGet('category');
        $orderColumn = '';
        $orderDir = 'desc';
        $post = new PostModel();
        
        $dataList = $post->getAllPosts($searchValue, $length, $start, $orderColumn, $orderDir);
        $totalRecords = $post->countAllPosts();
        $totalFiltered = $post->countFilteredPosts($searchValue);
        $pagination = ceil($totalFiltered/$length);
        $data = [];
        
        foreach ($dataList as $row) {
            $data[] = [
                'id' => $row['id'],
                'title' => $row['title'],
                'slug' => $row['slug'],
                'url' => $row['img_url'],
                'status' => $row['status'],
                'created_by' => $row['first_name'] . ' ' . $row['last_name'],
                'created_at' => $row['created_at'],
                'category_id' => $row['category_id'],
                'category' => $row['cname'],
                'highlight_text' => $row['highlight_text'],
                ' body' => $row['body']
            ];
        }
        //print_r($data);exit;
        return $this->response->setJSON([
            'status' => 200,
            'message' => 'Posts fetched successfully',
            'data' => $data,
            'start' => $start,
            'totalPages' => $pagination,
            //'totalItems' => $post->pager->getTotal(),
            'perPage' => (int)$length,            
            //'hasNext' => $post->pager->hasMore(),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalFiltered,
        ]);
    }
    public function getPost()
    {
        $post = new PostModel();
        $draw = $this->request->getVar('draw');
        $start = $this->request->getVar('start');
        $length = $this->request->getVar('length');
        $searchValue = $this->request->getVar('search')['value'];
        $orderColumnIndex = $this->request->getVar('order')[0]['column'] ?? 0;
        $orderDir = $this->request->getVar('order')[0]['dir'] ?? 'asc';

        $columns = [
            'id',
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

        $orderColumn = $columns[$orderColumnIndex] ?? 'id';
        $dataList = $post->getAllPosts($searchValue, $length, $start, $orderColumn, $orderDir);
        //print_r($dataList);exit;
        $totalRecords = $post->countAllPosts();
        $totalFiltered = $post->countFilteredPosts($searchValue);

        $data = [];

        foreach ($dataList as $row) {
            $data[] = [
                'id' => $row['id'],
                'title' => $row['title'],
                'category' => $row['cname'],
                'slug' => $row['slug'],
                'status' => $row['status'],
                'created_by' => $row['first_name'] . ' ' . $row['last_name'],
                'created_at' => $row['created_at'],
                'category_id' => $row['category_id']
            ];
        }

        return $this->response->setJSON([
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalFiltered,
            'data' => $data
        ]);
    }
    public function getPostById($id = 0)
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
    public function getPostBySlug($slug)
    {
        $post = new PostModel();
        if ($slug) {
           // $data = $post->where('slug', $slug)->first();
           $data =$post->getPostBySlug($slug);
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
    public function gePopulartPost()
    {
        $post = new PostModel();
        $data =$post->getPopularPosts();
         
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

    private function handleImageUpload($fieldName)
    {
        $img = $this->request->getFile($fieldName);

        if ($img && $img->isValid() && !$img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move('resource/blogs', $newName);

            return 'resource/blogs/' . $newName;
        }

        return null;
    }
    private function handleImageUploadForUpdate($fieldName, $oldFilePath = null)
    {
        $img = $this->request->getFile($fieldName);

        if ($img && $img->isValid() && !$img->hasMoved()) {
            // Delete old file if exists
            if ($oldFilePath && file_exists($oldFilePath)) {
                @unlink($oldFilePath);
            }

            // Save new file with random name
            $newName = $img->getRandomName();
            $img->move('resource/blogs', $newName);

            return 'resource/blogs/' . $newName;
        }

        // No new file uploaded, return old path
        return $oldFilePath;
    }

    public function createQna()
    {
        $qna = new QnaModel();
        $data = [
            'post_id' => $this->request->getVar('post_id'),
            'question' => $this->request->getVar('question'),
            'answer' => $this->request->getVar('answer'),
            'status' => $this->request->getVar('status') ?? 'draft',
            'created_by' => $this->request->getVar('empId')
        ];

        $id = $qna->insert($data);
        
        if ($id) {
            return $this->response->setJSON([
                'status' => 200,
                'message' => 'Q&A Created Successfully!',
                'data' => $qna->find($id)
            ]);
        }

        return $this->response->setJSON([
            'status' => 400,
            'message' => 'Q&A creation failed!'
        ]);
    }

    public function getQna()
    {
        $qna = new QnaModel();
        $draw = $this->request->getVar('draw');
        $start = $this->request->getVar('start');
        $length = $this->request->getVar('length');
        $searchValue = $this->request->getVar('search')['value'] ?? '';
        $orderColumnIndex = $this->request->getVar('order')[0]['column'] ?? 0;
        $orderDir = $this->request->getVar('order')[0]['dir'] ?? 'asc';

        $columns = ['id', 'post_id', 'question', 'answer', 'status'];

        $orderColumn = $columns[$orderColumnIndex] ?? 'id';

        $dataList = $qna->getAllQna($searchValue, $length, $start, $orderColumn, $orderDir);
        $totalRecords = $qna->countAllQna();
        $totalFiltered = $qna->countFilteredQna($searchValue);

        $data = [];
        foreach ($dataList as $row) {
            $data[] = [
                'id' => $row['id'],
                'post_id' => $row['post_id'],
                'post' => $row['post'],
                'question' => $row['question'],
                'answer' => $row['answer'],
                'status' => $row['status']
            ];
        }

        return $this->response->setJSON([
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalFiltered,
            'data' => $data
        ]);
    }
   
    public function updateQna($id)
    {
        $qna = new QnaModel();
        $existing = $qna->find($id);
        if (!$existing) {
            return $this->response->setJSON([
                'status' => 404,
                'message' => 'Q&A not found!'
            ]);
        }

        $data = [
            'post_id' => $this->request->getVar('post_id'),
            'question' => $this->request->getVar('question'),
            'answer' => $this->request->getVar('answer'),
            'status' => $this->request->getVar('status') ?? $existing['status'],
            'updated_by' => $this->request->getVar('empId')
        ];

        $qna->update($id, $data);

        return $this->response->setJSON([
            'status' => 200,
            'message' => 'Q&A Updated Successfully!',
            'data' => $qna->find($id)
        ]);
    }

    public function getQnaById($id = 0)
    {
        $qna = new QnaModel();
        $data = $id ? $qna->find($id) : $qna->findAll();

        return $this->response->setJSON([
            'status' => !empty($data) ? 200 : 404,
            'message' => !empty($data) ? 'Data fetched successfully' : 'Data not found',
            'data' => $data
        ]);
    }
    public function fetchAllPosts()
    {
        $post = new PostModel();
        $data = $post->fetchAllPosts();

        return $this->response->setJSON([
            'status' => !empty($data) ? 200 : 404,
            'message' => !empty($data) ? 'Data fetched successfully' : 'Data not found',
            'data' => $data
        ]);
    }



}