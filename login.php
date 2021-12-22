<?php
	include_once "include/conectado.php";
	session_start();

  	require 'consultas/conexion.php';
	if (isset($_SESSION['user_id'])) {
	    $$GLOBALS['user_id'] = something;
	}

  if (!empty($_POST['correo']) && !empty($_POST['password'])) {
   	$records = $conn->prepare('SELECT * FROM usuarios WHERE correo = :correo');
   	$records->bindParam(':correo', $_POST['correo']);
   	$records->execute();
   	$results = $records->fetch(PDO::FETCH_ASSOC);
   	$message = '';
	 	if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
	 		$message = 'correo todo ben todo ben';
  	 	$_SESSION['user_id'] = $results['id_usuarios'];
     	header("Location: index.php");
    } else {
     	$message = 'Lo sentimos, la clave y/o el correo no son validos';
    }
  }
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
				<div class="col-md-7 col-lg-5">
					<div class="wrap border">
						<div class="img" style="background-image: url(Fotos/fondo3.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
							<?php if(!empty($message)): ?>
						    <p> <?= $message ?></p>
						  <?php endif; ?>
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Iniciar Sesión</h3>
			      		</div>
			      	</div>
							<form action="login.php" method="POST" class="signin-form">

			      		<div class="form-group mt-3">
			      			<input type="email" class="form-control" name="correo" required autofocus>
			      			<label class="form-control-placeholder" >Correo De Usuario</label>
			      		</div>
		            <div class="form-group mt-5">
		              <input id="password-field" type="password" class="form-control" name="password" required>
		              <label class="form-control-placeholder" for="password">Contraseña</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>

		            <div class="form-group">
		            	<button type="submit" value="send" class="form-control rounded submit px-3 btn btn-secondary">Ingresar</button>
		            </div>

		            <div class="form-group d-md-flex mb-3">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Recuérdame
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="recuperar_pass.php">Recuperar Contraseña</a>
									</div>
		            </div>

		          </form>
		          <p class="text-center">¿Aun no tienes una cuenta? <a  href="registro.php">Crear Cuenta</a></p>
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
	
</html>

