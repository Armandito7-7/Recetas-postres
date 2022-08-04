<?php
                $id_receta = $datos[0]['id_receta'];
                $nombre = $datos[0]['nombre_receta'];
                $id_categoria = $datos[0]['id_categoria'];
                $id_usuario = $datos[0]['id_usuario'];
                $ingredientes = $datos[0]['ingredientes'];
                $preparacion = $datos[0]['preparacion'];
                $tiempo = $datos[0]['tiempo'];
                $imagen = $datos[0]['ruta_imagen'];

?>

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



  <title>Receta</title>  

<link href="<?php echo base_url();?>/portal/main.82cfd66e.css" rel="stylesheet"></head>

<body>


<main class="" id="main-collapse">


<div class="row">
  <div class="col-xs-12 col-md-8">

    <div class="section-container-spacer">
        <h1><?php echo $nombre ?></h1>
        <p><b>Autor:</b> <?php foreach ($datosusu as $k): if ($k->id_usuario==$id_usuario) {echo $k->nombre_usuario.' '.$k->ap_paterno_usuario;} endforeach?> </p>
        <p><b>Tiempo: </b> <?php echo ' '.$tiempo ?> minutos</p> 
        
    </div>

    <div class="section-container-spacer">
      <p><img class="img-responsive" alt="" src="<?php echo 'data:image/jpg;base64,'.base64_encode($imagen)?>"></p>
    </div>
    <h3>Categoria:</h3>
    <a href="<?php echo base_url().'/categorias/'.$id_categoria?>" class="btn btn-primary btn-lg"  style="margin: 4.60px;"><?php  foreach ($datoscate as $k): if ($k->id_categoria==$id_categoria) {echo $k->nombre_categoria;} endforeach?></a>
    <h3>Ingredientes:</h3>
    <p><?php echo $ingredientes ?> </p>
    <h3>Preparación:</h3>
    <p><?php echo $preparacion ?> </p>
  </div>
  
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