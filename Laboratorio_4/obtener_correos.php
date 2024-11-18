<?php
include 'conexion.php';

$sql = "SELECT id, correo, asunto, estado FROM correos";
$result = $con->query($sql);

$correos = [];
while ($row = $result->fetch_assoc()) {
    $correos[] = $row;
}

echo json_encode($correos);
$con->close();
?>
