<?php
include 'conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM libros WHERE id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$libro = $result->fetch_assoc();
?>

<form id="formEditar">
    <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
    <label for="titulo">Título</label>
    <input type="text" name="titulo" value="<?php echo $libro['titulo']; ?>" required>
    <label for="autor">Autor</label>
    <input type="text" name="autor" value="<?php echo $libro['autor']; ?>" required>
    <label for="carrera">Carrera</label>
    <input type="text" name="carrera" value="<?php echo $libro['carrera']; ?>" required>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
