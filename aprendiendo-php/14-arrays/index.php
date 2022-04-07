<?php

/*
 * ARRAYS
 * Un array es una colección o conjunto de datos/valores, bajo un único nombre.
 * Para acceder a  esos valorres podemos usar un indice número o alfanúmerico.
 * */

$pelicula = "Batman";
$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$cantantes = ['2pac','Drake', 'Jennifer Lopez'];

// Array asociativo
$personas = array(
    'nombre' => 'Victor',
    'apellidos' => 'Robles',
    'web' => 'victorroblesweb.es'
);

var_dump($_GET);
echo $personas['apellidos'];

// Recorrer con FOR
echo "<h1>Listado de peliculas</h1>";

echo "<ul>";
for($i = 0; $i < count($peliculas); $i++){
    echo "<li>".$peliculas[$i]."</li>";
}
echo "</ul>";



// Recorrer con foreach
echo "<h1>Listado de cantantes</h1>";

echo "<ul>";
foreach($cantantes as $cantante){
    echo "<li>".$cantante."</li>";
}
echo "</ul>";