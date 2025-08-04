<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function users()
    {
        return view('header')
            . view('sidebar/side_bar')
            . view('users/users')
            . view('users/modal/addUsers')
            . view('users/modal/update_users')
            . view('users/modal/changePassword')
            . view('footer')
            . view('users/users_js')
            . view('htmlend');
    }
    // public function createUser()
    // {
    //     return view('header')
    //         . view('sidebar/side_bar')
    //         . view('users/addUsers')
    //         . view('footer')
    //         . view('users/addUsers_js')
    //         . view('htmlend');
    // }
    public function seo()
    {
        return view('header')
            . view('sidebar/side_bar')
            . view('seo/seo')
            . view('footer')
            . view('seo/seo_js')
            . view('htmlend');
    }

    public function createSeo()
    {
        return view('header')
            . view('sidebar/side_bar')
            . view('seo/addSeo')
            . view('footer')
            . view('seo/addSeo_js')
            . view('htmlend');
    }

    public function updateSeo($id = 0)
    {
        $data['id'] = $id;
        return view('header')
            . view('sidebar/side_bar')
            . view('seo/addSeo')
            . view('footer')
            . view('seo/updateSeo_js', $data)
            . view('htmlend');
    }
}
