<?php

namespace App\Controllers\UI;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UiController extends BaseController
{
    public function home()
    {
        return view('header')
            . view('home/home')
            . view('footer')
            . view('htmlend');
    }
    public function aboutUs()
    {
        return view('header')
            . view('aboutUs/aboutUs')
            . view('footer')
            . view('htmlend');
    }
}
