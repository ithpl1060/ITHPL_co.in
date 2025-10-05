<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Admin\AdminController as WebAdminController;
use App\Controllers\Admin\BlogController;
use App\Controllers\Api\AdminController as ApiAdminController;
use App\Controllers\Api\SeoController;
use App\Controllers\Api\BlogController as APIBlogController;
use App\Controllers\UiController;

/**
 * @var RouteCollection $routes
 */
//admin UI
$routes->get('login', [WebAdminController::class, 'index']);

// SEO
$routes->group('seo', function ($routes) {
    $routes->get('/', [WebAdminController::class, 'seo']); 
    $routes->get('create', [WebAdminController::class, 'createSeo']);   
    $routes->get('update/(:num)', [WebAdminController::class, 'updateSeo']);   
    // Add more routes as needed
});

// Blogs
$routes->group('blog', static function ($routes) {

    // -------------------------
    // Category Management (Admin UI)
    // -------------------------
    $routes->group('category', static function ($routes) {
        $routes->get('/', [BlogController::class, 'category']);                  // list page → /blog/category
        $routes->get('create-category', [BlogController::class, 'createCategory']); // create page → /blog/category/create-category
    });

    // -------------------------
    // Post Management (Admin UI)
    // -------------------------
    $routes->group('post', static function ($routes) {
        $routes->get('/', [BlogController::class, 'posts']);                    // list page → /blog/post
        $routes->get('create-post', [BlogController::class, 'createPost']);     // create page → /blog/post/create-post
    });
});



// api's 
$routes->get('users', [WebAdminController::class, 'users']);
$routes->post('signUP', [ApiAdminController::class, 'register']);
$routes->post('login', [ApiAdminController::class, 'index']);
$routes->post('fetchUsers', [ApiAdminController::class, 'fetchUsers']);
$routes->get('user', [ApiAdminController::class, 'getUser']);
$routes->get('user/(:num)', [ApiAdminController::class, 'getUser/$1']);
$routes->post('user_update', [ApiAdminController::class, 'updateUser']);
$routes->delete('user/(:num)', [ApiAdminController::class, 'deleteUser/$1']);
$routes->post('change_password', [ApiAdminController::class, 'changePassword']);

$routes->post('fetchSeo', [SeoController::class, 'fetchSeo']);
$routes->post('seo', [SeoController::class, 'create']);
$routes->get('get_seo', [SeoController::class, 'getSeo']);
$routes->get('get_seo/(:num)', [SeoController::class, 'getSeo']);
$routes->delete('seo/(:num)', [SeoController::class, 'delete']);

//category
$routes->post('category', [APIBlogController::class, 'createCategory']);
$routes->get('get-category', [APIBlogController::class, 'getCategory']);
$routes->get('get-category/(:num)', [APIBlogController::class, 'getCategory']);

//post
$routes->post('post', [APIBlogController::class, 'createPost']);
$routes->get('get-post', [APIBlogController::class, 'getPost']);
$routes->get('get-post/(:num)', [APIBlogController::class, 'getPost']);



// --------------- UI ----------

$routes->get('/', [UiController::class, 'home']);
$routes->get('home', [UiController::class, 'home']);   // /home URL



$routes->get('about-us', [UiController::class, 'aboutUs']);
$routes->get('contact-us', [UiController::class, 'contact']);

$routes->get('ewaste-management', [UiController::class, 'ewasteManagement']);
$routes->get('apple-enterprises', [UiController::class, 'appleEnterprises']);
$routes->get('apple-smart-epp', [UiController::class, 'appleSmartEpp']);

$routes->get('shipping-policy', [UiController::class, 'shippingPolicy']);
$routes->get('terms-and-conditions', [UiController::class, 'termsAndConditions']);
$routes->get('privacy-policy', [UiController::class, 'privacyPolicy']);
$routes->get('refund-policy', [UiController::class, 'refundPolicy']);

$routes->get('services', [UiController::class, 'services']);
$routes->get('solutions', [UiController::class, 'solutions']);
$routes->get('sustainability', [UiController::class, 'sustainability']);
$routes->get('hpforbusiness', [UiController::class, 'hpforbusiness']);




