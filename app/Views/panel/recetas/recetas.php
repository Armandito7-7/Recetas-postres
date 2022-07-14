<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Contacts</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>/panel/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>/panel/dist/css/adminlte.min.css">
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
      <img src="<?php echo base_url()?>/panel/dist/img/logomin.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                <a href="'.base_url().'/admin/usuarios" class="nav-link ">
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
            <a href="<?php echo base_url();?>/admin/recetas" class="nav-link active">
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
            <h1>Recetas</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
             <!-- SE INICIA UN CARD-->
             <?php foreach ($datos as $key):?>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column" >
              <div class="card bg-light d-flex flex-fill" >
                <div class="card-header text-muted border-bottom-0"  <?php
                    if(session('id') == $key->id_usuario){ echo 'style="background-color: #d0e0e3"';}?>>
                    ID   <?php echo $key->id_receta?>
                </div>
                <div class="card-body pt-0" >
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><?php echo $key->nombre_receta?></b></h2>
                      <p class="text-muted text-sm"><b>Autor: </b> <?php  foreach ($datosusu as $k): if ($k->id_usuario==$key->id_usuario) {echo $k->nombre_usuario.' '.$k->ap_paterno_usuario;} endforeach?> </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-chart-pie"></i></span> Categoria: <?php  foreach ($datoscate as $k): if ($k->id_categoria==$key->id_categoria) {echo $k->nombre_categoria;} endforeach?></li></br>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> <?php echo $key->tiempo ?> Minutos</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                    <?php echo'
                      <img src="data:image/jpg;base64,'.base64_encode($key->ruta_imagen).'" alt="user-avatar" class="img-circle img-fluid">';?>
  
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                  <?php
                    if(session('id') == $key->id_usuario){
          
                    echo ' 
                    <a href="'.base_url().'/admin/recetas/eliminar/'.$key->id_receta.'" class="btn btn-sm bg-red">
                      <i class="fas fa-trash"></i>
                    </a>
                    ';}?>
                    <a href="<?php echo base_url().'/admin/recetas/ver/'.$key->id_receta;?>" class="btn btn-sm btn-primary">
                      <i class="fas fa-book"></i> Ver receta
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach?>
            
      </div>
      <!-- /.card -->

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
<script src="<?php echo base_url()?>/panel/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>/panel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>/panel/dist/js/adminlte.min.js"></script>

</body>
</html>
