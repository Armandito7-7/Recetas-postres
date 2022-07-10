<?php

namespace App\Controllers;

class categorias extends BaseController
{
    public function inicio()
    {
        echo view('portal/menu');
        echo view('portal/categoria');
    }

    public function descripcion()
    {
        echo view('portal/menu');
        echo view('portal/descripcion');
    }
}

