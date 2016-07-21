<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "products";
$route['404_override'] = 'products';
$route['show']='products/show';
$route['add']='products/add';
$route['edit']='products/edit';
$route['show/(:any)']='products/show/$1';
$route['edit/(:any)']='products/edit/$1';
$route['remove/(:any)']='products/remove/$1';




/* End of file routes.php */
/* Location: ./application/config/routes.php */