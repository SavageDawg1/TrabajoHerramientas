<?php
    require 'conexion.php';

    $correo=$_POST['correo'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql=$conn->prepare("UPDATE usuarios SET  password='$password' WHERE correo ='$correo'");

    $sql->execute();

        if($sql){

            Header("Location: ../login.php");
        }
?>

