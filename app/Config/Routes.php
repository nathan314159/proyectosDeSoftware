

<?php

/**
 * Autenticación
 */
$routes->group('auth', function ($routes) {
    $routes->get('login', 'Auth\AuthController::loginForm');
    $routes->post('login', 'Auth\AuthController::login'); // usar mismo endpoint por claridad REST
    $routes->get('logout', 'Auth\AuthController::logout');

    $routes->get('registro', 'Auth\RegisterController::registerView');
    $routes->post('registrar', 'Auth\RegisterController::registerForm');
});

$routes->group('admin', function ($routes) {
    $routes->get('/', 'admin\AdminController::viewRolls');
    $routes->get('assignRolls', 'admin\AdminController::assignRolls');
    $routes->post('assignRolls', 'admin\AdminController::assignRolls');
    $routes->get('assignRolls', 'admin\AdminController::showUserRol');
    $routes->post('deleteUserRol/(:num)', 'admin\AdminController::deleteUserRol/$1');
});

$routes->group('empleado', function ($routes) {
    $routes->get('/', 'Employee\EmployeeController::workerForm');
});
