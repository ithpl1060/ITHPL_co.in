<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Admin\AdminController as WebAdminController;
use App\Controllers\Api\AdminController as ApiAdminController;
use App\Controllers\Api\SeoController;
use App\Controllers\UiController;

/**
 * @var RouteCollection $routes
 */
$routes->get('login', [WebAdminController::class, 'index']);

$routes->group('seo', function ($routes) {
    $routes->get('/', [WebAdminController::class, 'seo']);        // localhost/uservcard
    $routes->get('create', [WebAdminController::class, 'createSeo']);   // localhost/uservcard/create
    $routes->get('update/(:num)', [WebAdminController::class, 'updateSeo']);   // localhost/uservcard/create
    // Add more routes as needed
});


// api 
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


