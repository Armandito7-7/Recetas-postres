<?php

namespace App\Controllers;

    use App\Models\crudmodel;
    use App\Models\contador;

class panel extends BaseController
{
    public function index()
    {
        
        $Contador = new contador();
        $respuestausu = $Contador->contarusuarios();
        $respuestaconta = $Contador->contarrecetas();

        $data = [
            "usuarios" => $respuestausu,
            "recetas" => $respuestaconta,
        ];

        echo view('panel/menu-panel');
        echo view('panel/index',$data);
       
    }

    
    public function crearusu() //funcion para crear el usuario 
    {
        //print_r($_POST);
        print_r($_FILES);
        //$imageData = base64_encode(file_get_contents($_FILES['archivo_usu']['tmp_name']));
        $imagen = file_get_contents($_FILES['archivo_usu']['tmp_name']);

       // echo '<img src="data:image/jpg;base64,'.base64_encode($imagen).'" width="90pt" >';
       // echo $imagen;
        $data = [
            "id_usuario" => '',
            "nombre_usuario" => $_POST['nombre_usu'],
            "ap_paterno_usuario" => $_POST['ap_pa'],
            "ap_materno_usuario" => $_POST['ap_ma'],
            "sexo_usuario" => $_POST['sexo_usu'],
            "rol_usuario" => $_POST['rol_usu'],
            "email_usuario" => $_POST['email_usu'],
            "password_usuario" => $_POST['pass_usu'],
            "ruta_imagen" =>  $imagen,
            "telefono" => $_POST['telefono_usu']
    ];

    $Crud = new crudmodel();
    $respuesta = $Crud->insertardatosusu($data);

    if ($respuesta > 0) {
        return redirect()->to(base_url().'/admin/usuarios')->with('mensaje','1');
    }else{
        echo '<script>alert("No se pudo insertar Tu usuario");</script>';
        return redirect()->to(base_url().'/admin/añadirusu')->with('mensaje','0');
    }

    }

    public function actualizarusu($idnombre) //funcion para actualizar el usuario 
    {   
        $Crud = new crudmodel();

        $datos = [
                 "nombre_usuario" => $_POST['nombre_usu'],
                 "ap_paterno_usuario" => $_POST['ap_pa'],
                 "ap_materno_usuario" => $_POST['ap_ma'],
                 "sexo_usuario" => $_POST['sexo_usu'],
                    "rol_usuario" => $_POST['rol_usu'],
                     "email_usuario" => $_POST['email_usu'],
                    "password_usuario" => $_POST['pass_usu'],
                    "telefono" => $_POST['telefono_usu']
                ];
        $ID = $idnombre;

        $respuesta = $Crud->actulizarusu($datos, $ID);
        if ($respuesta) {
            return redirect()->to(base_url().'/admin/usuarios')->with('mensaje','1');
        }else{
            echo '<script>alert("No se pudo editar");</script>';
            return redirect()->to(base_url().'/admin/usuarios')->with('mensaje','0');
        }
    }

    public function actualizarfotousu($idnombre) //funcion para actualizar la imagen del usuario 
    {   
        $Crud = new crudmodel();
        $imagen = file_get_contents($_FILES['archivo_usu']['tmp_name']);
        //echo '<img src="data:image/jpg;base64,'.base64_encode($imagen).'" width="90pt" >';
        $datos = [
                    "ruta_imagen" =>  $imagen
                ];
        $ID = $idnombre;
        $respuesta = $Crud->actulizarusu($datos, $ID);
        if ($respuesta) {
            return redirect()->to(base_url().'/admin/usuarios')->with('mensaje','1');
        }else{
            echo '<script>alert("No se pudo editar la foto");</script>';
            return redirect()->to(base_url().'/admin/usuarios')->with('mensaje','0');
        }
      

    }

    public function eliminarusu($idnombre)  //funcion para eliminar al usuario 
    {
        $Crud = new crudmodel();
        $data = ["id_usuario" => $idnombre];
        $respuesta = $Crud->eliminarusu($data);

        if ($respuesta > 0) {
            return redirect()->to(base_url().'/admin/usuarios')->with('mensaje','1');
        }else{
            echo '<script>alert("No se pudo eliminar tu usuario");</script>';
            return redirect()->to(base_url().'/admin/usuarios')->with('mensaje','0');
        }
    }
    
    public function usuarios() //vista de todos los usuarios 
    {
        $Crud = new crudmodel();
        $datos = $Crud->listarnombres();
        
        $mensaje = session('mensaje');
        $data = [
                    "datos" => $datos,
                    "mensaje" => $mensaje
        ];
        return view('panel/usuarios/usuarios1',$data);
    }

    public function perfileditar($idnombre) //vista de editar perfil del usuario 
    {
        $data = ["id_usuario" => $idnombre];
        $Crud = new crudmodel();
        //echo $idnombre;
        //print_r($data);
        $respuesta = $Crud->obtenernombreusu($data);
        $datos = [
            "datos" => $respuesta
        ];
        return view('panel/usuarios/editar',$datos);
    }

    public function perfil() // vista del perfil 
    {
        return view('panel/usuarios/perfil');
       
    }

    public function editarfoto($idnombre) //editar foto de usuario 
    {
        $data = ["id_usuario" => $idnombre];
        $Crud = new crudmodel();
        //echo $idnombre;
        //print_r($data);
        $respuesta = $Crud->obtenernombreusu($data);
        $datos = [
            "datos" => $respuesta
        ];
        return view('panel/usuarios/editarfoto',$datos);
    }

    public function nuevousuario() // vista de nuevo usuario 
    {
        $mensaje = session('mensaje');
        $data = [
                    "mensaje" => $mensaje
        ];
        return view('panel/usuarios/nuevo',$data);
    }

    public function perfilusu($idnombre) //perfil de usuario 
    {
        $data = ["id_usuario" => $idnombre];
        $Crud = new crudmodel();
        //echo $idnombre;
        //print_r($data);
        $respuesta = $Crud->obtenernombreusu($data);
        $datos = [
            "datos" => $respuesta
        ];
        return view('panel/usuarios/perfilusu',$datos);
       
    }

// AQUI EMPIEZA LAS RECETAS 
    public function recetas() //ver todas las recetas
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
        return view('panel/recetas/recetas',$data);
    }

    public function verreceta($idreceta)  //ver la receta por separado
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

        return view('panel/recetas/perfil',$datos);
    }

    public function editarfotoreceta($idreceta) //editar foto de receta
    {
        $data = ["id_receta" => $idreceta];
        $Crud = new crudmodel();
        //echo $idnombre;
        //print_r($data);
        $respuesta = $Crud->obtenernombrerecetas($data);

        $datos = [
            "datos" => $respuesta,
        ];
        return view('panel/recetas/editarfoto',$datos);
    }

    public function actualizarfotorece($idreceta) //funcion para actualizar la imagen de la receta
    {   
        $Crud = new crudmodel();
        $imagen = file_get_contents($_FILES['archivo_rece']['tmp_name']);
        //echo '<img src="data:image/jpg;base64,'.base64_encode($imagen).'" width="90pt" >';
        $datos = [
                    "ruta_imagen" =>  $imagen
                ];
        $ID = $idreceta;
        $respuesta = $Crud->actulizarrece($datos, $ID);
        if ($respuesta) {
            return redirect()->to(base_url().'/admin/recetas')->with('mensaje','1');
        }else{
            echo '<script>alert("No se pudo editar la foto");</script>';
            return redirect()->to(base_url().'/admin/recetas')->with('mensaje','0');
        }
    }

    public function recetasnuevo() //vista para crear nueva receta 
    {
        $Crud = new crudmodel();
        $respuesta = $Crud->listarcategorias();

        $data = [
            "datos" => $respuesta,
        ];

        return view('panel/recetas/nuevo',$data);
    }

    public function  crearrece() //funcion para crear la receta
    {
        //print_r($_POST);
        print_r($_FILES);
        //$imageData = base64_encode(file_get_contents($_FILES['archivo_usu']['tmp_name']));
        $imagen = file_get_contents($_FILES['archivo_rece']['tmp_name']);
        $id_usuario = session('id');
       // echo '<img src="data:image/jpg;base64,'.base64_encode($imagen).'" width="90pt" >';
       // echo $imagen;
        $data = [
            "id_receta" => '',
            "nombre_receta" => $_POST['nombre_rece'],
            "id_categoria" => $_POST['categoria'],
            "id_usuario" => $id_usuario,
            "ruta_imagen" =>  $imagen,
            "ingredientes" => $_POST['ingredientes'],
            "preparacion" => $_POST['preparacion'],
            "tiempo" => $_POST['tiempo'],
    ];

    $Crud = new crudmodel();
    $respuesta = $Crud->insertardatosrecetas($data);

    if ($respuesta > 0) {
        return redirect()->to(base_url().'/admin/recetas')->with('mensaje','1');
    }else{
        echo '<script>alert("No se pudo insertar Tu usuario");</script>';
        return redirect()->to(base_url().'/admin/recetas')->with('mensaje','0');
    }

    }

    public function eliminarrece($idreceta)  //funcion para eliminar la receta
    {
        $Crud = new crudmodel();
        $data = ["id_receta" => $idreceta];
        
        $respuesta = $Crud->eliminarreceta($data);

        if ($respuesta > 0) {
            return redirect()->to(base_url().'/admin/recetas')->with('mensaje','1');
        }else{
            echo '<script>alert("No se pudo eliminar tu recetas");</script>';
            return redirect()->to(base_url().'/admin/recetas')->with('mensaje','0');
        }
    }
  
    public function recetaseditar($id_receta)
    {
        $Crud = new crudmodel();
        $respuesta = $Crud->listarcategorias();
        $data = ["id_receta" => $id_receta];
        //echo $idnombre;
        //print_r($data);
        $datarece = $Crud->obtenernombrerecetas($data);
        $data = [
            "datos" => $datarece,
            "datosusu" => $respuesta,
        ];
        return view('panel/recetas/editar',$data);
    }

    public function actualizarrecet($idreceta) //funcion para actualizar el usuario 
    {   
        $Crud = new crudmodel();

        $datos = [
            "nombre_receta" => $_POST['nombre_rece'],
            "id_categoria" => $_POST['categoria'],
            "ingredientes" => $_POST['ingredientes'],
            "preparacion" => $_POST['preparacion'],
            "tiempo" => $_POST['tiempo'],
            ];
        $ID = $idreceta;

        $respuesta = $Crud->actulizarrece($datos, $ID);
        if ($respuesta) {
            return redirect()->to(base_url().'/admin/recetas')->with('mensaje','1');
        }else{
            echo '<script>alert("No se pudo editar");</script>';
            return redirect()->to(base_url().'/admin/recetas')->with('mensaje','0');
        }
    }


    public function vercategorias($idcate) //ver categorias
    {
        $Crud = new crudmodel();
        $datosusu = $Crud->listarnombres();
        $datoscate = $Crud->listarcategorias();
        $data = ["id_categoria" => $idcate];
        $respuesta = $Crud->obtenerrecetaporcate($data);
        $mensaje = session('mensaje');
        $data = [
                    "datos" => $respuesta,
                    "datosusu" => $datosusu,
                    "datoscate" => $datoscate,
                    "mensaje" => $mensaje
        ]; 
        return view('panel/recetas/recetas',$data);
    }
    

}

