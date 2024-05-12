<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::inicio');
$routes->get('/noso', 'Home::nosotros');
$routes->get('/prod', 'Home::productos');
$routes->get('/conta', 'Home::contacto');
$routes->get('/log', 'Home::login');
$routes->get('/test', 'Home::conect');
$routes->post('/insertar', 'Home::insertreg');
 