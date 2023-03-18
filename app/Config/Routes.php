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
$routes->add('inicio','Inicio::index');
$routes->add('inicio','InicioLog::index');
$routes->add('/login','LoginController::index');
 $routes->add('/register','RegisterController::index');
$routes->add('/gamesplayStation','GamesplayStation::index');
$routes->add('/ofertas','OfertasController::index');
$routes->add('/admin/inicio','AdminController::index');
$routes->add('/admin/registroVideojuegos','AgregarJuegoController::index');
$routes->add('/admin/registroAdmin','RegistroAdminController::index');
$routes->add('/admin/catalogoVideojuegos','CatalogoVideojuegos::index');
$routes->add('/admin/catalogoAdmin','CatalogoAdministradores::index');
$routes->add('/ShoppingCar','ShoppingCarController::index');

//Guardado de datos
$routes->add('/guardar_juego','AgregarJuegoController::guardar_juego');
$routes->add('/guardar_persona','RegisterController::guardar_persona'); //este descomentar para que funcione el proyect WorldGames
$routes->add('/guardar_admin','RegistroAdminController::guardar_admin');
$routes->add('/verificar_login','LoginController::verificar_login');




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
