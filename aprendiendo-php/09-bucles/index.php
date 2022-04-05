<?php

/* BUCLE WHILE
/* Estructura de control que itera o repita una serie de instruciones
 * tantas veces como sea necesario,
 * en base a una condición
 *
 * while(condicion){
 * bloque de instrucciones
 * otra instruccion
 * }
 *
 */

$numero = 0;

while($numero <= 100){
    echo $numero;

    if($numero != 100) {
        echo ", ";
    }

    $numero++;
}