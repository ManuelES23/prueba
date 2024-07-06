<?php

namespace Controllers;

use MVC\Router;

class CosechasController
{
    public static function index(Router $router)
    {
        isAuth();

        $router->render('cosechas/index', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id'],
        ]);
    }
    public static function agregar(Router $router)
    {
        isAuth();

        $router->render('cosechas/agregar', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id'],
        ]);
    }
}
