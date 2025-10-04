<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\CategoryModel;


class BlogController extends BaseController
{
    public function create()
    {
        $category = new CategoryModel();

         $data = [
            'name' => $this->request->getVar('category'),
            'slug ' => $this->request->getVar('slug') 
        ];
        
        $result = $category->insert($data);

        if (!empty($result)) {

                $response = [
                    'status' => 200,
                    'message' => 'Seo Slug Created Successfully!',
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
}