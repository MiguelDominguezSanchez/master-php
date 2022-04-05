<?php

/*
 * Ejercicio 3. Escribir un programa que imprima por pantalla los cuadrados
 * (un número multiplicado por sí mismo) de los 40 primeros números naturales.
 * PD: Utilizar bucle while.
 * */

/*
$contador = 0;
    while($contador <= 40){
        $cuadrado = $contador*$contador;
        echo "<h3>El cuadrado de $contador es $cuadrado</h3>";

        $contador++;
    }
*/
for($contador = 0; $contador <= 40; $contador++){
    $cuadrado = $contador*$contador;
    echo "<h3>El cuadrado de $contador es $cuadrado</h3>";
}