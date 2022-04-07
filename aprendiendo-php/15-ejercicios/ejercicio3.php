<?php

/*
 * Ejercicio 3. Programa que compruebe que nua variable está vacia y  si esta vacía,
 * rellenarla con texto en minúsculas y mostrarlo en mayúsculas y negrita.
 */

$texto = "";

if(empty($texto)){
    $texto = "hola yo soy el relleno de la variable texto";
    $textoMAYUS = strtoupper($texto);

    echo "<strong>$textoMAYUS</strong>";
} else {
    echo "La variable tiene este contenido dentro: ".$texto;
}






























