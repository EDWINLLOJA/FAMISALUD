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


//------------------URL CLIENTE------
$routes->get('/', 'Client::index');
$routes->get('nosotros/', 'Client::nosotros');

//--cita----
$routes->get('reservarcita/', 'Client::reservarcita');



//Horaario



$routes->get('filtrardatoshorario/', 'HorarioController::filtrardatoshorario');


//--------------------------FIN CLIENTE--------

//-------------------URL ADMINISTRADOR--------------
$routes->get('admin/', 'Home::admin');
$routes->get('login/', 'Login::login');

$routes->get('dashboard/', 'Admin::dashboard');
$routes->get('cita/', 'Admin::cita');
$routes->get('admingeneral/', 'Admin::admingeneral');
//---Crear administrador---



//--estado cita----
$routes->get('crear_estado_cita/', 'Admin::crear_estado_cita');
$routes->post('guardar_estadocita/', 'Admin::guardar_estadocita');
$routes->get('editar_estadocita/(:num)', 'Admin::editar_estadocita/$1');
$routes->post('actualizar_estadocita', 'Admin::actualizar_estadocita');
$routes->get('borrar_estadocita/(:num)', 'Admin::borrar_estadocita/$1');

//calendar
$routes->get('calendar/', 'Admin::calendar');





/// ---------------------------- FIN ADMINISTRADOR---------------




















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
