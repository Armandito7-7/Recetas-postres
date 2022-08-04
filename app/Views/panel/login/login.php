<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Inicio de sesion</title>
  <link rel="stylesheet" href="panel/dist/css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<div class="form-structor">
	<div class="signup">  
		<h2 class="form-title" id="signup"><span>Ó</span>Registrarse</h2>
		<form action="<?php echo base_url()?>/primerusuario" method="POST">
		<?= csrf_field() ?>
		<div class="form-holder">
			<input type="text" class="input" placeholder="Nombre"  name="nombre_usu"    required/>
			<input type="text" class="input" placeholder="Apellido Paterno" name="ap_pa"    required/>
			<input type="text" class="input" placeholder="Apellido Materno" name="ap_ma"   required/>
			<select name="sexo_usu" class="input"   required>
                  <option disabled>Selecciona</option>
                  <option value="H" class="input">Hombre</option>
                  <option value="M" class="input">Mujer</option>
            </select>
			<input type="text" class="input" placeholder="Telefono" name="telefono_usu"  required/>
			<input type="email" class="input" placeholder="Email"  name="email_usu"   required/>
			<input type="password" class="input" placeholder="Contraseña"  name="pass_usu"   required/>
		</div>
		<button class="submit-btn">Registrarse</button>
		</form>
	</div>
	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login"><span>Ó</span>Iniciar Sesión</h2>
			<form action="<?php echo base_url()?>/verificar" method="POST">
			<?= csrf_field() ?>
			<div class="form-holder">
				<input type="email" class="input" name="usuario" required="" placeholder="Email" />
				<input type="password" class="input" name="password" required="" placeholder="Contraseña" />
			</div>
			<button class="submit-btn">Entrar</button>
			</form>
		</div>
	</div>
</div>
<!-- partial -->
  <script  src="panel/dist/js/script.js"></script>

</body>
</html>
