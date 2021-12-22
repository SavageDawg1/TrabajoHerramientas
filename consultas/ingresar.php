<?php
$message1 = '';
$message2 = '';
$message3 = '';
if (!empty($_POST['correo']) && !empty($_POST['password'])) {
    

    $sql = "INSERT INTO usuarios VALUES (:id_usuarios, :nombre_usuario, :password, :correo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_usuarios', $_POST['id']);
    $stmt->bindParam(':nombre_usuario', $_POST['nombre_usuario']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':correo', $_POST['correo']);

     if ($stmt->execute()) {
      $sql = "INSERT INTO direccion VALUES (:id_direccion, :ciudad,:calle,:numero)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':id_direccion', $_POST['id']);
      $stmt->bindParam(':ciudad', $_POST['ciudad']);
      $stmt->bindParam(':calle', $_POST['calle']);
      $stmt->bindParam(':numero', $_POST['numero']);
      $stmt->execute();
     
      $sql = "INSERT INTO personas VALUES (:id_personas, :nombre,:apellido_paterno,:apellido_materno,:edad,:rut,:fecha_nacimiento,:sexo)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':id_personas', $_POST['id']);
      $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':apellido_paterno', $_POST['apellido_paterno']);
      $stmt->bindParam(':apellido_materno', $_POST['apellido_materno']);
      $stmt->bindParam(':edad', $_POST['edad']);
      $stmt->bindParam(':rut', $_POST['rut']);
      $stmt->bindParam(':fecha_nacimiento', $_POST['fecha_nacimiento']);
      $stmt->bindParam(':sexo', $_POST['sexo']);
      $stmt->execute();

      $message = 'Usuario creado correctamente';
    } else {
      $message = 'Lo Sentimos, esta direccion de correo ya esta utilizada';
    }
}
?>