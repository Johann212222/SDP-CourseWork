<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

//routes for the DSS
$routes->match(['get', 'post'], '/predictions', 'DssControllers/PredictionsController::index');
$routes->match(['get', 'post'], '/current', 'DssControllers/CurrentController::index');
$routes->match(['get', 'post'], '/warehouse', 'DssControllers/WarehouseController::index');
$routes->match(['get', 'post'], '/reports', 'DssControllers/ReportsController::index');

//
$routes->match(['get', 'post'], '/report', 'ReportForm::submitForm');
$routes->match(['get', 'post'], '/report-history', 'ReportHistory::index');