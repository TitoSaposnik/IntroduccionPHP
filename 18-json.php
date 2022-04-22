<?php include 'includes/header.php';

$productos = [
    [
        'Nombre' => 'Televisión',
        'Precio' => 200,
        'Disponible' => true
    ],
    [
        'Nombre' => 'Parlantes',
        'Precio' => 80,
        'Disponible' => true
    ],
    [
        'Nombre' => 'Monitor Curvo',
        'Precio' => 340,
        'Disponible' => false
    ],
    [
        'Nombre' => 'Celular',
        'Precio' => 290,
        'Disponible' => true
    ]
];
echo "<pre>";
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE); //toma un array y lo convierte en un string
$json_array = json_decode($json); // convierte de string a un array

var_dump($json);
var_dump($json_array);
echo "</pre>";




include 'includes/footer.php';