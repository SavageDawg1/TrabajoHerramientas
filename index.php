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
	

	<div class="container">
            <div class="row">
          <div class="card-group" id="cardgroup1">
            <div class="card col-lg-3 col-md-3 "style=" border: 5px solid black;" >
              <img class="card-img-top " src="Fotos/bahia.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Bahia Inglesa</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              
            </div>
            <div class="card col-lg-3 col-md-3" style=" border: 5px solid black;">
              <img class="card-img-top" src="Fotos/volcan379.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Volcan Ojos del Salado</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              
            </div>
            <div class="card col-lg-3 col-md-3" style=" border: 5px solid black;">
              <img class="card-img-top" src="Fotos/desierto379.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Desierto Florido</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              
            </div>
          </div>

        </div>

    </div>
    <div class="container">
        <div class="row">
      <div class="card-group" id="cardgroup2">
        <div class="card col-lg-3 col-md-3"  style=" border: 5px solid black;">
          <img class="card-img-top" src="Fotos/parquetrescruces.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Parque Nacional  Tres Cruces</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          
        </div>
        <div class="card col-lg-3 col-md-3" style=" border: 5px solid black;">
          <img class="card-img-top" src="Fotos/playalavirgenindex.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Playa la virgen</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          
        </div>
        <div class="card col-lg-3 col-md-3" style=" border: 5px solid black;">
          <img class="card-img-top" src="Fotos/turismo/lagunaverde.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Laguna Verde</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
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