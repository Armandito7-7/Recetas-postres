<?php

namespace App\Controllers;

use App\Models\verificarusuario;
use App\Models\crudmodel;

class Home extends BaseController
{
    public function index()
    {
        echo view('portal/menu');
        echo view('index');
       
    }

    public function login()
    {
        echo view('portal/menu');
        echo view('panel/login/login');
       
    }
    public function verificar()
    {
       $usuario = $this->request->getPost('usuario');
       $password = $this->request->getPost('password');
       
        $verificar = new verificarusuario();

    
       $datosUsuario= $verificar->obtenerUsurio(['email_usuario' => $usuario]);
        
      
       //print("<pre>".print_r($datosUsuario)."</pre>");

       if(count($datosUsuario) > 0 && $password == $datosUsuario[0]['password_usuario']){
        
        $data = [
                "id" => $datosUsuario[0]['id_usuario'],
                "nombre" => $datosUsuario[0]['nombre_usuario'],
                "ap_p" => $datosUsuario[0]['ap_paterno_usuario'],
                "ap_m" => $datosUsuario[0]['ap_materno_usuario'],
                "sexo" => $datosUsuario[0]['sexo_usuario'],
                "rol" => $datosUsuario[0]['rol_usuario'],
                "email" => $datosUsuario[0]['email_usuario'],
                "imagen" => $datosUsuario[0]['ruta_imagen'],
                "telefono" => $datosUsuario[0]['telefono']
        ];
        $session = session();
        $session->set($data);
        echo '<script> window.location="',base_url('/admin'),'"; </script>';

       } else {
        echo '<script>alert("Usuario y/o contraseña incorrectos");</script>';
        echo '<script> window.location="',base_url('/login'),'"; </script>';
       }
    }

    public function registrarprimer() //funcion para el primer usuario cuenta afuera del portal 
    {
        //print_r($_POST);
        //print_r($_FILES);
        //$imageData = base64_encode(file_get_contents($_FILES['archivo_usu']['tmp_name']));
        $path = base_url().'/panel/dist/img/ususario.jpg';
        $imagen = file_get_contents($path);
        $rol = 2;

       //echo '<img src="data:image/jpg;base64,'.base64_encode($imagen).'" width="90pt" >';
       // echo $imagen;
        $data = [
            "id_usuario" => '',
            "nombre_usuario" => $_POST['nombre_usu'],
            "ap_paterno_usuario" => $_POST['ap_pa'],
            "ap_materno_usuario" => $_POST['ap_ma'],
            "sexo_usuario" => $_POST['sexo_usu'],
            "rol_usuario" => $rol,
            "email_usuario" => $_POST['email_usu'],
            "password_usuario" => $_POST['pass_usu'],
            "ruta_imagen" =>  $imagen,
            "telefono" => $_POST['telefono_usu']
    ];
    //print_r($data);
    
    $Crud = new crudmodel();
    $respuesta = $Crud->insertardatosusu($data);

    if ($respuesta > 0) {
        $usuario = $_POST['email_usu'];
        $verificar = new verificarusuario();

        $datosUsuario= $verificar->obtenerUsurio(['email_usuario' => $usuario]);

        $data = [
            "id" => $datosUsuario[0]['id_usuario'],
            "nombre" => $datosUsuario[0]['nombre_usuario'],
            "ap_p" => $datosUsuario[0]['ap_paterno_usuario'],
            "ap_m" => $datosUsuario[0]['ap_materno_usuario'],
            "sexo" => $datosUsuario[0]['sexo_usuario'],
            "rol" => $datosUsuario[0]['rol_usuario'],
            "email" => $datosUsuario[0]['email_usuario'],
            "imagen" => $datosUsuario[0]['ruta_imagen'],
            "telefono" => $datosUsuario[0]['telefono']
        ];
        $session = session();
        $session->set($data);
        return redirect()->to(base_url().'/admin')->with('mensaje','1');
        }else{
        echo '<script>alert("No se pudo registrar! Intente nuevamente");</script>';
        return redirect()->to(base_url().'/login')->with('mensaje','0');
        }
    

    }


    public function salirsesion()
    {
        
        $session= session();
        $session->stop();
        $session->destroy;
        unset($_SESSION['id']);
        unset($_SESSION);
        return redirect()->to(base_url('/'));

    }

    public function about()
    {
        echo view('portal/menu');
        echo view('portal/about');
       
    }
}

