<?php

/*
 * Ejercicio 5. Hacer un progrrama que muestre todos los números entre dos números
 * que nos lleguen por la URL($_GET)
 */

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if($numero1 < $numero2) {
        for($i = $numero1; $i <= $numero2; $i++) {
            echo "<h4>$i</h4>";
        }
    } else {
        echo "<h1>El número 1 deb ser menor al número 2</h1>";
    }


} else {
    echo "<h1>Los parámetros get no existen</h1>";
}

