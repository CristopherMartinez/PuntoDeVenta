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

//Rutas genericas
$routes->add('/gamesplayStation','generico\GamesplayStation::index');
$routes->add('/gamesXbox','generico\GamesXboxController::index');
$routes->add('inicio','invitado\Inicio::index');
$routes->add('/login','invitado\LoginController::index');
$routes->add('/guardar_sugerencia','generico\SugerenciasController::guardar_sugerencia');

//Rutas de usuario Logueado
$routes->add('/usuario/inicio','invitado\Inicio::indexLog');
$routes->add('/usuario/gamesXbox','generico\GamesXboxController::indexGameXboxLog');
$routes->add('/usuario/ShoppingCar','usuario\ShoppingCarController::index'); 
$routes->add('/usuario/gamesPlayStation','generico\GamesplayStation::indexLog');

$routes->add('/usuario/listaCarrito','usuario\ShoppingCarController::listaCarrito');
$routes->add('/usuario/listaDeseos','usuario\DeseosController::listaDeseos');
//Agregar Deseo
$routes->add('/agregarDeseo','usuario\DeseosController::agregarDeseo');
//Eliminar Deseos
$routes->add('/eliminarDeseos','usuario\DeseosController::eliminarDeseos');


//Rutas invitado
$routes->add('/SingUp','invitado\RegisterController::index');
$routes->add('/verificar_login','invitado\LoginController::verificar_login');
$routes->add('/guardar_persona','invitado\RegisterController::guardar_persona');
// $routes->add('/invitado/nosotros','invitado\Inicio::pageNosotrosinvitado');



//Rutas de administrador
$routes->add('/admin/inicio','admin\AdminController::index');
$routes->add('/admin/clientes','admin\AdminController::recuperarclientes');
$routes->add('/admin/registroVideojuegos','admin\AgregarJuegoController::index');
$routes->add('/admin/registroAdmin','admin\RegistroAdminController::index');
$routes->add('/admin/ventas','admin\AdminController::ventas');
$routes->add('/admin/login','admin\AdminController::mostrarVistaLogin');

//Guardado de Juegos y Admin
$routes->add('/guardar_admin','admin\RegistroAdminController::guardar_admin');
$routes->add('/guardar_juego','admin\AgregarJuegoController::guardar_juego');

//Administrador Videojuegos
$routes->get('/borrar/(:num)','admin\AgregarJuegoController::borrar/$1');
//Editar Juego
$routes->get('/editar/(:num)','admin\AgregarJuegoController::editar/$1');
//Actualizar
$routes->post('/actualizar','admin\AgregarJuegoController::actualizar');

//Cerrar sesion
$routes->get('/cerrarSesion', 'invitado\RegisterController::cerrarSesion');



// $routes->add('/usuario/manejadorCarrito','usuario\ShoppingCarController::manejadorCarrito');


//Guardar Tarjeta (Usuario)
$routes->add('/guardarTarjeta','usuario\ShoppingCarController::guardarTarjeta');
//Comprar videojuego (Usuario)
$routes->add('/comprar','usuario\ShoppingCarController::comprar');
//Comprar videojuego (Usuario) Sin tarjeta
$routes->add('/comprar2','usuario\ShoppingCarController::comprar2');
//Vaciar Carrito
$routes->add('/vaciarCarrito','usuario\ShoppingCarController::vaciarCarrito');

$routes->add('/comprarConTarjetaGuardada','usuario\ShoppingCarController::comprarConTarjetaGuardada');

//Membresias (Comprar membresia)
$routes->add('/comprarMembresia','generico\MembresiasController::comprarMembresia');




$routes->add('/ofertas','OfertasController::index');


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
