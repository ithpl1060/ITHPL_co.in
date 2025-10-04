<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class BlogController extends BaseController
{
    //category
    public function category(): string
    {
        $data['meta']['meta_title'] = 'ITHPL | Category';

        return view('header', $data)
            . view('sidebar/side_bar')
            . view('blogs/category')
            . view('footer')
            . view('blogs/category_js')
            . view('htmlend');
    }

    public function createCategory(): string
    {
        $data['meta']['meta_title'] = 'Create Category';

        return view('header', $data)
            . view('sidebar/side_bar')
            . view('blogs/addCategory')
            . view('footer')
            // . view('blogs/add_category_js')
            . view('htmlend');
    }

    public function updateCategory($id = 0): string
    {
        $data['id'] = $id;
        $data['meta']['meta_title'] = 'Update Category';

        return view('header', $data)
            . view('sidebar/side_bar')
            . view('blogs/edit_category', $data)
            . view('footer')
            // . view('blogs/edit_category_js', $data)
            . view('htmlend');
    }

    // ================== POSTS ==================

    public function posts(): string
    {
        $data['meta']['meta_title'] = 'Blog Posts';

        return view('header', $data)
            . view('sidebar/side_bar')
            . view('blogs/posts')
            . view('footer')
            // . view('blogs/posts_js')
            . view('htmlend');
    }

    public function createPost(): string
    {
        $data['meta']['meta_title'] = 'Create Post';

        return view('header', $data)
            . view('sidebar/side_bar')
            . view('blogs/add_post')
            . view('footer')
            // . view('blogs/add_post_js')
            . view('htmlend');
    }

    public function updatePost($id = 0): string
    {
        $data['id'] = $id;
        $data['meta']['meta_title'] = 'Update Post';

        return view('header', $data)
            . view('sidebar/side_bar')
            . view('blogs/edit_post', $data)
            . view('footer')
            // . view('blogs/edit_post_js', $data)
            . view('htmlend');
    }
}
