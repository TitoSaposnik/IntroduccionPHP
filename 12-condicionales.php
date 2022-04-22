<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado & $admin){
    echo "Usuario Autenticado Correctamente";
}else{
    echo "Usuario NO Autenticado";
}
echo "<br>";

//If anidados
$cliente = array(
    'nombre' => 'Tito',
    'edad' => 30,
    'vivo' => false,
    'detalles' => [
        'feliz' => false,
        'mascota' => 'miguelito'
    ]
);

if(empty($cliente)){
    echo "Arreglo Vacio";
}else{
    echo "Arreglo Completo";
    if($cliente['edad'] >= 30){
        echo "El cliente esta viejito";
    }else{
        echo " El cliente es un jovenzuelo";
    }
}
echo "<br>";

//if else if
if($cliente['vivo'] == true){
    echo "el cliente esta Vivo";
} else if ($cliente ['detalles']['feliz'] == true){
    echo "el cliente es feliz";
}else{
    echo 'Todo bien en casa?';
}
echo "<br>";

//Switch

$lenguajeProgramacion = 'html';

switch($lenguajeProgramacion){
    case 'php':
        echo 'Un excelente lenguaje, medio viejito pero bueno';
        break;
    case 'javascript':
        echo 'Genial, el lenguaje de la web';
        break;
    case 'html':
        echo 'Emmm, bien por ti, pero ese no es un lenguaje de programacion';
        break;
    default:
        echo 'No tengo idea de que lenguaje es';
}


include 'includes/footer.php';