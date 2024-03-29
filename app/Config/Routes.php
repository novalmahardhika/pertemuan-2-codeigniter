<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home');
$routes->get('biodata', 'Biodata');
$routes->get('/latihan1', 'Latihan::latihan1');
$routes->get('/latihan2/penjumlahan/(:any)', 'Latihan::latihan2/slug1/slug2');
$routes->get('/latihan3/penjumlahan/(:any)', 'Latihan::latihan3/slug1/slug2');



