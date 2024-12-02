<?php
$con = new mysqli("localhost", "root", "", "bd_alumnos");

if ($con->connect_error) {
    die("Conexión fallida: " . $con->connect_error);
}

// Contar varones
$sql_varones = "SELECT COUNT(*) as total_varones FROM alumnos WHERE sexo = 'M'";
$resultado_varones = $con->query($sql_varones);
$varones = $resultado_varones->fetch_assoc()['total_varones'];

// Contar mujeres
$sql_mujeres = "SELECT COUNT(*) as total_mujeres FROM alumnos WHERE sexo = 'F'";
$resultado_mujeres = $con->query($sql_mujeres);
$mujeres = $resultado_mujeres->fetch_assoc()['total_mujeres'];

?>
<table>
    <tr>
        <th>Total Varones</th> 
        <th><img src="./uploads/varones.png" width="50"></th>
        <th><?php echo $varones; ?></th>
    </tr>
    <tr>
        <th>Total Mujeres</th>
        <th><img src="./uploads/mujeres.png" width="50"></th>
        <th> <?php echo $mujeres; ?></th>

    </tr>  
                <a href="Fdatos4.php">Inicio</a>  <br>
                <a href="consulta_sexo.php">Motrar por generos</a>
                
</table>
<?php
$con->close();
?>

<style>
    * {
    box-sizing: border-box;
    font-family: Arial, sans-serif;
    }
    table{
        width: 50%;
        border-collapse: collapse;
        border: 1px solid;
    }
    th, td {
    border: 1px solid;
    padding: 8px;
    }

</style>