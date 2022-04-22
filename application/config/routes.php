<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['dashboard'] = 'Welcome';
$route['report'] = 'Report/index';
$route['report/add-info'] = 'Report/add_info';
$route['user'] = 'User/index';
$route['user/add'] = 'User/add';
$route['user/delete/(:any)'] = 'User/delete/$1';
$route['workorder'] = 'WorkOrder';
$route['workorder/add'] = 'WorkOrder/add';
$route['workorder/edit/(:any)'] = 'WorkOrder/edit/$1';
$route['workorder/delete/(:any)'] = 'WorkOrder/delete/$1';
$route['workorder/download/(:any)'] = 'WorkOrder/DownloadFile/$1';
$route['workorder/updateStatus/(:any)/(:any)'] = 'WorkOrder/updateStatus/$1/$2';
$route['workorder/view/(:any)'] = 'WorkOrder/viewByID/$1';
$route['logout'] = 'Login/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
