<!--Verificar si esta logeado-->
    <?php include_once "include/conectado.php"; ?> <!--Poner en todas las paginas menos en login y en el registro-->
<!--Verificar si esta logeado-->
<!doctype html>
<html lang="en">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
  <?php include_once "include/head.php"; ?>
  <link rel="stylesheet" href="css/quienes_somos.css">
  <title>Quienes Somos</title>
</head>

<body>
  <!--Navbar-->
  <?php include_once "include/header.php"; ?>
  <!--Navbar-->
  <main>

    <div class="container marketing  mt-5">     
        
      <!-- START THE FEATURETTES -->
        <div class="row featurette mt-5">
          <div class="col-md-8 bg-faded rounded border ">
            <h2 class="featurette-heading mb-5 text-black">SOBRE NOSOTROS</h2>
            <p class=" lead text-justify ">Nuestra sueño nace en 2021 y desde su inicio se ha insertado en la memoria de todo viajero nacional que desee conocer la región de Atacama. A través de nuestras Redes Sociales (Facebook, Twitter, Instagram y Youtube) se ha generado una gran comunidad atenta a nuestras publicaciones, actividades y formatos que diariamente mostramos para mantener informados a nuestros seguidores, quienes interactúan, participan y reconocen nuestro trabajo.En nuestro sitio podrás encontrar noticias, entrevistas, vivenciales, reportajes e imperdibles sobre temáticas turísticas, entre mucha otra información turística que acerque a nuestros usuarios planificar sus viajes por Chile.</p>
          </div>
          <div class="col-md-4"> 
            <img src="Fotos/flamenco.jpg" class="rounded bd-placeholder-img  bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" role="img">
          </div>
        </div>
        <hr class="featurette-divider">
         
       <center><h1 class="h1 mb-5" style="text-align: center;">NUESTRO STAFF</h1>
                          <div class="row">
                            <div class="col-lg-3">
                              <img src="Fotos/gatom.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="140" height="140" role="img" style="border-radius: 70px;">
                              
                              <h2>Franz Oppliger</h2>
                            </div>
                            <div class="col-lg-3">
                              <img src="Fotos/yerko.jpeg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="140" height="140" role="img" style="border-radius: 70px;">
                              <h2>Yerko Arbarza</h2>
                            </div>
                            <div class="col-lg-3">
                              <img src="Fotos/gaspar.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="140" height="140" role="img" style="border-radius: 70px;">
                              <h2>Gaspar Araya</h2>
                            </div>
                            <div class="col-lg-3">
                              <img src="Fotos/ignacio.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="140" height="140" role="img" style="border-radius: 70px;">
                              <h2>Ignacio Zenteno</h2>
                            </div>
                          </div></center>
        <hr class="featurette-divider">
        <!-- /.row -->
       
        <div class="row featurette ">
          <div class="col-md-7 order-md-2 bg-faded rounded border">
            <h2 class="featurette-heading mb-5 text-black">Donde Puedes Encontrarnos</h2>
            <p class="lead text-justify">Nuestra sucursal se encuentra en <strong>Universidad de Atacama</strong></p>
          </div>
          <div class="col-md-5 order-md-1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14174.416039665526!2d-70.3526764!3d-27.3568459!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5d6a6c8301905dfb!2sUniversidad%20de%20Atacama!5e0!3m2!1ses!2scl!4v1639936475240!5m2!1ses!2scl" width="420" height="450"  allowfullscreen="" loading="lazy" class="border border-dark"></iframe>
          </div>
        </div>

       
      </div><!-- /.container -->

      <hr class="featurette-divider">


    <!--Footer-->
    <?php include_once "include/footer.php"; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <!--Footer-->

  </body>
</html>
