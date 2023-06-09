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

$routes->post('datospaciente', 'Combos::datospaciente');


$routes->post('guardar_cliente_cita', 'CitaController::guardar_cliente_cita');


//Horaario



$routes->get('filtrardatoshorario/', 'HorarioController::filtrardatoshorario');

//pago

$routes->get('pagocliente/', 'PagoController::pagocliente');




//--------------------------FIN CLIENTE--------

//-------------------URL ADMINISTRADOR--------------



//--cita----
$routes->get('listaCita/', 'CitaController::listaCita');

//fin



$routes->get('admin/', 'Home::admin');
$routes->get('login/', 'Login::login');

$routes->get('dashboard/', 'Admin::dashboard');
$routes->get('cita/', 'Admin::cita');
$routes->get('admingeneral/', 'Admin::admingeneral');
//---Crear administrador---

$routes->get('pagocliente1/(:any)', 'PagoController::pagocliente1/$1');


//--estado cita----
$routes->get('lista_estado_cita/', 'EstadoCitaController::lista_estado_cita');
$routes->get('crear_estado_cita/', 'EstadoCitaController::crear_estado_cita');
$routes->post('guardar_estadocita/', 'EstadoCitaController::guardar_estadocita');
$routes->get('editar_estadocita/(:num)', 'EstadoCitaController::editar_estadocita/$1');
$routes->post('actualizar_estadocita', 'EstadoCitaController::actualizar_estadocita');
$routes->get('borrar_estadocita/(:num)', 'EstadoCitaController::borrar_estadocita/$1');

//calendar
$routes->get('calendar/', 'Admin::calendar');

//$routes->get('listarcalendario/', 'Client::reservarcita');
//$routes->post('/listarcalendario', 'EspecilidadController::listarCalendario');
$routes->post('combo', 'Combos::combo');

$routes->post('datoscalendario', 'Combos::datoscalendario');




$routes->post('listarcalendario','EspecialidadController::listarcalendario');
$routes->post('calendariomodal', 'EspecialidadController::calendariomodal');

/// ---------------------------- FIN ADMINISTRADOR---------------
$routes->post('especialidarhora','Combos::especialidarhora');



















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
