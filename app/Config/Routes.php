<?php

namespace config;

// use CodeIgniter\Router\RouteCollection;
$routes = Services::routes();

if (is_file(SYSTEMPATH . 'Config/Routes.php'))
{
    require SYSTEMPATH . 'Config/Routes.php';
}


$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// CRUD Routes
$routes->get('users-list', 'UserCrud::index');
$routes->get('user-form', 'UserCrud::create');
$routes->post('submit-form', 'UserCrud::store');
$routes->get('edit-view/(:num)', 'UserCrud::singleUser/$1');
$routes-> post('update', 'UserCrud::update');
$routes-> get('delete/(:num)', 'UserCrud::delete/$1');

// you will have access to the $routes object within that file without needing to reload it.

if(is_file(APPPATH . 'config/' . ENVIRONMENT . '/Routes.php')){
    require APPPATH . 'config/' . ENVIRONMENT . '/Routes.php';
}
