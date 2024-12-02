<?php
include 'conexion.php';

$id = $_GET['id'];
$sql = "SELECT mensaje FROM correos WHERE id = $id";
$result = $con->query($sql);

if ($row = $result->fetch_assoc()) {
    echo $row['mensaje'];
} else {
    echo "Mensaje no encontrado.";
}

$con->close();
?>
