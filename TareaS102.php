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


//EJERCICIO 3
// a

$intX = 1;
$intY = 2;
$doubleN = 3.3;
$doubleM = 4.4;


// X e Y

// Valor de cada una
echo "X: " . $intX . "\n";
echo "Y: " . $intY . "\n";

// Suma
echo "Suma X + Y = " . ($intX + $intY) . "\n";

// Resta
echo "Resta X - Y = " . ($intX - $intY) . "\n";

// Multiplicacion
echo "Producto X * Y = " . ($intX * $intY) . "\n";

// Modulo
echo "Modulo X % Y = " . ($intX % $intY) . "\n";


// N y M

// Valor de cada una
echo "N: " . $doubleN . "\n";
echo "M: " . $doubleM . "\n";

// Suma
echo "Suma N + M = " . ($doubleN + $doubleM) . "\n";

// Resta
echo "Resta N - M = " . ($doubleN - $doubleM) . "\n";

// Multiplicacion
echo "Producto N * M = " . ($doubleN * $doubleM) . "\n";

// Modulo
echo "Modulo N % M = " . ($doubleN % $doubleM) . "\n";


// Y, X, N y M

// Doble
echo "Doble de X = " . ($intX * 2) . "\n";
echo "Doble de Y = " . ($intY * 2) . "\n";
echo "Doble de N = " . ($doubleN * 2) . "\n";
echo "Doble de M = " . ($doubleM * 2) . "\n";

// Suma
echo "Suma total = " . ($intX + $intY + $doubleN + $doubleM) . "\n";

// Multiplicacion
echo "Producto total = " . ($intX * $intY * $doubleN * $doubleM) . "\n";


// b

echo "Elije el primer numero";
$num1 = (int) fgets(STDIN);

echo "Elije el segundo numero: ";
$num2 = (int) fgets(STDIN);

echo "Dime la operacion:\n";
echo "1. suma\n";
echo "2. resta\n";
echo "3. multiplicacion\n";
echo "4. division\n";

$operacion = (int) fgets(STDIN);

// Lo que el usuario ingresó
echo "Num1: $num1\n";
echo "Num2: $num2\n";
echo "Operacion: $operacion\n";

// Funcion
function calcular($num1, $num2, $operacion) {
    
    switch ($operacion) {
        case 1:
            return $num1 + $num2;

        case 2:
            return $num1 - $num2;

        case 3:
            return $num1 * $num2;

        case 4:
            return $num1 / $num2;

        default:
            return "Operación no válida";
    }
}


//EJERCICIO 4

function contar($inicio = 1, $fin = 10, $paso = 1) {

    for ($i = $inicio; $i <= $fin; $i += $paso) {
        echo $i . "\n";
    }
} 

echo "Dime el numero de inicio: ";
$inicio = (int) fgets(STDIN);

echo "Dime hasta que numero quieres contar (ENTER para 10): ";
$inputFin = trim(fgets(STDIN));

// Si el usuario no escribe nada, se usa el default
$fin = ($inputFin === "") ? 10 : (int)$inputFin;

echo "De cuanto en cuanto quieres contar? (1, 2, 3...): ";
$paso = (int) fgets(STDIN);

// Llamada a la función
contar($inicio, $fin, $paso);


?>