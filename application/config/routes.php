<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'belajarMandarin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Rute untuk HSK1
$route['hsk1'] = 'Hsk1/index';        // Menampilkan data HSK1
$route['hsk1/add'] = 'Hsk1/add';      // Form untuk menambahkan data HSK1
$route['hsk1/edit/(:num)'] = 'Hsk1/edit/$1'; // Form untuk mengedit data HSK1
$route['hsk1/delete/(:num)'] = 'Hsk1/delete/$1'; // Menghapus data HSK1
$route['hsk1/get_question'] = 'hsk1/get_question';
