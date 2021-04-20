<?php
$nombre_usuario=$_POST['nombre'];
$email_usuario=$_POST['email'];
$consulta_usuaro=$_POST['mensaje'];
//creamos 3 variables que toman valores del formulario del html.

$destino="carlosdavid.cd23@gmail.com";
$asunto="Consulta enviada desde www.CarlosPedraza.com";

$mensaje="Nombre: ".$nombre_usuario."\r\n";
$mensaje.="Email: ".$email_usuario."\r\n";
$mensaje.="Consulta: ".$consulta_usuaro."\r\n";

$remitente="From: taltal@onlyif.com";

mail($destino, $asunto, $mensaje, $remitente);

header("Location:index.php?i=ok");
 ?>
