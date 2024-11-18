<?php
$con = new mysqli("localhost", "root", "", "bd_alumnos");

if ($con->connect_error) {
    die("Conexión fallida: " . $con->connect_error);
}

for ($i = 0; $i < 4; $i++) {
    $nombres = $_POST['nombres'][$i];
    $apellidos = $_POST['apellidos'][$i];
    $cu = $_POST['cu'][$i];
    $sexo = $_POST['sexo'][$i];
    $carrera = $_POST['carrera'][$i];

    $foto = $_FILES['fotografia']['name'][$i];
    $ruta_temporal = $_FILES['fotografia']['tmp_name'][$i];

    if ($foto && move_uploaded_file($ruta_temporal, "uploads/" . $foto)) {
        $ruta_destino = "uploads/" . $foto;

        $sql = "INSERT INTO alumnos (fotografia, nombres, apellidos, cu, sexo, codigocarrera) 
                VALUES ('$foto', '$nombres', '$apellidos', '$cu', '$sexo', '$carrera')";

        if ($con->query($sql) === TRUE) {
            echo "Alumno $nombres $apellidos insertado con éxito.<br>";
        } else {
            echo "Error: " . $con->error . "<br>";
        }
    } else {
        echo "Error al subir la fotografia del alumno $nombres $apellidos.<br>";
    }
}

$con->close();
?>
