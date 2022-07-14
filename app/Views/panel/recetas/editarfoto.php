<?php

                $id = $datos[0]['id_receta'];
                $nombre = $datos[0]['nombre_receta'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dulzura Intensa | Editar Foto</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>/panel/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>/panel/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>/panel/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
    <?= session()->getFlashdata('error') ?>
    <?= service('validation')->listErrors() ?>
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Editar</b> Foto</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg"> Inserte la nueva foto que quiere cambiar de la receta <b><?php echo $nombre?></b> </p>
      <form action="<?php echo base_url().'/admin/recetas/actualizarfoto/'.$id?>" method="post" enctype="multipart/form-data">
      <?= csrf_field() ?>  
      <div class="input-group mb-3">
        <input type="file" class="form-control " name="archivo_rece" value="" placeholder="" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-image"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Cambiar Foto</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3 mb-1">
        <a href="<?php echo base_url('/admin/recetas')?>">Cancelar</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url()?>/panel/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>/panel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>/panel/dist/js/adminlte.min.js"></script>
</body>
</html>
