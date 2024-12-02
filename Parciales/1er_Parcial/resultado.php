<?php
session_start();
include 'operaciones.php';

$a = $_SESSION['a'];
$b = $_SESSION['b'];
$c = $_SESSION['c'];

$operacion = new Operaciones($a, $b, $c);
$tipo_operacion = $_POST['operacion'];
switch ($tipo_operacion) {
    case 'sumar':
        $resultado = $operacion->sumar();
        break;
    case 'restar':
        $resultado = $operacion->restar();
        break;
    case 'multiplicar':
        $resultado = $operacion->multiplicar();
        break;
    case 'dividir':
        $resultado = $operacion->dividir();
        break;
    default:
        $resultado = "Operación no válida";
        break;
}
?>
<p>El resultado es <strong><?php echo $resultado; ?></strong></p>
