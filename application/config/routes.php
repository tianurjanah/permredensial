<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home/index';

$route['home'] = 'Home/index';
$route['profile'] = 'Profile/index';

//user & login
$route['user'] = 'User/index';
$route['login'] = 'Login/index';

//master
$route['kategori'] = 'kategori/index';
$route['barang'] = 'Barang/index';
$route['perawatan'] = 'Perawatan/index';
$route['perbaikan'] = 'Perbaikan/index';
$route['kompetensi'] = 'kompetensi/index';
$route['berkas'] = 'Berkas/index';

//laporan
$route['laporanbrg'] = 'laporanbrg';
$route['laporanprw'] = 'laporanprw';
$route['laporanprb'] = 'laporanprb';

//$route['perawatan/tambah'] = 'perawatan/dataperawatan';
$route['perawatan/form_tambah'] = 'perawatan/tambahperawatan';

$route['(:any)'] = 'gagal/index/$1';
$route['404_override'] = 'Gagal/index';
$route['translate_uri_dashes'] = FALSE;