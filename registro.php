<?php
	include_once "include/conectado.php";
	require 'consultas/conexion.php';
	include_once "consultas/ingresar.php";
?>
<!doctype html>
<html lang="en">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <head>
  	<title>Iniciar Sesión</title>
	<?php include_once "include/head.php"; ?>
	<link rel="stylesheet" href="css/login.css">
	</head>
	<body >

	<?php include_once "include/header.php"; ?>

	<section class="ftco-section mb-5">
		<div class="container ">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-6">
					<div class="wrap border">
						<div class="img" style="background-image: url(Fotos/fondo3.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
							<?php if(!empty($message)): ?>
					      <p> <?= $message ?></p>
					    <?php endif; ?>
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Registro</h3>
			      		</div>
			      	</div>

			      	<!-- //////////FORMULARIO PARA INSERTAR DATOS//////////// -->
							<form action="registro.php" method="POST" class="signin-form">
			      		<div class="form-group mt-3 ">
			      			<input type="text" class="form-control" name="nombre_usuario" required autofocus>
			      			<label class="form-control-placeholder" for="username">Nombre De Usuario</label>
			      		</div>
		            <div class="form-group mt-5">
		              <input id="password-field" type="password" class="form-control" name="password" required>
		              <label class="form-control-placeholder" for="password">Contraseña</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
								<div class="form-group mt-5">
					        <input type="email" class="form-control" name="correo" required>
					        <label class="form-control-placeholder">Correo</label>
					      </div>
								<div class="form-group mt-5">
					        <input type="text" class="form-control" name="nombre" required>
					        <label class="form-control-placeholder">Nombre</label>
					      </div>
								<div class="form-group mt-5">
					     		<input type="text" name="apellido_paterno" class="form-control" required>
					        <label class="form-control-placeholder">Apellido Paterno</label>
					      </div>
								<div class="form-group mt-5">
					        <input type="text" name="apellido_materno" class="form-control" required>
					        <label class="form-control-placeholder">Apellido Materno</label>
					      </div>
								<div class="form-group mt-5">
									<label >Edad</label>
					        <input type="number" name="edad" class="form-control" id="edad" readonly=" ">
					      </div>
								<div class="form-group mt-5">
					        <input type="text" name="rut" class="form-control" required>
					        <label class="form-control-placeholder">Rut</label>
					      </div>
								<div class="form-group mt-5">
									<label for="floatingPassword">Fecha de Nacimiento</label>
									<input type="date" name="fecha_nacimiento" class="form-control" id="fecha"  name="fecha_nacimiento" required >
			          </div>
								<div class="form-group mt-5">
					      	<input type="text" name="ciudad" class="form-control" required>
					        <label class="form-control-placeholder">Ciudad</label>
					      </div>
								<div class="form-group mt-5">	
					        <input type="text" name="calle" class="form-control" required>
					        <label class="form-control-placeholder">Calle</label>
					      </div>
								<div class="form-group mt-5">
					        <input  type="text" name="numero" class="form-control" required>
					        <label class="form-control-placeholder">Numero</label>
					      </div>
								<div class="form-group mt-5">
									<label for="hombre" class="radio-inline"><input type="radio" name="sexo" value="Hombre">Hombre</label>
									<label for="mujer" class="radio-inline"><input type="radio" name="sexo" value="Mujer">Mujer</label>
									<label for="otros" class="radio-inline"><input type="radio" name="sexo" value="Otros">Otros</label>
								</div>
		            <div class="form-group">
		            	<button name="insertar" type="submit" class="form-control btna rounded submit px-3">Registrarse</button>
		            </div>
		          </form>
		          <p class="text-center">¿Ya tienes cuenta? <a  href="login.php">Iniciar Sesion</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<!--Footer-->
    <?php include_once "include/footer.php"; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	<!--Footer-->
	</body>
 
	<script src='Js/Funciones.js'></script>
 	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>   
</html>

