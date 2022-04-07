<?php

/*
 * Crear un array con el contanido de la tabla:
 * ACCIÓN   AVENTURA    DEPORTES
 * OTA      ASSASINS    FIFA 19
 * COD      CRASH       PES 19
 * PUGB     Prince of   MOTO GP 19
 *          Persia
 *
 * Cada fila debe ir en fichero separado(includes).
 */

$tabla = array(
    "ACCION" => array("GTA 5", "Call of Duty", "PUGB"),
    "AVENTURA" => array("Assasins Creed", "crash Bandicoot", "Prince of Persia"),
    "DEPORTES" => array("Fifa 19", "PES 19", "Moto G 19")
);

$categorias = array_keys($tabla);
?>

<table border="1">
    <?php require_once 'ejercicio5/encabezados.php' ?>
    <?php require_once 'ejercicio5/primera.php' ?>
    <?php require_once 'ejercicio5/segunda.php' ?>
    <?php require_once 'ejercicio5/tercera.php' ?>


</table>