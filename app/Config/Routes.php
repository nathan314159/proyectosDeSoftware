

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
    $routes->get('showUserRol', 'admin\AdminController::showUserRol'); 
    $routes->post('deleteUserRol/(:num)', 'admin\AdminController::deleteUserRol/$1');
    $routes->post('editUserRol/(:num)', 'admin\AdminController::edit/$1');
});

$routes->group('empleado', function ($routes) {
    $routes->get('/', 'Employee\EmployeeController::workerForm');
});

$routes->group('api', function ($routes) {
    $routes->get('restaurantes', 'proyectosSoftware\semana13\RestauranteController::index');
    $routes->post('restaurantes', 'proyectosSoftware\semana13\RestauranteController::create');
    $routes->put('restaurantes/(:num)', 'proyectosSoftware\semana13\RestauranteController::update/$1');
    $routes->delete('restaurantes/(:num)', 'proyectosSoftware\semana13\RestauranteController::delete/$1');
});
