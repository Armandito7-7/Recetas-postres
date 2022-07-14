
<?php

                $id = $datos[0]['id_usuario'];
                $nombre = $datos[0]['nombre_usuario'];
                $ap_p = $datos[0]['ap_paterno_usuario'];
                $ap_m = $datos[0]['ap_materno_usuario'];
                $sexo = $datos[0]['sexo_usuario'];
                $rol = $datos[0]['rol_usuario'];
                $email = $datos[0]['email_usuario'];
                $imagen = $datos[0]['ruta_imagen'];
                $telefono = $datos[0]['telefono'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portal | Perfil Usuario</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>/panel/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/panel/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
  </nav>
  <!-- /.navbar -->

  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>/" class="brand-link">
      <img src="<?php echo base_url();?>/panel/dist/img/logomin.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dulzura Intensa </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    
        <div class="image">
          <?php echo'
          <img src="data:image/jpg;base64,'.base64_encode(session('imagen')).'" class="img-circle elevation-2" alt="User Image"> ';?>
        </div>
        <div class="info">
          <a href="<?php echo base_url();?>/admin/perfil" class="d-block"><?php echo session('nombre'),' ',session('ap_p')?></a> 
        </div>
  
      </div>
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


        
        <li class="nav-item">
            <a href="<?php echo base_url();?>/admin/" class="nav-link ">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>

         <?php
        
        if(session('rol') == 1){
          
          echo '
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                USUARIOS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="'.base_url().'/admin/usuarios" class="nav-link active">
                  <i class="far fas fa-columns"></i>
                  <p>Ver usuarios</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="'.base_url().'/admin/añadirusu" class="nav-link">
                  <i class="far far fa-plus-square"></i>
                  <p>Añadir usuarios</p>
                </a>
              </li>
            
            </ul>
          </li>
          ';
        }
          ?>

          <li class="nav-header">RECETAS</li>

          <li class="nav-item">
            <a href="<?php echo base_url();?>/admin/recetas" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                 General
                <span class="right badge badge-danger">Ver</span>
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Categorias
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>/admin/categoria/1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Postres de frutas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>/admin/categoria/2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Postres a base de lácteos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>/admin/categoria/3" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Postres semifríos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>/admin/categoria/4" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Postres fríos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>/admin/categoria/5" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Postres calientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>/admin/categoria/6" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Postres fritos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>/admin/categoria/7" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Postres de huevo</p>
                </a>
              </li>
            </ul>
          </li>
         
        
          <li class="nav-item">
            <a href="<?php echo base_url();?>/admin/añadirrecetas" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Añadir
              </p>
            </a>
          </li>

          <li class="nav-header">
          <a href="<?php echo base_url('/salir');?>" class="nav-link">
          CERRAR SESION</a></li>

         
           
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
             <div class="col-12"></br>
              <?php echo'
          <img src="data:image/jpg;base64,'.base64_encode($imagen).'" height="300pt"  alt="Product Image">'?>
              </div>
              <!-- Puedo meter importar imagen -->
              <div class="mt-4">
              <a href="<?php echo base_url().'/admin/editarfoto/'.$id?>">
                <div class="btn btn-primary btn-lg btn-flat">
                  <i class="fas fa-image fa-lg mr-2"></i>
                  Editar Foto
                </div>
              </a>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?php echo $nombre,' ',$ap_p,' ',$ap_m?></h3>
              <p>   <i class="fas fa-lg fa-phone"></i> <?php echo '#. '.$telefono ?> </p>

              <h4> IDENTIFICADOR (unico) </h4>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_a4" autocomplete="off">
                  <?php echo $id ?>
                  <br>
                  <i class="fas fa-circle fa-2x text-red"></i>
                </label>
                
              </div>

              <h4 class="mt-3">ROL <small>(categoria) </small></h4>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
                  <span class="text-xl"><?php echo (($rol == 1) ?  'AD' :  'US') ?></span>
                  <br>
                  <?php echo (($rol == 1) ?  'Administrador' :  'Usuario') ?>
                </label>
              </div>

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                <?php echo $email ?>
                </h2>
                <h4 class="mt-0">
                  <small><?php echo (($sexo == 'H') ?  'Hombre' :  'Mujer') ?> </small>
                </h4>
              </div>

              <div class="mt-4">
              <a href="<?php echo base_url().'/admin/perfil/editar/'.$id?>">
                <div class="btn btn-primary btn-lg btn-flat">
                  <i class="fas fa-user fa-lg mr-2"></i>
                  Editar
                </div>
              </a>
              </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>/panel/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/panel/dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>
</body>
</html>
