<?php

namespace App\Controllers;

use App\Models\crudmodel;

class categorias extends BaseController
{
    public function inicio($idcate)
    {
        $Crud = new crudmodel();   
        $datoscate = $Crud->listarcategorias();
        $datosusu = $Crud->listarnombres();

        $nombre = ["id_categoria" => $idcate];
        $respuesta = $Crud->obtenerrecetaporcate($nombre);

        $data = [
            "id_cate" => $idcate,
            "datos" => $respuesta,
            "datosusu" => $datosusu,
            "datoscate" => $datoscate,
        ]; 
        echo view('portal/menu');
        echo view('portal/categoria',$data);
    }

    public function descripcion()
    {
        echo view('portal/menu');
        echo view('portal/descripcion');
    }
}

