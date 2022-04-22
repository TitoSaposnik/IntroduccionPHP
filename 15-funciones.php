<?php 
declare(strict_types=1);
include 'includes/header.php';


function sumar(int $n1 = 0, int $n2 = 0){
    echo $n1 + $n2;
}
sumar(2,3);
echo "<br>";
sumar(2);
echo "<br>";
sumar(2, 4);
echo "<br>";
sumar(n2: 32, n1: 12); //Parametro nombrados

include 'includes/footer.php';