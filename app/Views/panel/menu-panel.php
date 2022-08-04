<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="panel/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="panel/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="panel/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="panel/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="panel/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="panel/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="panel/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="panel/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:  #B24543">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>/" class="brand-link">
      <img src="panel/dist/img/logomin.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
            <a href="<?php echo base_url();?>/admin/" class="nav-link active">
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
            <a href="<?php echo base_url().'/admin/recetas';?>" class="nav-link">
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


  
<!-- jQuery -->
<script src="panel/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="panel/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="panel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="panel/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="panel/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="panel/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="panel/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="panel/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="panel/plugins/moment/moment.min.js"></script>
<script src="panel/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="panel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="panel/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="panel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="panel/dist/js/adminlte.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="panel/dist/js/pages/dashboard.js"></script>
</body>
</html>