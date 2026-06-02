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
      
    public function apple()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
        return view('ui/appleheader', $data)
            . view('ui/apple/apple', $data)
            . view('ui/footer', $data)
            . view('ui/htmlend');
    }

    public function appleTcoCalculator()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
        return view('ui/appleheader', $data)
            . view('ui/apple/apple-tco-calc', $data)
            . view('ui/footer', $data)
            . view('ui/htmlend');
    }

    public function appleEnterprises()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
        return view('ui/appleheader', $data)
            . view('ui/apple/apple-enterprises', $data)
            . view('ui/footer', $data)
            . view('ui/htmlend');
    }
    public function appleSmartEpp()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
        return view('ui/appleheader', $data)
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

     public function hpforbusiness()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
           return view('ui/header', $data)
            .  view('ui/hpforbusiness/hpforbusiness', $data)
            . view('ui/footer', $data)
            . view('ui/htmlend');
    }
     public function blogs()
    {
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
           return view('ui/header', $data)
            .  view('ui/blogs/blog', $data)
            . view('ui/footer', $data)
            .view('ui/blogs/blog_js')
            . view('ui/htmlend');
    }
     public function blog($slug)
    {
        $data['meta'] = $this->seo->where('url_path', $this->uri->getSegment(2))->first();
        $data['slug'] =$slug;
        return view('ui/header', $data)
            .  view('ui/blogs/single_blog', $data)
            . view('ui/footer', $data)
            .view('ui/blogs/single_blog_js',$data)
            . view('ui/htmlend');
    }

    public function sitemap()
    {
        $this->url_path = $this->uri->getSegment(1) ?: 'sitemap';
        $data['meta'] = $this->seo->where('url_path', $this->url_path)->first();
        
        // Fallback meta if not found in DB
        if (!$data['meta']) {
            $data['meta'] = [
                'meta_title' => 'Sitemap | Innovative Tech Hub Pvt. Ltd.',
                'meta_description' => 'Complete sitemap of Innovative Tech Hub Pvt. Ltd. (ITHPL) website.',
                'meta_keywords' => 'sitemap, ithpl sitemap, website navigation'
            ];
        }

        $postModel = new \App\Models\PostModel();
        $data['blogs'] = $postModel->fetchAllPosts();

        return view('ui/header', $data)
            . view('ui/sitemap', $data)
            . view('ui/footer', $data)
            . view('ui/htmlend');
    }

    public function sitemapXml()
    {
        $postModel = new \App\Models\PostModel();
        $data['blogs'] = $postModel->fetchAllPosts();
        
        $this->response->setContentType('text/xml');
        return view('ui/sitemap_xml', $data);
    }

}
