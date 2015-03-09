<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');

$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$correo= $_POST['correo'];
$comentarios= $_POST['comentario'];
$fecha = date("d/m/Y H:i:s");

$frase ="Nombre: ".$nombre."\n";
$frase.="Apellido: ".$apellido."\n";
$frase.="Correo: ".$correo."\n";
$frase.= "Comentarios: ".$comentarios."\n";
$frase.= $fecha."\n\n";

$archivo="clientes.txt";
$modo = "a+";
$fh=fopen($archivo,$modo);
fwrite($fh,$frase);

fclose($fh);

//redirigimos a archivo formulario

header("location:../contacto.php");
?>
