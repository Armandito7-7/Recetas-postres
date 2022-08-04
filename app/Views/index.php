<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="Page description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="./assets/apple-icon-180x180.png" rel="apple-touch-icon">
  <link href="./assets/favicon.ico" rel="icon">



  <title>Inicio</title>  

<link href="portal/main.82cfd66e.css" rel="stylesheet"></head>

<body>

<main class="" id="main-collapse">

<!-- Add your site or app content here -->
 

<div class="hero-full-wrapper">
  <div class="grid">
  <div class="gutter-sizer"></div>
    <div class="grid-sizer"></div>
    
    <?php foreach ($datos as $key):?>
    <div class="grid-item">
      <img class="img-responsive" alt="" <?php echo 'src="data:image/jpg;base64,'.base64_encode($key->ruta_imagen).'"'?>>
      <a href="<?php echo base_url().'/recetas/descripcion/'.$key->id_receta?>" class="project-description">
        <div class="project-text-holder">
          <div class="project-text-inner">
            <h3><?php echo $key->nombre_receta?></h3>
            <p><?php echo $key->tiempo ?> Minutos</p>
          </div>
        </div>
      </a>
    </div>
    <?php endforeach?>

  </div>
</div>


<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     masonryBuild();
  });
</script>

</main>

<script>
document.addEventListener("DOMContentLoaded", function (event) {
  navbarToggleSidebar();
  navActivePage();
});
</script>

<script type="text/javascript" src="portal/main.85741bff.js"></script></body>

</html>