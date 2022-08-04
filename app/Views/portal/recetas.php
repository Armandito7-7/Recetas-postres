<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="<?php echo base_url();?>/portal/assets/apple-icon-180x180.png" rel="apple-touch-icon">
  <link href="<?php echo base_url();?>/portal/assets/favicon.ico" rel="icon">



  <title>Recetas</title>  

<link href="<?php echo base_url();?>/portal/main.82cfd66e.css" rel="stylesheet"></head>

<body>

 
<main class="" id="main-collapse">


<div class="row">
  <div class="col-xs-12 section-container-spacer">
    <h1>Recetas</h1>
    <p>Las mejores recetas de reposteria 
      </p>
  </div>

  <?php foreach ($datos as $key):?>
  <div class="col-xs-12 col-md-4 section-container-spacer">
    <center><img class="img-responsive" alt="No tiene imagen" <?php echo 'src="data:image/jpg;base64,'.base64_encode($key->ruta_imagen).'"'?> style="height: 200px;" ></center>
    <h3><?php echo $key->nombre_receta?></h3>
    <p>Autor: </b> <?php  foreach ($datosusu as $k): if ($k->id_usuario==$key->id_usuario) {echo $k->nombre_usuario.' '.$k->ap_paterno_usuario;} endforeach?>
    </br> Categoria: <?php  foreach ($datoscate as $k): if ($k->id_categoria==$key->id_categoria) {echo $k->nombre_categoria;} endforeach?>
    </br> <?php echo $key->tiempo ?> Minutos</p>
    <a href="<?php echo base_url().'/recetas/descripcion/'.$key->id_receta?>" class="btn btn-primary" title=""> Ver receta</a>
  </div>
  <?php endforeach?>


</div>


</main>

<script>
document.addEventListener("DOMContentLoaded", function (event) {
  navbarToggleSidebar();
  navActivePage();
});
</script>

<script type="text/javascript" src="<?php echo base_url();?>/portal/main.85741bff.js"></script></body>

</html>