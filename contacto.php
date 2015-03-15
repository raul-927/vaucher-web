<?php
//Importamos las variables del formulario
foreach($_POST as $k => $v) 
{
	if(isset(${$k})) unset(${$k});
	if(in_array($k, array('nameField','emailField','subjectField','messageField')))
	${$k} = @get_magic_quotes_gpc() ? $v : @addslashes($v);
}
//Preparamos el mensaje de contacto
$cabeceras = "From: $emailField\n" //La persona que envia el correo
 . "Reply-To: $emailField\n";
$asunto = $subjectField; //El asunto

$email_to = "info@vaucher.com.uy"; //cambiar por tu email
$contenido = "$nameField le ha enviado el siguiente mensaje desde la web:\n"
. "\n"
. "$messageField\n"
. "\n";
//Enviamos el mensaje y comprobamos el resultado
if(@mail($email_to, $asunto ,$contenido, $cabeceras )) 
{
	//Si el mensaje se envia muestra una confirmacion
	
	header("Location: mensajeEnviadoOk.php");

}
else
{
	//Si el mensaje no se envia muestra el mensaje de error
	header("Location: mensajeEnviadoNoOk.php");
}
?>