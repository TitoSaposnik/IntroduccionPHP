<?php 
declare(strict_types=1);
include 'includes/header.php';

function validarUsuario(bool $autenticado) : ?string{
    if($autenticado){
        return "El usuario es Valido";
    }else{
        return "Usuario Invalido";
    }
}

$usuario = validarUsuario(false);
echo ($usuario);


include 'includes/footer.php';