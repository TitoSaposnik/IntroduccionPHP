<?php include 'includes/header.php';

//Muestra la extension de un string (incluido los espacios en blanco)
$nombre = 'Roberto Martin Saposnik';
echo strlen($nombre);
echo "<br>";

//Eliminar los espacios en blanco
$nombreConEspacios = '      Tito      Saposnik         <3';
$texto = trim($nombreConEspacios);
echo $texto;
echo strlen($texto);
echo "<br>";

//Convertir a mayusculas.
echo strtoupper($nombre);
echo "<br>";

//Convertir a minusculas.
$mail1 = "CORREO@CORREO.COM";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo "<br>";

//Remplazar un string
echo str_replace("Roberto", "Titomania", $nombre);
echo "<br>";

//Revisar si un string existe o no.
echo strpos($nombreConEspacios, 'Tito');
echo "<br>";

//Concatenar un string.
$tipoCliente = 'Premiun';
echo "El cliente " . $nombre . " es " . $tipoCliente;
echo "<br>";
echo "El cliente {$nombre} es {$tipoCliente}."; //Este modo solo funciona con llaves dobles, no con las sencillas '' .





include 'includes/footer.php';