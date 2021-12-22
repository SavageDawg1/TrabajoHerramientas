<?php
    session_start();
    require 'consultas/conexion.php';

    if (isset($_SESSION['user_id'])) {
        $records = $conn->prepare('SELECT * FROM personas WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        $user = null;
        if (count($results) > 0) {
            $user = $results;
        }
    }
    $conexion=mysqli_connect('localhost','root','admin123','registro');
    $id=$_GET['id_personas'];

    $sql="SELECT P.id_personas, P.nombre, P.apellido_paterno, P.apellido_materno, P.rut, P.fecha_nacimiento, P.edad, P.sexo, U.nombre_usuario, U.correo, D.ciudad, D.calle, D.numero FROM personas P INNER JOIN usuarios U ON P.id_personas = U.id_usuarios INNER JOIN direccion D ON P.id_personas = D.id_direccion ";

   $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query)

?>

<!DOCTYPE html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<html lang="en">
    <head>

        <title>Datos de Usuario</title>
        <?php include_once "include/head.php"; ?>
        <link rel="stylesheet" href="css/login.css">
        
    </head>

    <body >

    <?php include_once "include/header.php"; ?> 
        <?php if(!empty($message)): ?>
            <p> <?= $message ?></p>
        <?php endif; ?>



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
                   

                    <!-- //////////FORMULARIO PARA ACTUALIZAR DATOS//////////// -->
                            <form action="consultas/actualizar.php" method="POST" class="signin-form">
                                 <div class="d-flex">
                        <div class="w-100">
                            <h1 class="h3 mb-1 fw-normal">Actualizar Datos Del Usuario N°<input name="id_personas" class="border border-light " style="width: 30px" readonly  value="<?=$row['id_personas'];?>" ></h1>
                            <h5 class="fw-normal mb-4">Aquí puedes actualizar sus datos personales</h5>

                        </div>
                    </div>
                        <div class="form-group mt-3 ">
                            <input type="text" class="form-control" name="nombre_usuario" required value="<?=$row['nombre_usuario']; ?>" autofocus>
                            <label class="form-control-placeholder" for="username">Nombre De Usuario</label>
                        </div>
                        <div class="form-group mt-5">
                            <label >Correo</label>
                            <input type="email" class="form-control" name="correo" required value="<?=$row['correo'];?>" readonly >
                            
                          </div>
                                <div class="form-group mt-5">
                            <input type="text" class="form-control" name="nombre" required value="<?=$row['nombre']; ?>">
                            <label class="form-control-placeholder">Nombre</label>
                          </div>
                                <div class="form-group mt-5">
                                <input type="text" name="apellido_paterno" class="form-control" value="<?=$row['apellido_paterno']; ?>" required>
                            <label class="form-control-placeholder">Apellido Paterno</label>
                          </div>
                                <div class="form-group mt-5">
                            <input type="text" name="apellido_materno" class="form-control" required value="<?=$row['apellido_materno']; ?>">
                            <label class="form-control-placeholder">Apellido Materno</label>
                          </div>
                                <div class="form-group mt-5">
                                    <label >Edad</label>
                            <input type="number" name="edad" class="form-control" id="edad" value="<?=$row['edad']; ?>" readonly=" ">
                          </div>
                                <div class="form-group mt-5">
                            <input type="text" name="rut" class="form-control" required value="<?=$row['rut']; ?>">
                            <label class="form-control-placeholder">Rut</label>
                          </div>
                                <div class="form-group mt-5">
                                    <label for="floatingPassword">Fecha de Nacimiento</label>
                                    <input type="date" name="fecha_nacimiento" class="form-control" id="fecha"  name="fecha_nacimiento" value="<?=$row['fecha_nacimiento']; ?>" required >
                      </div>
                                <div class="form-group mt-5">
                            <input type="text" name="ciudad" class="form-control" required value="<?=$row['ciudad']; ?>">
                            <label class="form-control-placeholder">Ciudad</label>
                          </div>
                                <div class="form-group mt-5">   
                            <input type="text" name="calle" class="form-control" required value="<?=$row['calle']; ?>">
                            <label class="form-control-placeholder">Calle</label>
                          </div>
                                <div class="form-group mt-5">
                            <input  type="text" name="numero" class="form-control" required value="<?=$row['numero']; ?>">
                            <label class="form-control-placeholder">Numero</label>
                          </div>
                            <label >Sexo</label>
                                <div class="form-group mt-5">
                                    <?php if ($row['sexo']=='Hombre'):?>
                                    <label for="hombre" class="radio-inline"><input type="radio" name="sexo" value="Hombre" checked>Hombre</label>
                                    <?php else:?>
                                    <label for="hombre" class="radio-inline"><input type="radio" name="sexo" value="Hombre">Hombre</label>
                                    <?php endif;?>

                                    <?php if ($row['sexo']=='Mujer'):?>
                                    <label for="mujer" class="radio-inline"><input type="radio" name="sexo" value="Mujer" checked>Mujer</label>
                                    <?php else:?>
                                    <label for="mujer" class="radio-inline"><input type="radio" name="sexo" value="Mujer">Mujer</label>
                                    <?php endif;?>

                                    <?php if ($row['sexo']=='Otros'):?>
                                    <label for="otros" class="radio-inline"><input type="radio" name="sexo" value="Otros" checked>Otros</label>
                                    <?php else:?>
                                     <label for="otros" class="radio-inline"><input type="radio" name="sexo" value="Otros">Otros</label>
                                    <?php endif;?>
                                </div>
                    <div class="form-group">
                        <button name="actualizar" type="submit" class="form-control btna rounded submit px-3">Actualizar</button>
                    </div>
                  </form>
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
    <script src='Js/Funciones.js'></script>
</html>