

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

/**
 * Área de empleados (restringido a usuarios autenticados)
 */
$routes->group('empleado', function ($routes) {
    $routes->get('/', 'Employee\EmployeeController::workerForm');
});
