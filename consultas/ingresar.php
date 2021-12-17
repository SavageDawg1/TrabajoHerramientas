<?php
$message1 = '';
$message2 = '';
$message3 = '';
if (!empty($_POST['correo']) && !empty($_POST['contraseña'])) {
    
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

	if ($stmt->execute()) {
      $message2 = 'persona Creado Correctamente ';
    } else {
      $message2 = 'Lo Sentimos, Su persona No Pudo Ser Creada ';
    }

    $sql = "INSERT INTO direccion VALUES (:id_direccion, :ciudad,:calle,:numero)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_direccion', $_POST['id']);
    $stmt->bindParam(':ciudad', $_POST['ciudad']);
    $stmt->bindParam(':calle', $_POST['calle']);
    $stmt->bindParam(':numero', $_POST['numero']);

    if ($stmt->execute()) {
      $message1 = 'direccion Creado Correctamente ';
    } else {
      $message1 = 'Lo Sentimos, Su direccion No Pudo Ser Creada ';
    }


	$sql = "INSERT INTO usuarios VALUES (:id_usuarios, :nombre_usuario, :contraseña, :correo)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':id_usuarios', $_POST['id']);
	$stmt->bindParam(':nombre_usuario', $_POST['nombre_usuario']);
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
    $stmt->bindParam(':contraseña', $contraseña);
    $stmt->bindParam(':correo', $_POST['correo']);

    if ($stmt->execute()) {
      $message3 = 'Usuario Creado Correctamente ';
    } else {
      $message3 = 'Lo Sentimos, Su Usuario No Pudo Ser Creada ';
    }
}
?>