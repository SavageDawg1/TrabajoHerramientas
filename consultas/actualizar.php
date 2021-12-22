<?php
    require 'conexion.php';

    $id=$_POST['id_personas'];
    $nombre_usuario=$_POST['nombre_usuario'];
    $rut=$_POST['rut'];
    $nombre=$_POST['nombre'];
    $apellido_paterno=$_POST['apellido_paterno'];
    $apellido_materno=$_POST['apellido_materno'];
    $edad=$_POST['edad'];
    $fecha_nacimiento=$_POST['fecha_nacimiento'];
    $sexo=$_POST['sexo'];
    $ciudad=$_POST['ciudad'];
    $numero=$_POST['numero'];
    $calle=$_POST['calle'];



    $sql=$conn->prepare("UPDATE personas SET  rut='$rut',nombre='$nombre',apellido_paterno='$apellido_paterno',apellido_materno='$apellido_materno',fecha_nacimiento='$fecha_nacimiento',edad='$edad',sexo='$sexo'  WHERE id_personas ='$id'");
    $sql->execute();
    
    $sql=$conn->prepare("UPDATE usuarios SET  nombre_usuario='$nombre_usuario'  WHERE id_usuarios ='$id'");
    $sql->execute();

    $sql=$conn->prepare("UPDATE direccion SET  ciudad='$ciudad',calle='$calle', numero='$numero'  WHERE id_direccion ='$id'");
    $sql->execute();


    Header("Location: ../lista_usuarios.php");
?>


