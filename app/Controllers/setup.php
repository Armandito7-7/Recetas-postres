<?php

namespace App\Controllers;

    use App\Models\setup_model;

class setup extends BaseController
{
    public function index()
    {
        $setupm = new setup_model();
        echo $setupm->limpiarBDRecetarioRegistros();

    }
}
