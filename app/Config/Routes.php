<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/todo', 'TodoController::index');
$routes->post('/todo', 'TodoController::addTodo');
$routes->get('/todo/selesai/(:num)', 'TodoController::markAsDone/$1');
$routes->get('/todo/hapus/(:num)', 'TodoController::delete/$1');

// fungsi ini untuk menampilkan halaman profil ketika diakses melalui url
$routes->get('ktp', 'Ktp::index');
$routes->get('ktm', 'ktmcontroller::index');

$routes->get('input', 'PesanController::input');
$routes->get('proses', 'PesanController::proses');

$routes->get('submit', 'datacontroller::input');
$routes->get('proseskelulusan', 'datacontroller::proses');

use App\Controllers\AsistenController;
$routes->match(['get', 'post'], 'asisten/simpan',
[AsistenController::class, 'simpan']);

$routes->match(['get', 'post'], 'asisten/edit',
[AsistenController::class, 'edit']);

$routes->match(['get', 'post'], 'asisten/hapus',
[AsistenController::class, 'hapus']);

$routes -> get('asisten', 'AsistenController::index');

$routes->get('login', 'logincontroller::index');
use App\Controllers\logincontroller;
$routes->match(['get', 'post'], 'login/check', [logincontroller::class, 'check']);
$routes->get('login/logout', [logincontroller::class, 'logout']);




/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
