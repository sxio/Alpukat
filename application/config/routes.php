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
$route['login/log_in']                = 'C_Login/log_in';
$route['logout/log_out']              = 'C_Logout/log_out';
$route['register/regis']              = 'C_Register/regis';
$route['user/fpassword']              = 'C_ForgotPassword/resetpassword';
$route['dashboard']                   = 'C_Profile/view';
$route['profile/(:any)']              = 'C_Profile/view/$1';
$route['news']                        = 'C_News/view';
$route['news/details/(:any)']         = 'C_News/news_details/$1';
$route['estore']                      = 'C_Estore/view';
$route['estore/(:any)']               = 'C_Estore/view/$1';
$route['booking']                     = 'C_Booking/view';
$route['forum']                       = 'C_Forum/view';
$route['forum/(:any)']                = 'C_Forum/view/$1';
$route['payment/form_payment/(:any)'] = 'C_Payment/view/$1';
$route['payment/success/(:any)']      = 'C_Payment/pay_success/$1';
$route['default_controller']          = 'C_Pages/view';
$route['(:any)']                      = 'C_Pages/view/$1';
$route['404_override']                = '';
$route['translate_uri_dashes']        = FALSE;