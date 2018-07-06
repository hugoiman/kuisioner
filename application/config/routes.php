<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'c_auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//admin
$route['admin'] = 'c_admin';

//user
$route['kuisioner'] = 'c_user';
$route['submit'] = 'c_user/simpan';
$route['judul/(:num)'] = 'c_user/show/$1';
