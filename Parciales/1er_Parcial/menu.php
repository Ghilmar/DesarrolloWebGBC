<?php
session_start();
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $_SESSION['a'] = $a;
    $_SESSION['b'] = $b; 
    $_SESSION['c'] = $c;

?>
    <h2>Seleccione una Operación</h2>
    <div class="principal">
        <form action="resultado.php" method="POST">
            <button class="sum" name="operacion" value="sumar">Sumar</button><br>
            <button class="rest" name="operacion" value="restar">Restar</button><br>
            <button class="multi" name="operacion" value="multiplicar">Multiplicar</button><br>
            <button class="div" name="operacion" value="dividir">Dividir</button><br>
        </form>
    </div>

<style>
        .principal{
            margin-top: 20px;
        }
        button{
            width: 150px;
            height: 50px;
            font-size: 18px;
            margin: 10px;
        }
        .sum{ 
            background-color:#C60000; 
            color: white; 
        }
        .rest{ 
            background-color:#FFC000; 
            color: black; 
        }
        .multi{ 
            background-color: #0070C0; 
            color: white; 
        }
        .div{ 
            background-color:#92D050; 
            color: white; 
        }
    </style>