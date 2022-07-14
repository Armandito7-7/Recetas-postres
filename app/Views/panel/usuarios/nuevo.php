<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portal | Añadir</title>
  

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
                <a href="'.base_url().'/admin/usuarios" class="nav-link ">
                  <i class="far fas fa-columns"></i>
                  <p>Ver usuarios</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="'.base_url().'/admin/añadirusu" class="nav-link active">
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
            <h1>Añadir Usuario</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?= session()->getFlashdata('error') ?>
    <?= service('validation')->listErrors() ?>
    <!-- Main content -->
    <form action="<?php echo base_url('/admin/nuevousu')?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
        
                <label for="inputName">Nombre</label>
                <input type="text" name="nombre_usu" class="form-control" value="" placeholder="Jose Alfredo" required>
              </div>
              <div class="form-group">
                <label for="inputName">Apellido Paterno</label>
                <input type="text" name="ap_pa" class="form-control" value="" placeholder="Martinez" required>
              </div>
              <div class="form-group">
                <label for="inputName">Apellido Materno</label>
                <input type="text" name="ap_ma" class="form-control" value="" placeholder="Lopez" required>
              </div>
              <div class="form-group">
                <label for="inputStatus">Sexo</label>
                <select name="sexo_usu" class="form-control custom-select">
                  <option disabled>Selecciona</option>
                  <option value="H" >Hombre</option>
                  <option value="M" >Mujer</option>
                </select>
              </div>
              <div class="form-group">
              <label for="inputName">Rol de usuario</label>
                <br>
                <input type="radio" name="rol_usu" id="rol-administrador" value="1">
                <label for="rol-administrador"> Administrador</label>
                <br>
                <input type="radio" name="rol_usu" id="rol-usuario" value="2" checked>
                <label for="rol-usuario"> Usuario</label>
                </div>

              <div class="form-group">
                <label for="inputClientCompany">Telefono</label placeholder="" required>
                <input type="text" name="telefono_usu" class="form-control" value="">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Datos Sesion</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="inputClientCompany">E-mail</label>
                <input type="email" name="email_usu" class="form-control" value="" placeholder="josealfredoml@gmail.com" required>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Contraseña</label>
                <input type="password" id="pass" name="pass_usu" class="form-control" value="" placeholder="**********" onkeyup="check();" required>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Confirmar Contraseña</label>
                <input type="password" id="pass_confir" name="pass_usu_confir" class="form-control" value="" placeholder="**********" onkeyup="check();" required>
              </div>
              <div class="form-group row mb-4">
                <div class="col-sm-12 text-right">
                  <span id="mensaje_password"></span>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Imagen perfil</label>
                <input type="file" class="form-control " name="archivo_usu" value="" placeholder="" required>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="<?php echo base_url('/admin/usuarios')?>" class="btn btn-secondary">Cancelar</a>
          <input type="submit" id="btn-registrar" value="Registrar Nuevo Usuario" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    </form>
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
<script src="<?php echo base_url();?>/panel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/panel/dist/js/adminlte.min.js"></script>


<!--<script type="text/javascript">
  let mensaje = '<?php echo $mensaje?>'
    
    if (mensaje == 1) {
      alert("Agregado con exito");
    } else if (mensaje == 0){
      alert("no se agrego");
      
    }
</script>-->

<script>
        var check = function(){
            var campo_password = document.getElementById('pass');
            var campo_confirmar_password = document.getElementById('pass_confir');
            if(campo_password.value == campo_confirmar_password.value){
                document.getElementById('mensaje_password').innerHTML = 'Las contraseñas coinciden';
                document.getElementById('mensaje_password').style.color = 'green';
                document.getElementById('btn-registrar').disabled = false;
            }//end if contraseñas coinciden
            else{
                document.getElementById('mensaje_password').innerHTML = 'Las contraseñas no coinciden';
                document.getElementById('mensaje_password').style.color = 'red';
                document.getElementById('btn-registrar').disabled = true;
            }//end else contraseñas coinciden
        }//end function
    </script>
</body>
</html>
