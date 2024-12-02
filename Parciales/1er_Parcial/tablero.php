<?php
$numfilas = $_GET['numfilas'];
$numcolumnas = $_GET['numcolumnas'];
$fila_bowser = $_GET['fila'];
$columna_bowser = $_GET['columna'];
$color = $_GET['color'];

echo "<table border='1'>";
for ($fila = 1; $fila <= $numfilas; $fila++) {
    echo "<tr>";
    for ($columna = 1; $columna <= $numcolumnas; $columna++) {
        if ($fila == $fila_bowser && $columna == $columna_bowser) {
            echo "<td style='background-color: #FFC000;'>
                        <img src='img/bowser.png' style='width:50px;height:50px;'>
                      </td>";
        } else {
            $background = (($fila + $columna) % 2 == 0) ? '#FFFFFF' : $color;
            echo "<td style='background-color: $background;'></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>
<style>
    table {
        border-collapse: collapse;
        margin: 20px;
    }

    td {
        width: 150px;
        height: 75px;
        text-align: center;
    }
</style>