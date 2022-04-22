<?php include 'includes/header.php';

$carrito = ['Tablet', 'Monitor', 'Teclado', 'Tv'];

echo "<pre>"; //le da un mejor formato al array para poder consultarlo.
var_dump($carrito[2]);
echo "</pre>";

//Acceder a un elemento del array.
echo $carrito[2];
echo "<br>";

//Agregar un elemento al array, conociendo su extencion.
$carrito[4] = 'Parlantes';
var_dump($carrito);

//Agrega un elemento nuevo al final del arreglo.
array_push($carrito, 'Audifonos');

//Agrega un elemento al inicio del array.
array_unshift($carrito, 'Smartwatch');

echo "<pre>";
var_dump($carrito);
echo "</pre>";

//Otra manera de declarar un array

$productos = array('Producto1', 'Producto2', 'Producto3');
echo "<pre>";
var_dump($productos);
echo "</pre>";
include 'includes/footer.php';