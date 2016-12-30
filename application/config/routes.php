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
$route['estore/detail/(:any)']               = 'C_Estore/detail/$1';
$route['estore/removeitem/(:any)']           = 'C_Estore/removeitem/$1';
$route['estore/inc-qty/(:any)']              = 'C_Estore/increase_quantity/$1';
$route['estore/dec-qty/(:any)']              = 'C_Estore/decrease_quantity/$1';
$route['estore/addtocart']                   = 'C_Estore/addtocart';
$route['estore/emptycart']                   = 'C_Estore/emptycart';
$route['estore/purchase']                    = 'C_Estore/purchase';
$route['estore/(:any)']                      = 'C_Estore/view/$1';
$route['booking']                            = 'C_Booking/view';
$route['forum']                              = 'C_Forum/view';
$route['forum/(:any)']                       = 'C_Forum/view/$1';
$route['payment/form_payment/(:any)']        = 'C_Payment/view/$1';
$route['payment/success/(:any)']             = 'C_Payment/pay_success/$1';


// ADMIN
// NEWS
$route['admin/news/addnews']                 = 'Admin/C_Admin_News/addnews';
$route['admin/news/listnews']                = 'Admin/C_Admin_News/listnews';
$route['admin/news/listnews/(:num)']         = 'Admin/C_Admin_News/listnews'; //for Pagination
$route['admin/news/addcategory']             = 'Admin/C_Admin_News/addcategory';
$route['admin/news/deletenews/(:any)']       = 'Admin/C_Admin_News/deletenews/$1';
$route['admin/news/readmore/(:any)']         = 'Admin/C_Admin_News/readmore/$1';
$route['admin/news/editnews/(:any)']         = 'Admin/C_Admin_News/editnews/$1';
//
// MEMBER
$route['admin/member/addmember']             = 'Admin/C_Admin_Member/addmember';
$route['admin/member/addrole']               = 'Admin/C_Admin_Member/addrole';
$route['admin/member/listmember']            = 'Admin/C_Admin_Member/listmember';
//
// ESTORE
$route['admin/estore/addproduct']            = 'Admin/C_Admin_Estore/addproduct';
$route['admin/estore/addcategory']           = 'Admin/C_Admin_Estore/addcategory';
$route['admin/estore/paymentlist']           = 'Admin/C_Admin_Estore/paymentlist';
$route['admin/estore/restock']               = 'Admin/C_Admin_Estore/restock';
$route['admin/estore/getproductbycategory']  = 'Admin/C_Admin_Estore/GetProdutByCategory';
$route['admin/estore/getproductbyid']        = 'Admin/C_Admin_Estore/GetProductById';
//
$route['admin/login']                        = 'Admin/C_Admin_Login/login';
$route['admin/(:any)']                       = 'Admin/C_Admin_Pages/view/$1';
$route['admin']                              = 'Admin/C_Admin_Pages/view';



$route['default_controller']                 = 'C_Pages/view';
$route['(:any)']                             = 'C_Pages/view/$1';
$route['404_override']                       = '';
$route['translate_uri_dashes']               = FALSE;