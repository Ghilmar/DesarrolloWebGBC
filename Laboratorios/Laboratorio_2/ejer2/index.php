<link rel="stylesheet" href="style.css">
<?php
session_start();
include 'operaciones.php';

?>
<h2>Menu</h2>
<ul>
    <li><a href="index.php?accion=introducir">Introducir Datos</a></li>
    <li><a href="index.php?accion=mostrar">Mostrar Cálculos</a></li>
</ul>

<?php
if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];

    if ($accion == 'introducir') {
?>
        <form action="index.php?accion=guardar" method="post" class="formu">
            <label for="a">Valor A:</label>
            <input type="number" id="a" name="a" required><br><br>
            <label for="b">Valor B:</label>
            <input type="number" id="b" name="b" required><br><br>
            <label for="c">Valor C:</label>
            <input type="number" id="c" name="c" required><br><br>
            <input type="submit" value="Guardar">
        </form>
<?php
    }
    if ($accion == 'guardar' && isset($_POST['a'], $_POST['b'], $_POST['c'])) {
        $_SESSION['a'] = $_POST['a'];
        $_SESSION['b'] = $_POST['b'];
        $_SESSION['c'] = $_POST['c'];
        echo "<p>Datos guardados correctamente. <a href='index.php?accion=mostrar'>Mostrar cálculos</a></p>";
    }
    if ($accion == 'mostrar') {
        if (isset($_SESSION['a'], $_SESSION['b'], $_SESSION['c'])) {
            $operacion = new Operaciones($_SESSION['a'], $_SESSION['b'], $_SESSION['c']);
            $operacion->MostrarCalculos();
        } else {
            echo "<p>No hay datos almacenados. Por favor, introduce los datos primero.</p>";
        }
    }
}
?>