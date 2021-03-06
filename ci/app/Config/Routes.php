<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index');
$routes->get('/summary', 'Pages::checkout');
$routes->post('/completeorder', 'Pages::order');
$routes->get('/adminer', 'Admin::index');
$routes->POST('/postlogin', 'Admin::postlogin');
$routes->get('/logout', 'Admin::logout');
$routes->get('/admin/products', 'Admin::product');
$routes->post('/admin/products', 'Admin::tabledit');
$routes->get('/admin/orders', 'Admin::order');
$routes->get('/admin/pref', 'Admin::pref');
$routes->post('/admin/pref/basicinfo', 'Admin::prefBasicInfo');
$routes->post('/admin/pref/logininfo', 'Admin::prefUserInfo');
$routes->post('/admin/pref/bankinfo', 'Admin::prefBankInfo');
$routes->post('/admin/pref/mbanner', 'Admin::prefMbanner');
$routes->post('/admin/pref/dbanner', 'Admin::prefDbanner');
$routes->post('/admin/newproduct', 'Admin::newproduct');
$routes->post('/admin/deleteproduct', 'Admin::delproduct');
$routes->get('/dashboard', 'Admin::dash');
$routes->post('/dashboard', 'Admin::tabledit');

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
