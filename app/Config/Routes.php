<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

//routes for the DSS
$routes->match(['get', 'post'], '/predictions', 'DssControllers/PredictionsController::index');
$routes->match(['get', 'post'], '/current', 'DssControllers/CurrentController::index');
