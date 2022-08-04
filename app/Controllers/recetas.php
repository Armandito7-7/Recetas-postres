<?php

namespace App\Controllers;

use App\Models\crudmodel;

class recetas extends BaseController
{
    public function inicio()
    {
        $Crud = new crudmodel();
    
        $datos = $Crud->listarrecetas();
        $datosusu = $Crud->listarnombres();
        $datoscate = $Crud->listarcategorias();

        $mensaje = session('mensaje');
        $data = [
                    "datos" => $datos,
                    "datosusu" => $datosusu,
                    "datoscate" => $datoscate,
                    "mensaje" => $mensaje
        ]; 
        echo view('portal/menu');
        echo view('portal/recetas',$data);
    }

    public function descripcion($idreceta)
    {
        $data = ["id_receta" => $idreceta];
        $Crud = new crudmodel();
        //echo $idnombre;
        //print_r($data);
        $respuesta = $Crud->obtenernombrerecetas($data);
        $datosusu = $Crud->listarnombres();
        $datoscate = $Crud->listarcategorias();
        $datos = [
            "datos" => $respuesta,
            "datosusu" => $datosusu,
            "datoscate" => $datoscate,
        ];
        echo view('portal/menu');
        echo view('portal/descripcion',$datos);
    }

}

