<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// USER
$route['login/log_in']                       = 'C_Login/log_in';
$route['logout/log_out']                     = 'C_Logout/log_out';
$route['register/regis']                     = 'C_Register/regis';
$route['user/fpassword']                     = 'C_ForgotPassword/view';
$route['forgotPassword/reset/(:any)/(:num)'] = 'C_ForgotPassword/verify_email/$1/$2';
$route['forgotPassword/requestForgot']       = 'C_ForgotPassword/requestForgot';
$route['forgotPassword/requestReset']        = 'C_ForgotPassword/requestReset';
$route['dashboard']                          = 'C_Profile/view';
$route['profile/(:any)']                     = 'C_Profile/view/$1';
$route['news']                               = 'C_News/view';
$route['news/details/(:any)']                = 'C_News/news_details/$1';
$route['estore']                             = 'C_Estore/view';
$route['estore/(:any)']                      = 'C_Estore/view/$1';
$route['booking']                            = 'C_Booking/view';
$route['forum']                              = 'C_Forum/view';
$route['forum/(:any)']                       = 'C_Forum/view/$1';
$route['payment/form_payment/(:any)']        = 'C_Payment/view/$1';
$route['payment/success/(:any)']             = 'C_Payment/pay_success/$1';


// ADMIN
$route['admin/news/addnews']                 = 'Admin/C_Admin_News/addnews';
$route['admin/news/editnews']                = 'Admin/C_Admin_News/editnews';
$route['admin/news/(:any)']                  = 'Admin/C_Admin_News/view/$1';
$route['admin/login']                        = 'Admin/C_Admin_Login/login';
$route['admin/(:any)']                       = 'Admin/C_Admin_Pages/view/$1';
$route['admin']                              = 'Admin/C_Admin_Pages/view';



$route['default_controller']                 = 'C_Pages/view';
$route['(:any)']                             = 'C_Pages/view/$1';
$route['404_override']                       = '';
$route['translate_uri_dashes']               = FALSE;