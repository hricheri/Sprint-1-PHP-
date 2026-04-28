<?php

// Definición de variables

$entero = 10;
$decimal = 3.14;       
$texto = "Hola mundo";
$booleano = true;

// Impresion por pantalla

echo "Integer: " . $entero . "\n";
echo "Double: " . $decimal . "\n";
echo "String: " . $texto . "\n";
echo "Boolean: " . ($booleano ? "true" : "false") . "\n";

// Nombre como titulo

define("NOMBRE", "Wilo");
echo NOMBRE;

?>