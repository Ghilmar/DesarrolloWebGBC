<?php

$conexion = new mysqli("localhost", "root", "", "bd_banco");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$orden = isset($_GET['orden']) ? $_GET['orden'] : 'nombres';
$sql = "SELECT * FROM usuarios ORDER BY $orden ASC";
$resultado = $conexion->query($sql);
?>


    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th {
            background-color: red;
            color: white;
        }
        td {
            padding: 8px;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #FFC000;
        }
        tr:nth-child(odd) {
            background-color: white;
        }
    </style>

    <table>
        <tr>
            <th><a href="pregunta4.php?orden=nombres">Nombres</a></th>
            <th><a href="pregunta4.php?orden=apellidos">Apellidos</a></th>
            <th><a href="pregunta4.php?orden=correo">Correo</a></th>
        </tr>
        <?php while($fila = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?php echo $fila['nombres']; ?></td>
            <td><?php echo $fila['apellidos']; ?></td>
            <td><a href="form_editar_correp.php?id=<?php echo $fila['id']; ?>"><?php echo $fila['correo']; ?></a></td>
        </tr>
        <?php endwhile; ?>
    </table>


<?php
$conexion->close();
?>
