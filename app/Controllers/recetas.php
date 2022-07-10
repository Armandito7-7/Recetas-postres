<?php

namespace App\Controllers;

class recetas extends BaseController
{
    public function inicio()
    {
        echo view('portal/menu');
        echo view('portal/recetas');
    }

    public function descripcion()
    {
        echo view('portal/menu');
        echo view('portal/descripcion');
    }
}

