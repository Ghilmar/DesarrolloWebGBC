<?php
$con = new mysqli("localhost", "root", "", "bd_alumnos");

if ($con->connect_error) {
    die("Conexión fallida: " . $con->connect_error);
}

$sql = "SELECT a.id, a.fotografia, a.nombres, a.apellidos, a.cu, a.sexo, c.carrera 
        FROM alumnos a 
        JOIN carreras c ON a.codigocarrera = c.codigo
        ORDER BY a.apellidos";
$resultado = $con->query($sql);
?>



    <style>
        table { width: 80%; border-collapse: collapse; }
        th { background-color: rgb(26, 82, 118); color: white; }
        tr:nth-child(even) { background-color: rgb(202, 207, 210); }
        td, th { border: 1px solid black; padding: 8px; text-align: left; }
    </style>

                <a href="Fdatos4.php">Inicio</a>  <br>
                <a href="consulta_sexo.php">Motrar por generos</a> <br>
<table>
    <tr>
        <th>Nro</th>
        <th>Fotografia</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>CU</th>
        <th>Sexo</th>
        <th>Carrera</th>
    </tr>

    <?php
    $contador = 1;
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $contador++ . "</td>";
            echo "<td><img src='uploads/" . $row['fotografia'] . "' width='50'></td>";
            echo "<td>" . $row['nombres'] . "</td>";
            echo "<td>" . $row['apellidos'] . "</td>";
            echo "<td>" . $row['cu'] . "</td>";
            echo "<td>" . ($row['sexo'] == 'M' ? 'Masculino' : 'Femenino') . "</td>";
            echo "<td>" . $row['carrera'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No hay alumnos registrados</td></tr>";
    }
    ?>

</table>


<?php
$con->close();
?>
