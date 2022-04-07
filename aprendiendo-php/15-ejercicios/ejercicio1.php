<?php

/*
 * Ejercicio 1. Hacer un programa en PHP que tenga un array con 88 números enterros y que haga lo siguiente:
 * - Recogerlo y mostrarlo
 * - Ordenarlo y mostrarlo
 * - Mostrar su logitud
 * - Buscar algún elemento (Buscar por el parámetro que me llegue por la url)
 */

// FUNCIONES
function mostrarArray($numeros){
    $resultado = "";

    foreach ($numeros as $numero){
        // $resultado = $resultado.$numero."<br/>;
        $resultado .= $numero."<br/>";
    }

    return $resultado;
}

// Crear el array
$numeros = array(11,44,55,77,23,9,97,67);

// Recorrer y mostrar
echo "<h1>Recorrer y mostrar</h1>";
echo mostrarArray($numeros);

foreach ($numeros as $numero) {
    echo $numero."<br/>";
}

// Ordenarlo y mostrarlo
echo "<h1>Ordenar y mostrar</h1>";

sort($numeros);
echo mostrarArray($numeros);

// Mostrar su longitud
echo "<h1>Número total de elementos</h1>";
echo count($numeros);

// Busqueda en el array
if(isset($_GET['numero'])){
    $busqueda = $_GET['numero'];

    echo "<h1>Buscar en el array el número $busqueda</h1>";

    $search = array_search($busqueda, $numeros);

    if(!empty($search)){
        echo "<h4>El número buscado existe en el array, en el indice: $search</h4>";
    } else {
        echo "No existe el número buscado";
    }
}































