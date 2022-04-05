<?php

/*
 * Variables locales: Son las que se definen dentro de una función y no pueden ser
 * usadas fuera de la función, solo estan disponibles dentro. A no ser que hagamos
 * un return.
 *
 * Variables globales: Son las que se declaran fuera de una función y estan disponibles
 * dentro y fuera de las funciones.
 * */

$frase = "Ni los genios son tan genios, ni los mediocrers tan mediocres";

echo $frase;

function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";

    $year = 2019;
    echo "<h1>$year</h1>";

    return $year;
}

echo holaMundo();