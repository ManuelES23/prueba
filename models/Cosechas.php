<?php

namespace Model;

use Model\ActiveRecord;

class Cosechas extends ActiveRecord
{
    //* Base de datos
    protected static $tabla = 'cosechas';
    //* Columnas en la base de datos
    protected static $columnasDB = ['id', 'chofer', 'placas', 'fecha', 'lote', 'kilos', 'productor', 'ubicacion'];

    public $id;
    public $chofer;
    public $placas;
    public $fecha;
    public $lote;
    public $kilos;
    public $productor;
    public $ubicacion;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->chofer = $args['chofer'] ?? '';
        $this->placas = $args['placas'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->lote = $args['lote'] ?? '';
        $this->kilos = $args['kilos'] ?? '';
        $this->productor = $args['productor'] ?? '';
        $this->ubicacion = $args['ubicacion'] ?? '';
    }

    public function validar()
    {
        if (!$this->chofer) {
            self::$alertas['error'][] = 'El Nombre del Chofer es obligatorio';
        }
        if (!$this->placas) {
            self::$alertas['error'][] = 'Las Placas de Camion son obligatorias';
        }
        if (!$this->lote) {
            self::$alertas['error'][] = 'El Lote es obligatorio';
        }
        if (!$this->kilos) {
            self::$alertas['error'][] = 'Los Cantidad de Kilos es obligatoria';
        }
        if (!$this->productor) {
            self::$alertas['error'][] = 'El Productor es obligatorio';
        }
        if (!$this->ubicacion) {
            self::$alertas['error'][] = 'La Ubicación es obligatoria';
        }
        if (!is_numeric($this->kilos)) {
            self::$alertas['error'][] = 'No es un formato válido de kilos';
        }

        return self::$alertas;
    }
}
