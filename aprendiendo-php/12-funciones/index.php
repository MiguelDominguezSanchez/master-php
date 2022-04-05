<?php

/*
 * FUNCIONES:
 * Una función es un conjunto de instrucciones agrrupadas bajo un nombrre concreto
 * y que pueden ereutilizarse solamente invocando a la función ttants vveces como
 * queramos.
 *
 * functon nombreDeMiFuncion(){
 *  // BLOQUE / CONJUNTOS DE INSTRUCCIONES
 * }
 *
 * nombreDeMiFuncion($mi_parametro);
 * nombreDeMiFuncion($mi_parametro);
 */

// Ejemplo 1
function muestraNombres(){
    echo "Victor Robles <br/>";
    echo "Antonio Robles <br/>";
    echo "Miguel Robles <br/>";
    echo "Jesus Robles <br/>";
    echo "<hr/>";
}

// Invocar funcion
/*
muestraNombres();
muestraNombres();
muestraNombres();
*/

// Ejemplo 2
function tabla($numero) {
    echo "<h3>Tabla de multiplicar del numero: $numero</h3>";
    for($i = 1; $i <= 10; $i++){
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br/>";
    }
}

/*
if(isset($_GET['numero'])){
    tabla(2);
    tabla(9);
} else {
    echo "No hay número para sacar la tabla";
}
*/

/*
for($i = 0; $i <= 10; $i++) {
    tabla($i);
}
*/
// Ejemplo 3

function calculadora($numero1, $numero2, $negrita = false){

    // Conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    $cadena_texto = "";

    if($negrita) {
        $cadena_texto .= "<h1>";
    }

    $cadena_texto .= "Suma: $suma <br/>";
    $cadena_texto .= "Resta: $resta <br/>";
    $cadena_texto .= "Multiplicación: $multi <br/>";
    $cadena_texto .= "Division: $division<br/>";

    if($negrita) {
        $cadena_texto .= "</h1>";
    }

    $cadena__texto .="<hr/>";

    var_dump($cadena_texto);

    return $cadena_texto;

}

calculadora(10, 20, true);

function devuelveElNombre($nombre){
    return "El nombre es: $nombre";
}

echo devuelveElNombre("Victor Robles");



























