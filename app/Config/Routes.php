<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('comercializacion', 'Home::comercializacion');
$routes->get('terminosYusos', 'Home::terminosYusos');
$routes->get('inf_contactos', 'Home::inf_contactos');
$routes->get('consultas', 'Home::consultas');
$routes->get('catalogo_produc', 'Home::catalogo_produc');
