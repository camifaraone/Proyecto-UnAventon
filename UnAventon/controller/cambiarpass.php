<?php


include "../model/cambiarpass.php";


if(isset($_POST["restaurar"])){
if(!empty($_POST['email'])) {
	$logitud = 8;
$pass = substr( md5(microtime()), 1, $logitud);
	$email = ($_POST['email']);
	
	$a = restaurar_pass ($pass,$email);

echo "<html><script> alert('Se ha enviado un correo electrónico con su nueva contraseña. Contraseña: $pass');</script></html>"; 
echo "<html><script> document.location.href='../controller/login.php';</script></html>";
	

	// AQUI DEBE IR UN ALERT DICIENDO "SE HA ENVIADO LA NUEVA CONTRASEÑA : $PASS A SU MAIL. VERIFIQUE SU BANDEJA DE ENTRADA! "
	
} else {
     $message = "Algo salio mal, intentelo de nuevo";
}
}


if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";}



include "../view/cambiarpass.html";


?>