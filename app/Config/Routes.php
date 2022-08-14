<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//configuracion de la base de datos
$routes->get('/setupbd', 'setup::index'); 
$routes->get('/setupbd/clearbd', 'setup::limpiarBD');
$routes->get('/setupbd/clearbdtb', 'setup::limpiarBDtablas'); 
$routes->get('/setupbd/createbdtb', 'setup::creartablasBD');   

//EMPIEZAN LAS RUTAS PARA EL PORTAL 
$routes->get('/', 'Home::index');

$routes->get('/about', 'Home::about');
$routes->get('/login', 'Home::login');
$routes->post('/verificar', 'Home::verificar'); //consulta para inicio de sesion
$routes->post('/primerusuario', 'Home::registrarprimer'); //consulta para primer registro usuario
$routes->get('/recetas', 'recetas::inicio');
$routes->get('/salir', 'Home::salirsesion');
$routes->get('/recetas/descripcion/(:any)', 'recetas::descripcion/$1');
$routes->get('/categorias/(:any)', 'categorias::inicio/$1');


//EMPIEZAN LAS RUTAS PARA EL PANEL 

$routes->get('/admin', 'panel::index');

    //(Perfil)
$routes->get('/admin/perfil', 'panel::perfil');
$routes->get('/admin/perfil/editar/(:any)', 'panel::perfileditar/$1');
    //(USUARIOS)

$routes->get('/admin/usuarios/elimanarusu/(:any)', 'panel::eliminarusu/$1');
$routes->get('/admin/usuarios', 'panel::usuarios');
$routes->get('/admin/usuarios/perfil/(:any)', 'panel::perfilusu/$1');
$routes->get('/admin/añadirusu', 'panel::nuevousuario');
$routes->get('/admin/editarfoto/(:any)', 'panel::editarfoto/$1');
$routes->post('/admin/nuevousu', 'panel::crearusu');
$routes->post('/admin/perfil/editar/actualizar/(:any)', 'panel::actualizarusu/$1');
$routes->post('/admin/perfil/editar/actualizarfoto/(:any)', 'panel::actualizarfotousu/$1');

    //(RECETAS)
$routes->get('/admin/recetas', 'panel::recetas');
$routes->get('/admin/añadirrecetas', 'panel::recetasnuevo');
$routes->get('/admin/recetas/ver/(:any)', 'panel::verreceta/$1');
$routes->get('/admin/recetas/eliminar/(:any)', 'panel::eliminarrece/$1');
$routes->get('/admin/recetas/editarfoto/(:any)', 'panel::editarfotoreceta/$1');
$routes->post('/admin/recetas/actualizarfoto/(:any)', 'panel::actualizarfotorece/$1');
$routes->post('/admin/nuevarece', 'panel::crearrece');

$routes->get('/admin/receta/editar/(:any)', 'panel::recetaseditar/$1');
$routes->post('/admin/actualizarrece/(:any)', 'panel::actualizarrecet/$1');

$routes->get('/admin/categoria/(:any)', 'panel::vercategorias/$1');

















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
