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

echo "<hr/>";

// Ejemplo

if(isset($_GET['numero'])){
    // Cambiar tipo de datos
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del numero $numero</h1>";

$contador = 0;
while($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    $contador++;
}





























