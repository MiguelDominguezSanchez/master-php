<?php

/*
 * // CONDICIONAL IF
 *
 * if(condicion) {
 *      instruciones
 * } else {
 *      otras instrucciones
 * }
 *
 *  // Operadores de comparación
 * == igual
 * === idéntico
 * != diferente
 * <> diferente
 * !== no identico
 * < menor que
 * > mayor que
 * <= menor o igual wue
 * >= mayor o igual que
 * */

$color = "verde";

if($color == "rojo") {
    echo "EL COLOR ES ROJO";
} else {
    echo "el color NO es rojo";
}

echo "<br>";

$year =  2019;
if($year >= 2019){
    echo "Estamos de 2019 en adelante";
} else {
    echo "Estamos en 2019";
}