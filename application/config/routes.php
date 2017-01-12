<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// USER
$route['login/log_in']                                  = 'C_Login/log_in';
$route['logout/log_out']                                = 'C_Logout/log_out';
$route['register/regis']                                = 'C_Register/regis';
$route['register/verify/(:any)']                        = 'C_Register/verify/$1';
$route['register/verify-doctor/(:any)']                 = 'C_Register/verify_doctor/$1';
$route['user/fpassword']                                = 'C_ForgotPassword/view';
$route['forgotPassword/reset/(:any)/(:num)']            = 'C_ForgotPassword/verify_email/$1/$2';
$route['forgotPassword/requestForgot']                  = 'C_ForgotPassword/requestForgot';
$route['forgotPassword/requestReset']                   = 'C_ForgotPassword/requestReset';

$route['profile/dashboard/(:any)']                      = 'C_Profile/dashboard/$1';
$route['profile/dashboard/history/estore/(:any)']       = 'C_Profile/history_estore/$1';
$route['profile/reminder']                              = 'C_Profile/reminder';
$route['profile/payment-history']                       = 'C_Profile/payment_history';
$route['profile/edit/(:any)']                           = 'C_Profile/edit_profile_user/$1';
$route['profile/doctor/edit/(:any)']                    = 'C_Profile/edit_profile_doctor/$1';
$route['profile/doctor/mail/rating']                    = 'C_Profile/rating_doctor';//KENEDY LUKITO --> RATING DOCTOR
$route['profile/doctor/comment/(:any)']                 = 'C_Profile/add_doctor_comment/$1';
$route['profile/doctor/(:any)']                         = 'C_Profile/profile_doctor/$1';
$route['profile/view/(:any)']                           = 'C_Profile/view_profile/$1';

$route['news']                                          = 'C_News/view';
$route['news/details/(:any)']                           = 'C_News/news_details/$1';

$route['estore']                                        = 'C_Estore/view';
$route['estore/detail/(:any)']                          = 'C_Estore/detail/$1';
$route['estore/removeitem/(:any)']                      = 'C_Estore/removeitem/$1';
$route['estore/inc-qty/(:any)']                         = 'C_Estore/increase_quantity/$1';
$route['estore/dec-qty/(:any)']                         = 'C_Estore/decrease_quantity/$1';
$route['estore/addtocart']                              = 'C_Estore/addtocart';
$route['estore/emptycart']                              = 'C_Estore/emptycart';
$route['estore/purchase']                               = 'C_Estore/purchase';
$route['estore/paymentreview']                          = 'C_Payment/estore_paymentreview';
$route['estore/products/(:any)']                        = 'C_Estore/product/$1';
$route['estore/(:any)']                                 = 'C_Estore/view/$1';

$route['booking/(:any)']                                = 'C_Booking/view/$1';
$route['booking/create']                                = 'C_Booking/create_booking';
$route['booking/adddetail']                             = 'C_Booking/add_detail_booking';
$route['booking/success/(:any)']                        = 'C_Payment/pay_success/$1';

$route['forum/create']                                  = 'C_Forum/create_forum';
$route['forum/list']                                    = 'C_Forum/list_forum';
$route['forum/list/(:num)']                             = 'C_Forum/list_forum/$1'; //for pagination
$route['forum/search']                                  = 'C_Forum/search_forum';
$route['forum/detail/(:any)']                           = 'C_Forum/detail_forum/$1';
$route['forum/reply/(:any)']                            = 'C_Forum/reply/$1';
$route['forum/add-reply/(:any)']                        = 'C_Forum/add_reply/$1';
$route['forum']                                         = 'C_Forum/view';

$route['(:any)/payment/form']                           = 'C_Payment/view/$1';
$route['payment/success/(:any)']                        = 'C_Payment/pay_success/$1';

$route['search/list']                                   = 'C_Pages/search';
$route['search/listc']                                  = 'C_Pages/search_category';

// ADMIN
// Master CATEGORY
$route['admin/category/addmastercategory']              = 'Admin/C_Admin_MasterCategory/addcategory';
//
// NEWS
$route['admin/news/addnews']                            = 'Admin/C_Admin_News/addnews';
$route['admin/news/listnews']                           = 'Admin/C_Admin_News/listnews';
$route['admin/news/listnews/(:num)']                    = 'Admin/C_Admin_News/listnews'; //for Pagination
$route['admin/news/addcategory']                        = 'Admin/C_Admin_News/addcategory';
$route['admin/news/deletenews/(:any)']                  = 'Admin/C_Admin_News/deletenews/$1';
$route['admin/news/readmore/(:any)']                    = 'Admin/C_Admin_News/readmore/$1';
$route['admin/news/editnews/(:any)']                    = 'Admin/C_Admin_News/editnews/$1';
//
// MEMBER
$route['admin/member/addmember']                        = 'Admin/C_Admin_Member/addmember';
$route['admin/member/addrole']                          = 'Admin/C_Admin_Member/addrole';
$route['admin/member/listmember']                       = 'Admin/C_Admin_Member/listmember';
//
// ESTORE
$route['admin/estore/addproduct']                       = 'Admin/C_Admin_Estore/addproduct';
$route['admin/estore/addcategory']                      = 'Admin/C_Admin_Estore/addcategory';
$route['admin/estore/paymentlist']                      = 'Admin/C_Admin_Estore/paymentlist';
$route['admin/estore/payment/detail/(:any)']            = 'Admin/C_Admin_Estore/paymentdetail/$1';
$route['admin/estore/paymentlist/status/(:any)/(:any)'] = 'Admin/C_Admin_Estore/changestatus/$1/$2';
$route['admin/estore/restock']                          = 'Admin/C_Admin_Estore/restock';
$route['admin/estore/getproductbycategory']             = 'Admin/C_Admin_Estore/GetProductByCategory';
$route['admin/estore/getproductbyid']                   = 'Admin/C_Admin_Estore/GetProductById';
//
// DOCTOR
$route['admin/doctor/add-category']                     = 'Admin/C_Admin_Doctor/add_category';
//
// COMMENT
$route['admin/comment/listcomment']                     = 'Admin/C_Admin_Comment/listcomment';
$route['admin/comment/listcomment/(:num)']              = 'Admin/C_Admin_Comment/listcomment'; //for pagination
//
$route['admin/login']                                   = 'Admin/C_Admin_Login/login';
$route['admin/(:any)']                                  = 'Admin/C_Admin_Pages/view/$1';
$route['admin']                                         = 'Admin/C_Admin_Pages/view';


$route['complain']                                      = 'C_Pages/complain';
$route['default_controller']                            = 'C_Pages/view';
$route['(:any)']                                        = 'C_Pages/view/$1';
$route['404_override']                                  = '';
$route['translate_uri_dashes']                          = FALSE;
?>
