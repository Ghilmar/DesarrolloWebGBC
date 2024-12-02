<?php
include 'conexion.php';

$filtro = $_GET['filtro'] ?? 'todos';

$sql = "SELECT * FROM libros";
if ($filtro !== 'todos') {
    $sql .= " WHERE carrera = '$filtro'";
}

$result = $con->query($sql);

$libros = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $libros[] = $row;
    }
}

echo json_encode($libros, JSON_UNESCAPED_UNICODE);
?>
