<?php


include "../model/cambiarpass.php";


if(isset($_POST["restaurar"])){
if(!empty($_POST['email'])) {
	$email = ($_POST['email']);
	$pass = "admin123";
	$a = restaurar_pass ($pass,$email);

	header("Location: ../controller/login.php");

	// AQUI DEBE IR UN ALERT DICIENDO "SE HA ENVIADO LA NUEVA CONTRASEÑA : $PASS A SU MAIL. VERIFIQUE SU BANDEJA DE ENTRADA! "
	
} else {
     $message = "Algo salio mal, intentelo de nuevo";
}
}


if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";}



include "../view/cambiarpass.html";


?>