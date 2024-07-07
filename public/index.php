<?php

require_once __DIR__ . '/../includes/app.php';

use Controllers\CosechasController;
use MVC\Router;
use Controllers\LoginController;

$router = new Router();

// Iniciar Sesión
$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Recuperar password
$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);
$router->get('/recuperar', [LoginController::class, 'recuperar']);
$router->post('/recuperar', [LoginController::class, 'recuperar']);

// Crear cuenta
$router->get('/crear-cuenta', [LoginController::class, 'crear']);
$router->post('/crear-cuenta', [LoginController::class, 'crear']);

//* Confirma tu cuenta
$router->get('/confirmar-cuenta', [LoginController::class, 'confirmar']);
$router->get('/mensaje', [LoginController::class, 'mensaje']);

//! Crud de la aplicación con consultar las registros con api
$router->get('/cosechas', [CosechasController::class, 'index']);
$router->get('/cosechas/agregar', [CosechasController::class, 'agregar']);
$router->post('/cosechas/agregar', [CosechasController::class, 'agregar']);
$router->get('/cosechas/consultar', [CosechasController::class, 'consultar']);
$router->get('/cosechas/actualizar', [CosechasController::class, 'actualizar']);
$router->post('/cosechas/actualizar', [CosechasController::class, 'actualizar']);
$router->post('/cosechas/eliminar', [CosechasController::class, 'eliminar']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();