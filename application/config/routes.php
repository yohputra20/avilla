<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'front/home_controllers';
$route['404_override'] = '';

/* Front Route */
$route['home'] = 'front/home_controllers';
$route['home/load_more_news'] = 'front/home_controllers/load_more_news';
$route['home/load_more_comissions'] = 'front/home_controllers/load_more_comissions';
$route['comissions_detail/(:any)'] = "front/home_controllers/comissions_detail/$1";
$route['detail/(:any)/(:any)'] = "front/home_controllers/detail_page/$1/$2";
$route['home/kirim_kontak_kami'] = 'front/home_controllers/kirim_kontak_kami';
$route['sendcontactus'] = 'front/home_controllers/sendcontactus';
// $route['translate_uri_dashes'] = FALSE;
// $route['translate_uri_dashes'] = FALSE;

/* Admin Route */
$route['admin'] = 'admin/login';
$route['admin/home'] = 'admin/home';
$route['admin/banner'] = 'admin/banner';
$route['admin/about_us'] = 'admin/about_us';
$route['admin/product'] = 'admin/product';
$route['admin/service'] = 'admin/service';
$route['admin/client'] = 'admin/client';
$route['admin/contact_us'] = 'admin/contact_us';

// front route
$route['detail/(:any)/(:any)'] = 'front/home_controllers/detail_page/$1/$2';
$route['spesifikasi-produk/(:any)'] = 'front/home_controllers/spesifikasi_produk/$1';
//$route['detail-service/(:any)/(:any)'] = 'front/home_controllers/detail_page/$1/$2';


