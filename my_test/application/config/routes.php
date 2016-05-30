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
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//cafe
    $route['create_cafe.html'] = "cafe/createCafe";
    $route['load_cafe.html'] = "cafe/loadCafe";
    
//room
    $route['choose_room.html'] = "room/selectRoom";
    $route['upload_receipt.html/(:num)'] = "room/uploadreceipt/$1t";
    $route['save_receipt.html'] = "room/savereceipt";
    $route['process_room.html'] = "room/selToProRoom";
    $route['load_room.html'] = "room/loadroom";
    $route['create_room.html'] = "room/createRoom";
    $route['book_room.html/(:num)'] = "room/bookRoom/$1";
    $route['booking_detail.html/(:num)'] = "room/proRoomDetail/$1";
    $route['room_application.html/(:num)'] = "room/roomapplication/$1";
    $route['approve_room.html'] = "room/approveroom";
    $route['set_cafe.html'] = "room/setcafe";
    $route['booking_list.html'] = "room/bookinglist";
    $route['save_booking.html'] = "room/savebooking";
        
//login
    $route['login.html'] = "login/landing";
    $route['logon.html'] = "login/index";
    $route['home_page.html'] = "home/";
    $route['logout.html'] = "login/logout";
    
//registeruser
    $route['register_user.html'] = "user/registeruser";
    $route['create_user.html'] = "user/createuser";
    $route['user_list.html'] = "user/userlist";
    $route['signup_user.html'] = "user/signupuser";

    