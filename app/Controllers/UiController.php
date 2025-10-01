<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SeoModel;
use CodeIgniter\HTTP\ResponseInterface;

class UiController extends BaseController
{

    protected $uri;
    protected $url_path;
    protected $seo;
    public function __construct()
    {
        $this->uri = service('uri');
        $this->url_path = $this->uri->getSegment(1);
        $this->seo = new SeoModel();
    }

    public function home()
    {
        $this->url_path = $this->uri->getSegment(1) ?: 'home';
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
        // $data['csslinks']=['main.css','home.css'];
        return view('ui/header', $data)
            . view('ui/home/home')
            . view('ui/footer')
            . view('ui/htmlend');
    }

    public function aboutUs()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
        return view('ui/header', $data)
            . view('ui/aboutUs/aboutUs', $data)
            . view('ui/footer', $data)
            . view('ui/htmlend');
    }
    public function contact()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
        return view('ui/header', $data)
            . view('ui/contact/contact', $data)
            . view('ui/footer', $data)
            . view('ui/htmlend');
    }
    public function ewasteManagement()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
        return view('ui/header', $data)
            . view('ui/sustainability/ewaste-management', $data)
            . view('ui/footer', $data)
            . view('ui/htmlend');
    }
    public function appleEnterprises()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
        return view('ui/header', $data)
            . view('ui/apple/apple-enterprises', $data)
            . view('ui/footer', $data)
            . view('ui/htmlend');
    }
    public function appleSmartEpp()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
        return view('ui/header', $data)
            . view('ui/apple/apple-smart-epp', $data)
            . view('ui/footer', $data)
            . view('ui/htmlend');
    }
    
    public function shippingPolicy()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
        return view('ui/header', $data)
            . view('ui/policies/shipping', $data)
            . view('ui/footer', $data)
            . view('ui/htmlend');
    }
    public function termsAndConditions()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
        return view('ui/header', $data)
            . view('ui/policies/terms&conditions', $data)
            . view('ui/footer', $data)
            . view('ui/htmlend');
    }
    public function privacyPolicy()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
        return view('ui/header', $data)
            . view('ui/policies/privacy', $data)
            . view('ui/footer', $data)
            . view('ui/htmlend');
    }
    public function refundPolicy()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
        return view('ui/header', $data)
            . view('ui/policies/refund', $data)
            . view('ui/footer', $data)
            . view('ui/htmlend');
    }
    public function solutions()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
        return view('ui/solutions/solutions', $data);
            // . view('ui/footer', $data)
            // . view('ui/htmlend');
    }
    public function services()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
        return view('ui/services/services', $data);
            // . view('ui/footer', $data)
            // . view('ui/htmlend');
    }
     public function sustainability()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
           return view('ui/sustainability/sustainability', $data)
            . view('ui/footer', $data)
            . view('ui/htmlend');
    }

}
