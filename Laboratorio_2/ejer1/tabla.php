<link rel="stylesheet" href="style.css">
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $filas = intval($_POST['filas']);
        $columnas = intval($_POST['columnas']);
        if ($filas > 0 && $columnas > 0) {
            echo "<table border='1' cellpadding='10'>";
            for ($i = $filas; $i >= 1; $i--) {
                echo "<tr>";
                for ($j = $columnas; $j >= 1; $j--) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "<td class='rojo'>" . $i . "</td>";
                echo "</tr>";
            }
            echo "<tr>";
            for ($j = $columnas; $j >= 1; $j--) {
                echo "<td class='rojo'>" . $j . "</td>";
            }
            echo "<td class='rojo'></td>"; 
            echo "</tr>";

            echo "</table>";
        } else {
        }
    } else {
    }
?>
