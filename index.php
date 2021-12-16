<!--Verificar si esta logeado-->
	<?php include_once "include/conectado.php"; ?> <!--Poner en todas las paginas menos en login y en el registro-->
<!--Verificar si esta logeado-->

<!DOCTYPE html>
<html lang="en">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/Estilo.css">

	<!--script para los dropdown-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<title>Document</title>
</head>
<body  class="bg-light">
	<!--Navbar-->
	<?php include_once "include/header.php"; ?>
	<!--Navbar-->
	  
	  <!--Slider-->
	  <div class="container">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
	  
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
			<div class="item active">
			  <img src="Fotos/fondo.jpg" alt="Los Angeles" style="width:100%;">
			</div>
	  
			<div class="item">
			  <img src="Fotos/fondo2.jpg" alt="Chicago" style="width:100%;">
			</div>
		  
			<div class="item">
			  <img src="Fotos/fondo3.jpg" alt="New york" style="width:100%;">
			</div>
		  </div>
	  
		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	  </div>
	  <!--Cards-->
	  <div class="container mx-auto mt-4">
		<div class="row">
		  <div class="col-md-4">
			<div class="card" style="width: 35rem;">
		<img src="Fotos/bahia.jpg" class="card-img-top" alt="Bahia Inglesa">
		<div class="card-body">
		  <h5 class="card-title">Bahia Inglesa</h5>
		  <p class="card-text">Este tour a esta hermosa playa incluye estadia con visitas a distintos atractivos turísticos durante 2 días.</p>
			 <a href="#" class="btn mr-2"><i class="fas fa-link"></i> $190.000</a>
		  <a href="#" class="btn "><i class="fab fa-github"></i> Mas informacion</a>
		</div>
		</div>
		  </div>    
			 <div class="col-md-4">
	  <div class="card" style="width: 35rem;">
		<img src="Fotos/caldera.jpg" class="card-img-top" alt="Museo">
		<div class="card-body">
		  <h5 class="card-title">Museo de Piedras</h5>
		  <p class="card-text">Uno de los lugares de interés populares es el Museo de Piedras, en el cual se pueden apreciar estructuras rocosas con forma de variados animales.</p>
		  <a href="#" class="btn  mr-2"><i class="fas fa-link"></i> $190.000</a>
		  <a href="#" class="btn"><i class="fab fa-github"></i> Mas informacion</a>
		</div>
		</div>
		  </div>    
				<div class="col-md-4">
	  <div class="card" style="width: 35rem;">
		<img src="Fotos/laguna.jpg" class="card-img-top" alt="...">
		<div class="card-body">
		  <h5 class="card-title">Laguna Santa Rosa</h5>
		  <p class="card-text">En este paquete se encuentra incluida una visita a la Laguna Santa Rosa con camping de una noche para luego descender.</p>
		  <a href="#" class="btn mr-2"><i class="fas fa-link"></i> $210.000</a>
		  <a href="#" class="btn "><i class="fab fa-github"></i> Mas Informacion</a>
		</div>
		</div>
		</div>
	  </div>
	</div>

	<!--Footer-->
	<?php include_once "include/footer.php"; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <!--Footer-->

</body>
</html>