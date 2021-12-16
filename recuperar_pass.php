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
  	if (!empty($_POST['contraseña'])) {

  		$sql="UPDATE usuarios SET contrasena='$contraseña'  WHERE correo='$correo'";
		$query=mysqli_query($conexion,$sql);

		if($query){
			$Rpass= 'no';
			$message = 'Contraseña Actualizada';
    	}else{
    		$message = 'No FuNKA';
    	}
  		
  	}



?>

<!doctype html>
<html class="no-js" lang="en">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
	<title>Iniciar Sesión</title>
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

<body >
	<?php include_once "include/header.php"; ?>


	<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

		

		<?php if($Rpass=='si'): ?>
		<div id="form1" class="carousel slide container-xxl " data-bs-ride="carousel">
			<div class="form-signin border border-dark container-xxl form bg-light ">
					
					<form action="consultas/update_pass.php" method="POST">	
						<div>
							<input type="email" class="form-control" name="correo" value="<?=$mail;?>" placeholder="name@example.com" readonly>
						</div>			
            			<div class=" form-floating mb-3">
					      	<input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="contraseña" required autofocus>
					      	<label for="floatingPassword" >Nueva Constraseña</label>
					    </div>
					     <div>
					    	<a href="index.php" class="btn btn-danger">Regresar</a>
					   	 	<button  class="w-auto btn btn btn-primary" type="submit" value="send">Actualizar</button>
					    </div>
					    
					</form>
			</div>
		</div>	
		<?php else: ?>
			<div id="form1" class="carousel slide container-xxl " data-bs-ride="carousel">
			<div class=" form-signin border border-dark container-xxl form bg-light ">
				<form action="recuperar_pass.php" method="POST">
 
			    	<h1 class="h3 mb-3 fw-normal especial" >RECUPERAR CLAVE</h1>
			    	<p class="h3 mb-3 fw-normal fs-6">Ingresa Tu Dirección Email Y Nombre</p>
				    <div class="form-floating">
				      	<input type="email" class="form-control" name="correo" placeholder="name@example.com" autofocus>
				    	<label for="floatingInput">Dirección Email</label>
				    </div>
				    <div class="form-floating mb-3">
				      	<input type="text" class="form-control" name="nombre_usuario" placeholder="Nombre">
				      	<label for="floating">Nombre</label>
				    </div> 
				    <div>
				    	<a href="index.php" class="btn btn-danger">Regresar</a>
				   	 	<button  class="w-auto btn btn btn-primary" type="submit" value="send">Recuperar</button>
				    </div>
				</form>
			</div>
		</div>
		<?php endif; ?>

		
	<?php include_once "include/footer.php"; ?>
</body>

</html>