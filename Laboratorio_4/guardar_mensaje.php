<?php
include 'conexion.php';

// Obtener los datos del formulario a través de AJAX
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// Preparar la consulta SQL para insertar el mensaje
$sql = "INSERT INTO correos (correo, asunto, mensaje, estado) VALUES (?, ?, ?, 'P')";

// Preparar y ejecutar la consulta
$stmt = $con->prepare($sql);
$stmt->bind_param("sss", $correo, $asunto, $mensaje);

if ($stmt->execute()) {
    echo "Mensaje enviado correctamente.";
} else {
    echo "Error al enviar el mensaje: " . $con->error;
}

$stmt->close();
$con->close();
?>
