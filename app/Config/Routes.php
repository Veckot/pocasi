<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pocasi::index');
$routes->get('stranka2/(:num)', 'Pocasi::stranka2/$1');
$routes->get('stanice/zeme/(:num)', 'Pocasi::stanice/$1');