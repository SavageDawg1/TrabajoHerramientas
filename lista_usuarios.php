<?php 
    include_once "include/conectado.php";
    session_start();
    require 'consultas/conexion.php';


    if(isset($_POST{'consulta'})){
        $q = ($_POST['consulta']);
                $query="SELECT P.id_personas, P.nombre, P.apellido_paterno, P.apellido_materno, P.rut, P.fecha_nacimiento, P.edad, P.sexo, U.nombre_usuario, U.correo, D.ciudad, D.calle, D.numero FROM personas P INNER JOIN usuarios U ON P.id_personas = U.id_usuarios INNER JOIN direccion D ON P.id_personas = D.id_direccion  WHERE  P.nombre LIKE '%".$q."%' OR P.apellido_paterno  LIKE '%".$q."%' OR P.rut  LIKE '%".$q."%' OR P.apellido_materno  LIKE '%".$q."%'";
                
     }else{
         $query="SELECT P.id_personas, P.nombre, P.apellido_paterno, P.apellido_materno, P.rut, P.fecha_nacimiento, P.edad, P.sexo, U.nombre_usuario, U.correo, D.ciudad, D.calle, D.numero FROM personas P INNER JOIN usuarios U ON P.id_personas = U.id_usuarios INNER JOIN direccion D ON P.id_personas = D.id_direccion ";

    }
    $conn=$conn->query($query);

?>




<!DOCTYPE html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<html lang="en">
    <head>
        <title> Lista de Usuarios</title>
        <?php include_once "include/head.php"; ?>       
              
    </head>
    <body>
        <?php include_once "include/header.php"; ?>
        <div class="container-xxl  bg-light">
            <section class="principal ">
            <h1 class="especial mb-4">LISTA DE USUARIOS</h1>
            <h1 class=" mb-2 h3">Busqueda De Usuario</h1>
            <form class="form bg-light mb-4" action="lista_usuarios.php" method="POST" >
                <label >Buscar</label>
                <input type="text" name="consulta" id="consulta" > 
                 <button type="submit" class=" w-auto btn btn btn-primary" >Buscar</button>
            </form>
            <table class="table table-striped" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido materno</th>
                            <th>Sexo</th>
                            <th>Fecha Nacimiento</th>
                            <th>Edad</th>
                            <th>Ciudad</th>   
                            <th>Calle</th>   
                            <th>Numero</th>   
                            <th>Nickname</th>   
                            <th>Correo</th>   
                            <th></th>   
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                while ($fila=$conn->fetch(PDO::FETCH_ASSOC)){
                      echo'
                        <tr>
                        <td>'.$fila['rut'].'</td>
                        <td>'.$fila['nombre'].'</td>
                        <td>'.$fila['apellido_paterno'].'</td>
                        <td>'.$fila['apellido_materno'].'</td>
                        <td>'.$fila['sexo'].'</td>
                        <td>'.$fila['fecha_nacimiento'].'</td>
                        <td>'.$fila['edad'].'</td>
                        <td>'.$fila['ciudad'].'</td>
                        <td>'.$fila['calle'].'</td>
                        <td>'.$fila['numero'].'</td>
                        <td>'.$fila['nombre_usuario'].'</td>
                        <td>'.$fila['correo'].'</td>
                        <th><a href="consultas/delete.php?id_personas='.$fila['id_personas'] .'" class="btn btn-danger">Eliminar</a></th>
                        <th><a href="update_tabla.php?id_personas='.$fila['id_personas'] .'" class="btn btn-primary">Editar</a></th>
                        </tr>
                        ';                     
                           }
                        ?>
                    </tbody>
                </table>
        </section>
        </div>
        
                
    
        <?php include_once "include/footer.php"; ?>   
     
    </body>
</html>