<?php include 'includes/header.php';

$cliente = [];
$cliente2 = array();
$cliente3 = array('Tito', 'Martin', 'Saposnik');
$cliente4 = [
    'nombre' => 'Mari',
    'saldo' => 300
];

//Empty = Revisa si un arreglo esta vacio.
var_dump(empty($cliente));
var_dump(empty($cliente2));
var_dump(empty($cliente3));
echo "<br>";

//Isset = Revisa  si un arreglo esta creado o una propiedad esta definida.
var_dump(isset($cliente5));
var_dump(isset($cliente4['nombre']));


include 'includes/footer.php';