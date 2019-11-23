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
$route['default_controller']      = 'site/home';
// admin
$route['admin']                      = 'admin/auth/login';
$route['admin/login']                = 'admin/auth/login';
$route['admin/logout']               = 'admin/auth/logout';
$route['admin/exam-list']        	 = 'admin/examination/index';
$route['admin/exam-list/get']        = 'admin/examination/get';
$route['admin/exams/(:num)']         = 'admin/question/exam/$1';
$route['admin/exams/(:num)/edit']    = 'admin/examination/edit/$1';
$route['admin/exams/(:num)/update']  = 'admin/examination/update/$1';
$route['admin/qustion-list/get/(:num)'] = 'admin/question/get/$1';
$route['admin/question/(:num)/edit'] = 'admin/question/edit/$1';
$route['admin/question/(:num)/update'] = 'admin/question/update/$1';
$route['admin/user-list']            = 'admin/admin_user/index';
$route['admin/user-list/get']        = 'admin/admin_user/get';
$route['admin/admin-list']           = 'admin/admin/index';
$route['admin/admin-list/get']       = 'admin/admin/get';
$route['admin/admins/(:num)/edit']   = 'admin/admin/edit/$1';
$route['admin/admins/(:num)/delete'] = 'admin/admin/delete/$1';
$route['admin/users/(:num)/update']  = 'admin/admin_user/update/$1';
$route['admin/users/(:num)/edit']    = 'admin/admin_user/edit/$1';
$route['admin/users/(:num)/print']   = 'admin/admin_user/printer/$1';
$route['admin/users/(:num)']         = 'admin/admin_user/show/$1';
$route['admin/change_password']      = 'admin/admin/change_password';
// user
$route['forgot-password']         = 'users/forgot_password';
$route['graph']                   = 'users/graph';
$route['aboutus']                 = 'site/about_us';
$route['recommendation']          = 'site/recommendation';
$route['objective']       	      = 'site/objective';
$route['description']             = 'site/description';
$route['creator']                 = 'site/creator';
$route['activity']                 = 'site/activity';
$route['sections']                = 'site/sections';
$route['lessons']                 = 'lessons';
$route['media/(:num)']            = 'lessons/media/$1';
$route['lesson/(:num)']           = 'lessons/lesson/$1';
$route['lesson/4-2']              = 'lessons/ems_rally';
$route['addition-contents']       = 'lessons/addition_contents';
$route['addition-content/(:num)'] = 'lessons/addition_content/$1';
$route['login']                   = 'users/login';
$route['logout']                  = 'users/logout';
$route['signup']                  = 'users/sign_up';
$route['history']                 = 'history';
$route['pretest/(:num)']          = 'exams/pretest/$1';
$route['posttest/(:num)']         = 'exams/posttest/$1';
$route['submit']                  = 'exams/submit';
$route['404_override']            = '';
$route['translate_uri_dashes']    = FALSE;
