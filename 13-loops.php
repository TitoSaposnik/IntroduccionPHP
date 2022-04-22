<?php include 'includes/header.php';

//While
$numero = 0; //inicializador

while($numero <= 10){

    echo $numero . "<br>";

    $numero ++; //incremento
}
echo "<br>";

// Do While
$numero2 = 0;

do{
    echo $numero2 . "<br>";
    $numero2 ++;
}while($numero2 < 10);
echo "<br>";

// For 
for ($i = 0; $i < 10; $i ++){
    echo $i . "<br>";
}
echo "<br>";

// Ejercicio
/*
Del 1 al 1000 imprimir:
                        fizz si el numero es multiplo de 3
                        buzz si el numero es multiplo de 5
                        fizz - buzz si es multiplo de 3 y 5
*/
for ($i = 1; $i < 1000; $i++){
    if($i % 3 === 0 && $i % 5 === 0){
        echo $i . " >>> FIZZ-BUZZ <br>";
    } elseif($i % 3 === 0){
        echo $i . " >>> FIZZ <br>";
    } else if($i % 5 === 0){
        echo $i . " >>> BUZZ <br>";
    } else{
        echo $i . "<br>";
    }
}
echo "<br>";

//For
$clientes = ['Tito', 'Mari', 'Miguelito'];

foreach($clientes as $cliente):
    echo $cliente . "<br>";
endforeach;
echo "<br>";

$infoCliente = array(
    'Nombre' => 'Miguelito',
    'Edad' => 3,
    'Raza' => 'Gato Negro (Panterita)'
);

foreach($infoCliente as $key => $valor):
    echo $key . " = " . $valor . "<br>";
endforeach;

include 'includes/footer.php';