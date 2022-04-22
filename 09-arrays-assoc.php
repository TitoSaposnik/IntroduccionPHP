<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Tito',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium',
        'estado' => true
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo "<br>";
echo $cliente['nombre'];
echo "<br>";
echo $cliente['informacion']['estado'];

$cliente ['id'] = 981287312; //Agrega un elemento.

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';