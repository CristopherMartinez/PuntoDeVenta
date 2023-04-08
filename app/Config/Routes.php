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
//Pruebas
$routes->get('/', 'Home::index');
$routes->add('/Articulos','Articulos::mensaje');
// $routes->add('/contacto','ContactoController::index');
$routes->add('/contacto','Contacto::index'); //Este abre la pagina contacto
$routes->add('/catalogo/(:num)','Contacto::catalogo/$1');//El $1 quiere decir la cantidad de parametros 
$routes->add('/contacto','intro::index');
// $routes->add('/guardar_persona','Contacto::guardar_persona'); //Para que funcione el ejemplo

//Rutas de pagina de venta de videojuegos
//Rutas genericas
$routes->add('/gamesplayStation','generico\GamesplayStation::index');
$routes->add('/gamesXbox','generico\GamesXboxController::index');
$routes->add('inicio','invitado\Inicio::index');
$routes->add('inicio','InicioLog::index');
$routes->add('/login','invitado\LoginController::index');
$routes->add('/guardar_sugerencia','generico\SugerenciasController::guardar_sugerencia');

//Rutas invitado
$routes->add('/register','invitado\RegisterController::index');


$routes->add('/verificar_login','invitado\LoginController::verificar_login');
$routes->add('/guardar_persona','invitado\RegisterController::guardar_persona');

//Rutas de administrador
$routes->add('/admin/inicio','admin\AdminController::index');
$routes->add('/admin/registroVideojuegos','admin\AgregarJuegoController::index');
$routes->add('/admin/registroAdmin','admin\RegistroAdminController::index');
$routes->add('/ShoppingCar','ShoppingCarController::index'); //Verificar

//Guardado
$routes->add('/guardar_admin','admin\RegistroAdminController::guardar_admin');
$routes->add('/guardar_juego','admin\AgregarJuegoController::guardar_juego');


$routes->add('/ofertas','OfertasController::index');





//pruebas 08 del 04 del 2023
$routes->get('/cerrarSesion', 'invitado\RegisterController::cerrarSesion');

// $routes->add('/ShoppingCar','ShoppingCarController::index'); //Verificar



//Pruebas
// $routes->get('/register', 'invitado\RegisterController::index');
// $routes->post('/Registrar', 'invitado\RegisterController::Registrar');
 

//Rutas agrupadas Administrador prueba
// $routes->group('admin',['namespace' => 'App\Controllers\admin'], function($routes){
//     $routes->get('inicio','AdminController::index',['as'=>'adminInicio']);
//     $routes->get('registroAdmin','RegistroAdminController::index',['as'=>'registroAdmin']);
//     $routes->get('registroVideojuegos','AgregarJuegoController::index',['as'=>'registroVideojuegos']);
// });

// $routes->group('generico',['namespace' => 'App\Controllers\generico'], function($routes){


// });


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
