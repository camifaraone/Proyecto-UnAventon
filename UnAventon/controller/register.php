
<?php require_once "../model/register.php";


$e = comprobar_usuario();	
	
	
	
/*
if(isset($_POST["register"])){


if(!empty($_POST['nombreusuario']) && !empty($_POST['contrasenia']) && !empty($_POST['confirmarcontrasenia']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['fechanacimiento'])) {
	$nombreusuario=$_POST['nombreusuario'];
	$email=$_POST['email'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$telefono=$_POST['telefono'];
	$fechanacimiento=$_POST['fechanacimiento'];
	$contrasenia=$_POST['contrasenia'];
	$confirmarcontrasenia=$_POST['confirmarcontrasenia'];
	
	
	
	$e = comprobar_usuario($email);
	var_dump($e);
	
	if ( $e = null ) {
	
	$valor = registrar_usuario($nombreusuario,$email,$nombre,$apellido,$telefono,$fechanacimiento,$contrasenia,$confirmarcontrasenia);
	header("Location: ../controller/login.php");
	} else
	{
		$message = "El email utilizado ya esta en uso!";
	}

} else {
	 $message = "Todos los campos deben estar completos";
}
}

*/
?>

<?php include ( "../view/register.html");?>
<?php if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} ?>
	
	
	
