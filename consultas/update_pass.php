<?php
    require 'conexion.php';

    $correo=$_POST['correo'];
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);

    $sql=$conn->prepare("UPDATE usuarios SET  contraseña='$contraseña' WHERE correo ='$correo'");

    $sql->execute();

        if($sql){

            Header("Location: ../index.php");
        }
?>

