<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/test', 'HomeController::test');
$routes->get('/add', 'HomeController::add');
$routes->post('/action_add', 'HomeController::action_add');
$routes->get('/action_edit/(:any)', 'HomeController::action_edit/$1');
$routes->post('/action_edit/(:any)', 'HomeController::action_edit/$1');

//routes for the DSS
$routes->match(['get', 'post'], '/predictions', 'DssControllers/PredictionsController::index');
$routes->match(['get', 'post'], '/current', 'DssControllers/CurrentController::index');
$routes->match(['get', 'post'], '/warehouse', 'DssControllers/WarehouseController::index');
$routes->match(['get', 'post'], '/reports', 'DssControllers/ReportsController::index');

//PUBLIC ACCESS ROUTES
$routes->group('', function($routes){
    $routes->get('/', 'HomeController::index');
    $routes->match(['get', 'post'],'/login', 'users\LoginController::index');
    $routes->match(['get', 'post'],'login/registration', 'users\loginController::registration');
    $routes->match(['get', 'post'],'login/forgotpassword', 'users\LoginController::forgotpassword');
    $routes->match(['get', 'post'], '/adminlogin', 'users\LoginController::loginadmin');
    $routes->match(['get', 'post'],'/emplogin', 'users\LoginController::loginemp');
    $routes->get('/blocked', 'users\UsersController::blocked');
    $routes->get('login/verify', 'users\LoginController::verify');
    // $routes->match(['get', 'post'],'login/resetpassword', 'users\LoginController::changepassword1');
    $routes->match(['get', 'post'],'login/resetpassword', 'users\LoginController::resetpassword');
    $routes->match(['get', 'post'],'login/changePassword', 'users\LoginController::changepassword1');
});

//LOGGED IN USER ROUTES
$routes->group('',['filter' => 'AuthCheck'], function($routes){
    //SUPER ADMIN ROUTES
    $routes->group('',['filter' => 'AdminCheck'], function($routes){
        $routes->get('/admin', 'users\AdminController::index');
        $routes->get('/admin/deptadmin', 'users\AdminController::deptadmin');
        $routes->match(['get', 'post'], '/admin/deptadmin/add', 'users\AdminController::adddeptadmin');
        $routes->get('/admin/deptadmin/view/(:any)', 'users\AdminController::viewdeptadmin/$1');
        $routes->match(['get', 'post'],'/admin/deptadmin/edit/(:any)', 'users\AdminController::editdeptadmin/$1');
        $routes->get('/admin/deptadmin/delete/(:any)', 'users\AdminController::deletedeptadmin/$1');
        $routes->get('/admin/userdata', 'users\AdminController::datamember');
        $routes->get('/admin/detailmember/(:any)', 'users\AdminController::detailmember/$1');
        $routes->match(['get', 'post'],'/admin/editmember/(:any)', 'users\AdminController::editmember/$1');
    });

    //DEPARTMENT EMPLOYEE ROUTES
    $routes->group('',['filter' => 'DeptEmpCheck'], function($routes){
        $routes->get('/dept/dashboard', 'users\DeptempController::deptdashboard');
        
    });

    //DEPARTMENT ADMIN ROUTES
    $routes->group('',['filter' => 'DeptAdminCheck'], function($routes){
        $routes->get('/dept/dashboard-admin', 'users\DeptempController::deptadmindashboard');
        $routes->get('/dept/employee', 'users\DeptempController::deptemp');
        $routes->match(['get', 'post'], '/dept/employee/add', 'users\DeptempController::adddeptemp');
        $routes->get('/dept/employee/view/(:num)', 'users\DeptempController::viewdeptemp/$1');
        $routes->match(['get', 'post'],'/dept/employee/edit/(:num)', 'users\DeptempController::editdeptemp/$1');
        $routes->get('/dept/employee/delete/(:num)', 'users\DeptempController::deletedeptemp/$1');

    });

    //COMPLAINTANT ROUTES
    $routes->group('',['filter' => 'UserCheck'], function($routes){
        $routes->get('/dashboard', 'users\UsersController::dashboard');
    });

    //GENERAL ROUTES
    $routes->get('/myprofile', 'users\UsersController::myprofile');
    $routes->match(['get', 'post'],'/myprofile/edit', 'users\UsersController::editmyprofile');
    $routes->match(['get', 'post'],'/myprofile/changepassword', 'users\UsersController::changepassword');
    $routes->get('/emp/logout', 'users\LoginController::logout');
    $routes->match(['get', 'post'],'/home', 'users\UsersController::home');


});