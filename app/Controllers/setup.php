<?php

namespace App\Controllers;

    use App\Models\setup_model;

class setup extends BaseController
{
    public function index()
    {
        return view('database');

    }

    public function limpiarBD()
    {
        $setupm = new setup_model();
        echo $setupm->limpiarBDRecetarioRegistros();
        echo '<script>alert("Se Limpio todos los registros de la base de datos");</script>';
        return view('database');
    }

    public function limpiarBDtablas()
    {
        $setupm = new setup_model();
        echo $setupm->limpiarBDRecetarioTablas();
        echo '<script>alert("Se Limpio todas las tablas de la base de datos");</script>';
        return view('database');
    }

    public function creartablasBD()
    {
        $setupm = new setup_model();
        echo $setupm-> crearDatabaseRecetario();
        echo '<script>alert("Se creó la base de datos");</script>';
        return view('database');
    }
    
}
