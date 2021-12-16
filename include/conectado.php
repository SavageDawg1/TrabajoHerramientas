<?php
  session_start();

  require 'consultas/conexion.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT * FROM usuarios WHERE id_usuarios = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>