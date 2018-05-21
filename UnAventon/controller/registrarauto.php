 

	
<?php 
require_once "../model/registrarauto.php";
if(isset($_POST["register"])){


if(!empty($_POST['marca']) && !empty($_POST['color']) && !empty($_POST['detalles']) && !empty($_POST['cantasientosdisp']) && !empty($_POST['modelo']) && !empty($_POST['patente'])) {
	$marca=$_POST['marca'];
	$color=$_POST['color'];
	$detalles=$_POST['detalles'];
	$cantasientosdisp=$_POST['cantasientosdisp'];
	$modelo=$_POST['modelo'];
	$patente=$_POST['patente'];
	
	
	
	$v = registrar_vehiculo($marca,$color,$detalles,$cantasientosdisp,$modelo,$patente);			
	var_dump($v);
     header("Location: ../controller/perfil.php");



} else {
	 $message = "Todos los campos no deben de estar vacios!";
}
} 
?>
<?php include ( "../view/registrarauto.html");?>
<?php if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} ?>
	
	
	
