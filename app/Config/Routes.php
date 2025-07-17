<?php

/**
 * @var RouteCollection $routes
 */


$routes->get('login', 'Auth\AuthController::loginForm');
$routes->post('iniciar-sesion', 'Auth\AuthController::login');
$routes->get('logout', 'Auth\AuthController::logout');

$routes->get('registro', 'Auth\RegisterController::registerView');
$routes->post('registrar', 'Auth\RegisterController::registerForm');

$routes->get('/empleado', 'employee\EmployeeController::workerForm');