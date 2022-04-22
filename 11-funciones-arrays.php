<?php include 'includes/header.php';

//Buscar elementos en un arreglo.
$carrito = ['Televicion', 'Parlantes', 'Sillon'];
var_dump(in_array('Parlantes', $carrito));
var_dump(in_array('Audifonos', $carrito));

//Ordenar elementos de un arreglo.
$numeros = [8,2,86,21,1,98,432,45];
sort($numeros); // de menor a mayor
rsort($numeros);// de mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

//Ordenar arreglo asociativo.
$cliente = array (
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => "Tito"
);

asort($cliente); //Ordena por valores (Orden alfabetico)
arsort($cliente); //Ordena por valores pero a la inversa. (Z - A)
ksort($cliente); //Ordena por llaves (Orden alfabetico)
krsort($cliente); //Ordena por llaver pero a la inversa. (Z - A)

echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';