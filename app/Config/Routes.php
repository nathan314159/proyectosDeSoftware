

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

    // usuario y roles
    $routes->get('/', 'admin\AdminController::viewRolls');
    $routes->get('assignRolls', 'admin\AdminController::assignRolls');
    $routes->post('assignRolls', 'admin\AdminController::assignRolls');
    $routes->get('showUserRol', 'admin\AdminController::showUserRol');
    $routes->get('deleteUserRol', 'admin\AdminController::deleteUserRol');
    $routes->post('updateUserRol', 'admin\AdminController::updateUserRol');
    // $routes->get('editUserRol/(:num)', 'admin\AdminController::edit/$1');
    // $routes->get('updateUserRol/(:num)', 'admin\AdminController::update/$1');
     
     // Roles
    $routes->post('addRol', 'admin\AdminController::addRol');
    $routes->post('deleteRol', 'admin\AdminController::deleteRol');
    $routes->post('updateRol', 'admin\AdminController::updateRol');
    
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
