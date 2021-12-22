
<?php
require 'conexion.php';

$id=$_GET['id_personas'];

$records = $conn->prepare("DELETE FROM usuarios  WHERE id_usuarios='$id'");
$records->execute();
$records = $conn->prepare("DELETE FROM direccion  WHERE id_direccion='$id'");
$records->execute();
$records = $conn->prepare("DELETE FROM personas  WHERE id_personas='$id'");
$records->execute();

Header("Location: ../lista_usuarios.php");
?>