<?php

$nombre = "Victor Robles";
var_dump($nombre);

// Fecha
echo date('d-m-y');
echo "<br/>";
echo time();

// Matemáticas
echo "<br/>";
echo "Raíz cuadrada de 10: ".sqrt(10);

echo "<br/>";
echo "Numero aleatorio entre 10 y 40: ".rand(10, 40);

echo "<br/>";
echo "Numero pi".pi();

echo "<br/>";
echo "Redondear: ".round(7.89182, 1);

// Más funciones generales
echo "<br/>";
echo gettype($nombre);

// Detectar tipado
echo "<br/>";
if(is_string($nombre)){
    echo "Esa variable es un string";
}

echo "<br/>";
if(is_float($nombre)){
    echo "La variable nombre no es un número con decimales";
}

// Comprobar si existe una variable
echo "<br/>";
if(isset($nombre)){
    echo "La variable existe";
} else {
    echo "La variable no existe";
}

// limpiar espacios
echo "<br/>";
$frase = "      mi contenido    ";
 var_dump(trim($frase));

 // Eliminar varriable / indices
$year = 2020;
unset($year);

// Comprobar variable vacia
$texto = "   123   ";

if(empty($texto)){
    echo "La variable texto esta vacia";
} else {
    echo "La variable de texto TIENE CONTENIDO";
}
echo "<br/>";

// Contar caracteres de un string
$cadena = "12345";
echo string($cadena);

echo "<br/>";

// Encontrar caracter
$frase = "La vida es bella";
echo strpos($frase, "132313");
echo "<br/>";

// Reemplazar contenido de un string
$frase = str_replace("vida", "moto", $frase);
echo $frase;
echo "<br/>";

// MAYUSCULAS Y minusculas
echo strtolower($frase);
echo strtoupper($frase);
























