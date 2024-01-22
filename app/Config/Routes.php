<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
 
 $routes->setDefaultNamespace('App\Controllers');
 $routes->setDefaultController('Home');
 $routes->setDefaultMethod('index');
 $routes->setTranslateURIDashes(false);
 $routes->set404Override();
 

//$routes->get('/', 'Home::index');

//$routes->get('pelicula', 'Pelicula::index');
$routes->presenter('pelicula');
$routes->presenter('categoria');






//$routes->get('/index', 'Home::index'); //listado
//$routes->get('/new', 'Home::new'); //Pintar el formulario
//$routes->post('/create', 'Home::create'); //Procesar el formulario
//$routes->get('edit/(:num)', 'Home::edit/$1'); //Pintar el formulario
//$routes->put('update/(:num)', 'Home::update/$1'); //Procesar el formulario edicion
//$routes->delete('delete/(:num)', 'Home::delete/$1'); //Elimina
// $routes->get('/codeigniter4', 'Home::index');
// $routes->get('/codeigniter', 'Home::code');

