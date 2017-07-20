<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'User';
$route['home'] = 'user';
$route['register'] = 'user/register';
$route['login'] = 'user/login';
$route['logout'] = 'user/logout';
$route['posts'] = 'user/posts';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
