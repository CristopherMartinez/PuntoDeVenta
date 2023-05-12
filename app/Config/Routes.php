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

//Vista de nuevos Lanzamientos en usuario sin loguear
$routes->add('/lanzamientos','usuario\LanzamientosController::showLanzamientos');


$routes->add('/gamesXbox','generico\GamesXboxController::index');
$routes->add('inicio','invitado\Inicio::index');
$routes->add('/login','invitado\LoginController::index');
$routes->add('/guardar_sugerencia','generico\SugerenciasController::guardar_sugerencia');
$routes->add('/guardar_sugerencia2','generico\SugerenciasController::guardar_sugerencia2');

//Rutas de usuario Logueado
$routes->add('/usuario/inicio','invitado\Inicio::indexLog');
$routes->add('/usuario/gamesXbox','generico\GamesXboxController::indexGameXboxLog');
$routes->add('/usuario/ShoppingCar','usuario\ShoppingCarController::index'); 
$routes->add('/usuario/gamesPlayStation','generico\GamesplayStation::indexLog');
$routes->add('/usuario/gamesNintendo','generico\GamesNintendoController::indexLog');
$routes->add('/usuario/lanzamientos','usuario\LanzamientosController::showLanzamientos2');


$routes->add('/usuario/listaCarrito','usuario\ShoppingCarController::listaCarrito');
//Mostrar vista de deseos
$routes->add('/usuario/listaDeseos','usuario\DeseosController::listaDeseos');

// $routes->add('/invitado/lanzamientos','usuario\LanzamientosController::showLanzamientos');

$routes->add('/usuario/videogamesUser','usuario\VideogamesUserController::getvideogamesUser');
//Agregar Deseo
$routes->add('/agregarDeseo','usuario\DeseosController::agregarDeseo');
//Agregar Deseo desde pagina de juegos nintendo
$routes->add('/agregarDeseoNintendo','usuario\DeseosController::agregarDeseoNintendo');
//Agregar Deseo desde pagina de juegos xbox
$routes->add('/agregarDeseoXbox','usuario\DeseosController::agregarDeseoXbox');
//Agregar Deseo desde pagina de juegos PlayStation
$routes->add('/agregarDeseoPlayStation','usuario\DeseosController::agregarDeseoPlayStation');
//Eliminar Deseos
$routes->add('/eliminarDeseos','usuario\DeseosController::eliminarDeseos');
//Agregar al carrito
$routes->add('/agregarAlCarrito','usuario\ShoppingCarController::agregarAlCarrito');
//Agregar al carrito desde lista deseos
$routes->add('/agregarAlCarritoDesdeDeseos','usuario\ShoppingCarController::agregarAlCarritoDesdeDeseos');
//Eliminar individualmente del carrito de compras
$routes->add('/eliminarIndividualDelCarrito','usuario\ShoppingCarController::eliminarIndividualDelCarrito');
//Agregar al carrito desde page xbox
$routes->add('/agregarAlCarritoXbox','usuario\ShoppingCarController::agregarAlCarritoXbox');
//Agregar al carrito desde page PlayStation
$routes->add('/agregarAlCarritoPlayStation','usuario\ShoppingCarController::agregarAlCarritoPlayStation');
//Agregar al carrito desde page Nintendo
$routes->add('/agregarAlCarritoNintendo','usuario\ShoppingCarController::agregarAlCarritoNintendo');




//Rutas invitado
$routes->add('/SingUp','invitado\RegisterController::index');
$routes->add('/verificar_login','invitado\LoginController::verificar_login');
$routes->add('/guardar_persona','invitado\RegisterController::guardar_persona');
$routes->add('/gamesNintendo','generico\GamesNintendoController::index');
// $routes->add('/invitado/nosotros','invitado\Inicio::pageNosotrosinvitado');
//Ruta de mensaje chatbot
$routes->add('/usuario/message','usuario\ChatbotController::vistaMensaje');
$routes->add('/invitado/message','usuario\ChatbotController::vistaMensaje2');


//Rutas de administrador
$routes->add('/admin/inicio','admin\AdminController::index');
$routes->add('/admin/clientes','admin\AdminController::recuperarclientes');
$routes->add('/admin/registroVideojuegos','admin\AgregarJuegoController::index');
$routes->add('/admin/registroAdmin','admin\RegistroAdminController::index');
$routes->add('/admin/ventas','admin\VentasController::ventas');
$routes->add('/admin/login','admin\AdminController::mostrarVistaLogin');

//Guardado de Juegos y Admin
$routes->add('/guardar_admin','admin\RegistroAdminController::guardar_admin');
$routes->add('/guardar_juego','admin\AgregarJuegoController::guardar_juego');

//Administrador Videojuegos
$routes->get('/borrar/(:num)','admin\AgregarJuegoController::borrar/$1');
//Borrar Administrador
$routes->get('/borrarAdministrador/(:num)','admin\RegistroAdminController::borrarAdministrador/$1');
//Editar Juego
$routes->get('/editar/(:num)','admin\AgregarJuegoController::editar/$1');
//Editar Administrador
$routes->get('/editarAdministrador/(:num)','admin\RegistroAdminController::editarAdministrador/$1');
//Actualizar videojuego
$routes->post('/actualizar','admin\AgregarJuegoController::actualizar');
//Actualizar admin
$routes->post('/actualizarAdmin','admin\RegistroAdminController::actualizarAdmin');
//Cerrar ModalEditar
$routes->post('/cerrarModalEditar','admin\AgregarJuegoController::cerrarModalEditar');
//Cerrar ModalDetalle
$routes->post('/cerrarModalDetalle','admin\VentasController::cerrarModalDetalle');
//Cerrar ModalEditarADMIN
$routes->post('/cerrarModalEditarAdmin','admin\RegistroAdminController::cerrarModalEditarAdmin');
// Detalle venta
$routes->get('/detalleVenta/(:num)','admin\VentasController::detalleVenta/$1');

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

//Detalle de venta
$routes->add('/detalleVenta2','admin\VentasController::detalleVenta2');




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
