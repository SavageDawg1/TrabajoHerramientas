<?php
	session_start();
  	require 'consultas/conexion.php';
  	if (!empty($_POST['correo']) && !empty($_POST['nombre_usuario'])) {
    	$records = $conn->prepare('SELECT * FROM usuarios WHERE correo = :correo');
    	$records->bindParam(':correo', $_POST['correo']);
    	$records->execute();
    	$results = $records->fetch(PDO::FETCH_ASSOC);
   	 	$message = '';
   	 	$Rpass = '';
    	if (count($results) > 0 && ($_POST['nombre_usuario'] == $results['nombre_usuario'])) {
      		$message = 'Ingrese su nueva contraseña';
      		$Rpass = 'si';
      		$mail=$_POST['correo'];
    	} else {
      		$message = 'Lo sentimos, El correo y/o el nombre no son validos';
      		$Rpass = 'no';
    	}
  	}

    $conexion=mysqli_connect('localhost','root','admin123','registro');
  	if (!empty($_POST['password'])) {

  		$sql="UPDATE usuarios SET password='$password'  WHERE correo='$correo'";
			$query=mysqli_query($conexion,$sql);

		
  	}

?>

<!doctype html>
<html class="no-js" lang="en">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
			      	<?php if($Rpass=='si'): ?>

			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">RECUPERAR CLAVE</h3>
		    				
			      		</div>
			      	</div>
					<form  method="POST" class="signin-form" action="consultas/update_pass.php" >
			      		<div class="form-group mt-3" >
			      			<label>Correo De Usuario</label>
			      			<input type="email" class="form-control" name="correo" value="<?=$mail;?>"  required  readonly>
			      			
			      		</div>
			            <div class="form-group mt-5">
			              <input id="password-field" type="password" class="form-control" name="password" required autofocus>
			              <label class="form-control-placeholder" for="password">Nueva Contraseña</label>
			              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
			            </div>

			            <div class="form-group">
			            	<button type="submit" value="send" class="form-control btna rounded submit px-3">Aceptar</button>
			            </div>
		          	</form>
					<?php else: ?>
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">RECUPERAR CLAVE</h3>
		    				<p class="mb-3 ">Ingresa Tu Correo Y Nombre De Usuario</p>
			      		</div>
			      	</div>
					<form  method="POST" class="signin-form">
			      		<div class="form-group mt-3">
			      			<input type="email" class="form-control" name="correo" required autofocus>
			      			<label class="form-control-placeholder" >Correo De Usuario</label>
			      		</div>
			            <div class="form-group mt-3">
			      			<input type="text" class="form-control" name="nombre_usuario" required autofocus>
			      			<label class="form-control-placeholder" >Nombre De Usuario</label>
			      		</div>

			            <div class="form-group">
			            	<button type="submit" value="send" class="form-control btna rounded submit px-3">Recuperar Contraseña</button>
			            </div>
		          	</form>
		          	<?php endif; ?>
		         	<p class="text-center">¿Recuerdas tu contraseña? <a  href="login.php">Iniciar Sesion</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>	
	<?php include_once "include/footer.php"; ?>
</body>
<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script> 
</html>