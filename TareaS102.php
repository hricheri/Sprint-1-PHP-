<?php

//EJERCICIO 1
// Definición de variables

$entero = 10;
$decimal = 3.14;       
$string = "Texto";
$booleano = true;

// Impresion por pantalla

echo "Integer: " . $entero . "\n";
echo "Double: " . $decimal . "\n";
echo "String: " . $string . "\n";
echo "Boolean: " . ($booleano ? "true" : "false") . "\n";

// Nombre como titulo

define("NOMBRE", "Wilo");
echo NOMBRE;


//EJERCICIO 2
// Hello World

$texto = "Hello World";
echo $texto;

// Mayusculas
echo strtoupper($texto) . "\n";

// Longitud de la variable
echo strlen($texto) . "\n";

// Orden inverso
echo strrev($texto) . "\n";

// Nueva variable
$nuevaVariable = "Este es el curso de PHP";
echo $texto . " " . $nuevaVariable;

?>