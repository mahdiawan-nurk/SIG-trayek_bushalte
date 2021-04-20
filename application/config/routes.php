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
$route['default_controller'] = 'welcome';
//ruoter frontend
$route['home.html'] = 'welcome';
$route['bus.html'] = 'welcome/bus';
$route['peta.html'] = 'welcome/peta';
$route['halte.html'] = 'welcome/halte';
$route['login.html'] = 'secure';
$route['registrasi.html'] = 'secure/registrasi';
$route['lupapass.html'] = 'secure/forgotpass';
$route['createforgot.html'] = 'secure/forgotSaveToken';
$route['forgotsavenewPass.html'] = 'secure/forggotnewPass';
$route['daftarakun.html'] = 'secure/saveregistrasi';
$route['readmore.html/(:any)'] = 'welcome/readmore/$1';
$route['home.html/page/(:num)'] = 'welcome/index/$1'; 
$route['home.html/page'] = 'welcome/index'; 
$route['bus.html/page/(:num)'] = 'welcome/bus/$1'; 
$route['bus.html/page'] = 'welcome/bus'; 
$route['halte.html/page/(:num)'] = 'welcome/halte/$1'; 
$route['halte.html/page'] = 'welcome/halte'; 

//end router frontend

//router admin backend
$route['adminlogin'] = 'admin';
$route['autentikasi.html'] = 'secure/ceklogin';


//end admin backend
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
