<?php

namespace Controllers;

use Model\Cosechas;
use MVC\Router;

class CosechasController
{
    public static function index(Router $router)
    {
        isAuth();


        $fecha = date('Y-m-d');

        $fechas = explode('-', $fecha);

        if (!checkdate($fechas[1], $fechas[2], $fechas[0])) {
            header('Location: /404');
        };


        $router->render('cosechas/index', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id'],
            'fecha' => $fecha
        ]);
    }
    public static function agregar(Router $router)
    {
        isAuth();

        $fecha = date('Y-m-d');
        $cosecha = new Cosechas;
        $alertas = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $cosecha->sincronizar($_POST);
            $alertas = $cosecha->validar();

            if (empty($alertas)) {
                $cosecha->guardar();
                header('Location: /cosechas?res=1');
            }
        }



        $router->render('cosechas/agregar', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id'],
            'fecha' => $fecha,
            'cosecha' => $cosecha,
            'alertas' => $alertas,
        ]);
    }

    public static function consultar()
    {
        $cosechas = Cosechas::all();

        echo json_encode($cosechas);
    }
    public static function actualizar(Router $router)
    {
        isAuth();


        if (!is_numeric($_GET['id'])) return;
        $cosecha = Cosechas::find($_GET['id']);
        $alertas = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cosecha->sincronizar($_POST);
            $alertas = $cosecha->validar();

            if (empty($alertas)) {
                $cosecha->guardar();
                header('Location: /cosechas');
            }
        }

        $router->render('cosechas/actualizar', [
            'nombre' => $_SESSION['nombre'],
            'cosecha' => $cosecha,
            'alertas' => $alertas,
        ]);
    }

    public static function eliminar()
    {
        isAdmin();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $servicio = Cosechas::find($id);
            $servicio->eliminar();

            header('Location: /cosechas');
        }
    }
}