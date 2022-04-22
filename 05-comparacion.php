<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br>";

var_dump($numero1 < $numero2);
echo "<br>";

var_dump($numero2 >= $numero3);
echo "<br>";

var_dump($numero3 == $numero4);
echo "<br>";

var_dump($numero3 === $numero4); //Estrictamente igual, hasta el tipo de dato.
echo "<br>";

// -1 si el de la izquierda es menor.
var_dump($numero1 <=> $numero2);// si el de la izquierda es menor que el de la derecha el resultado es -1, si son iguales es 0 y si el de la izquierda es mayor dara 1 positivo.
echo "<br>";

// 0 si son iguales.
var_dump($numero3 <=> $numero2);
echo "<br>";

// 1 si el de la izquierda es mayor.
var_dump($numero2 <=> $numero1);
echo "<br>";
include 'includes/footer.php';