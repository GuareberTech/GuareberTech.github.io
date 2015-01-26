<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'orlan2893@gmail.com';
$titulo = 'Informacion';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n Apellido: $apellido\n E-Mail: $email\n Mensaje: $mensaje\n";
  
if ($_POST['submit']) 
	{
		if (mail($para, $titulo, $msjCorreo, $header)) 
		{
		echo "<script language='javascript'>
		alert('Mensaje enviado, muchas gracias.');
		document.location.href='contactar.php';</script>";
		} 
		else 
		{
		echo 'Falló el envio';
		}
}
?>
