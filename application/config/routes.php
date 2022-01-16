<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'website';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['post/(:any)'] = 'website/post/$1';