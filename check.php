<?php

include './sgrdd/encdec.php'; //inlcusión de libreria de encriptación y desencriptación

$seguridad=new Encriptar();

echo 'nombre: '.$_POST['usuario'];

$usuario=Encriptar::Codificar($_POST['usuario']);

echo "usuario: ".$usuario;
