<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//routes for the DSS
$routes->match(['get', 'post'], '/predictions', 'DssControllers/PredictionsController::index');
$routes->match(['get', 'post'], '/current', 'DssControllers/CurrentController::index');
