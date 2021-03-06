<?php include 'includes/header.php';

$productos = [
    [
        'Nombre' => 'Televisor',
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

foreach($productos as $producto){
    echo "<pre>";
    var_dump($producto);
    echo "</pre>";
}
echo "<br>";

foreach($productos as $producto){ ?>
    <li>
        <p>Producto: <?php echo $producto['Nombre']; ?></p>
        <p>Precio: <?php echo "$ " . $producto['Precio']; ?></p>
        <p><?php echo ($producto['Disponible']) ? 'Disponible' : 'No Disponible' ?></p>
    </li>
    <?php
}


include 'includes/footer.php';