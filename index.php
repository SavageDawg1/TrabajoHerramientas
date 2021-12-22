<!--Verificar si esta logeado-->
	<?php include_once "include/conectado.php"; ?> <!--Poner en todas las paginas menos en login y en el registro-->
<!--Verificar si esta logeado-->

<!DOCTYPE html>
<html lang="en">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
	<?php include_once "include/head.php"; ?>
	<title>Inicio</title>
</head>

<body >
	<!--Navbar-->
	<?php include_once "include/header.php"; ?>
	<!--Navbar-->
	

     <div id="carousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
              <img src="./Fotos/bahiabanner.png" class="d-block w-100" alt="">
            </div>
   
            <div class="carousel-item" data-bs-interval="4000">
              <img src="./Fotos/banneraguaverde.png" class="d-block w-100" alt="...">
            </div>  
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carousel"  data-bs-slide="prev" style="background: inherit; border: inherit;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carousel"  data-bs-slide="next"style="background: inherit; border: inherit;">
           
            <span class="visually-hidden">siguiente</span>
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </button>
        </div>  

 
	<div class="container">
            <div class="row">
          <div class="card-group" id="cardgroup1">
            <div class="card col-lg-4 col-md-3 rounded"style=" border: 5px solid black; " >
              <img class="card-img-top " src="Fotos/bahia.jpg" alt="Card image cap" style="border-top-left-radius: 44px;border-top-right-radius: 44px; width: 308px; margin-left: -15px;">
              <div class="card-body">
                <h3 class="card-title">Bahia Inglesa</h3>
                <p class="card-text">Playa turistica ubicada cerca de copiapó</p>
              </div>
              
            </div>
            <div class="card col-lg-4 col-md-3 rounded" style=" border: 5px solid black;">
              <img class="card-img-top" src="Fotos/volcan379.png" alt="Card image cap" style="border-top-left-radius: 44px;border-top-right-radius: 44px; width: 308px; margin-left: -15px;">
              <div class="card-body">
                <h3 class="card-title">Volcan Ojos del Salado</h3>
                <p class="card-text">Se halla enclavado sobre el límite entre Argentina y Chile</p>
              </div>
              
            </div>
            <div class="card col-lg-4 col-md-3 rounded" style=" border: 5px solid black;">
              <img class="card-img-top" src="Fotos/desierto379.png" alt="Card image cap" style="border-top-left-radius: 44px;border-top-right-radius: 44px; width: 308px; margin-left: -15px;">
              <div class="card-body">
                <h3 class="card-title">Desierto Florido</h3>
                <p class="card-text">Fenómeno que se produce en el desierto de Atacama</p>
              </div>
              
            </div>
          </div>

        </div>

    </div>
    <div class="container">
        <div class="row">
      <div class="card-group" id="cardgroup2">
        <div class="card col-lg-4 col-md-3 rounded"  style=" border: 5px solid black;">
          <img class="card-img-top" src="Fotos/parquetrescruces.png" alt="Card image cap" style="border-top-left-radius: 44px;border-top-right-radius: 44px; width: 308px; margin-left: -15px;">
          <div class="card-body">
            <h3 class="card-title">Parque Nacional  Tres Cruces</h3>
            <p class="card-text">Es un parque nacional ubicado en la III Región de Atacama</p>
          </div>
          
        </div>
        <div class="card col-lg-4 col-md-3 rounded" style=" border: 5px solid black;">
          <img class="card-img-top" src="Fotos/playalavirgenindex.png" alt="Card image cap" style="border-top-left-radius: 44px;border-top-right-radius: 44px; width: 308px; margin-left: -15px;">
          <div class="card-body">
            <h3 class="card-title">Playa la virgen</h3>
            <p class="card-text">Playa de arenas blancas y aguas cristalinas, se ubica 40 km al sur desde Bahía Inglesa</p>
          </div>
          
        </div>
        <div class="card col-lg-4 col-md-3 rounded" style=" border: 5px solid black;">
          <img class="card-img-top" src="Fotos/turismo/lagunaverde.png" alt="Card image cap" style="border-top-left-radius: 44px;border-top-right-radius: 44px; width: 308px; margin-left: -15px;">
          <div class="card-body">
            <h3 class="card-title">Laguna Verde</h3>
            <p class="card-text">Se le encuentra  a unos 265 km al este-noreste de la ciudad de Copiapó.</p>
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