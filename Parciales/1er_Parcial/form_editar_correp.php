<?php

$conexion = new mysqli("localhost", "root", "", "bd_banco");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


$id = isset($_GET['id']) ? $_GET['id'] : 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nuevo_correo = $_POST['correo'];
    $sql = "UPDATE usuarios SET correo='$nuevo_correo' WHERE id=$id";
    if ($conexion->query($sql) === TRUE) {
        header("Location: pregunta4.php");
        exit();
    } else {
        echo "Error al actualizar el correo: " . $conexion->error;
    }
}


$sql = "SELECT * FROM usuarios WHERE id=$id";
$resultado = $conexion->query($sql);
$usuario = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Correo</title>
</head>
<body>
    <h2>Editar Correo de <?php echo $usuario['nombres'] . " " . $usuario['apellidos']; ?></h2>
    <form method="POST">
        <label for="correo">Correo:</label>
        <input type="email" name="correo" value="<?php echo $usuario['correo']; ?>" required>
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>

<?php
$conexion->close();
?>
