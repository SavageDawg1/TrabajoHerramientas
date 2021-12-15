<!doctype html>
<html lang="en">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <head>
  	<title>Registro</title>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="css/Estilo.css">
	<link rel="stylesheet" href="css/login.css">


	</head>
	<body>

	<?php include_once "include/header.php"; ?>

	<section class="ftco-section mb-5">
		<div class="container ">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap border">
						<div class="img" style="background-image: url(Fotos/fondo3.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Registro</h3>
			      		</div>
			      	</div>
							<form action="#" class="signin-form">
			      		<div class="form-group mt-3">
			      			<input type="text" class="form-control" required autofocus>
			      			<label class="form-control-placeholder" for="username">Nombre De Usuario</label>
			      		</div>
		            <div class="form-group mt-5">
		              <input id="password-field" type="password" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Contraseña</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
					<div class="form-group mt-5">
		              <input id="password-field" type="text" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Correo</label>
		            </div>
					<div class="form-group mt-5">
		              <input id="password-field" type="text" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Nombre</label>
		            </div>
					<div class="form-group mt-5">
		              <input id="password-field" type="text" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Apellido Paterno</label>
		            </div>
					<div class="form-group mt-5">
		              <input id="password-field" type="text" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Apellido Materno</label>
		            </div>
					<div class="form-group mt-5">
		              <input id="password-field" type="text" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Edad</label>
		            </div>
					<div class="form-group mt-5">
		              <input id="password-field" type="text" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Rut</label>
		            </div>
					<div class="form-group mt-5">
						<input type="date" class="form-control" id="fecha"  name="fecha_nacimiento" required >
						<label for="floatingPassword">Fecha de Nacimiento</label>
                	</div>
					<div class="form-group mt-5">
		              <input id="password-field" type="text" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Ciudad</label>
		            </div>
					<div class="form-group mt-5">	
		              <input id="password-field" type="text" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Calle</label>
		            </div>
					<div class="form-group mt-5">
		              <input id="password-field" type="text" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Numero</label>
		            </div>
					<div class="form-group mt-5">
						<label for="hombre" class="radio-inline"><input type="radio" name="genero" value="Hombre">Hombre</label>
						<label for="mujer" class="radio-inline"><input type="radio" name="genero" value="Mujer">Mujer</label>
						<label for="otros" class="radio-inline"><input type="radio" name="genero" value="Otros">Otros</label>
					</div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btna rounded submit px-3">Registrarse</button>
		            </div>
		          </form>
		          <p class="text-center">¿Ya tienes cuenta? <a data-toggle="tab" href="#signup">Iniciar Sesion</a></p>
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
 

 	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>   
</html>

