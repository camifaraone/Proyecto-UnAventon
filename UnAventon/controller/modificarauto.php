<?php


require_once ("../model/modificarauto.php");



$id= ($_GET["idautoincremental"]);
$datosauto = get_vehiculo ($id);

if(isset($_POST["modif"])){


if(!empty($_POST['marca']) && !empty($_POST['modelo']) && !empty($_POST['color']) && !empty($_POST['detalles']) && !empty($_POST['cantasientosdisp']) && !empty($_POST['patente'])) {
	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
	$color=$_POST['color'];
	$detalles=$_POST['detalles'];
	$cantasientosdisp=$_POST['cantasientosdisp'];
	$patente=$_POST['patente'];
	
	
	
	
	$modi = modificar_vehiculo($marca,$modelo,$color,$detalles,$cantasientosdisp,$patente,$id);
	var_dump($modi);
	header("Location: ../controller/perfil.php?idautoincremental=".$id);


} else {
	 $message = "Todos los campos deben estar completos";
}
}




include "../view/modificarauto.html";
if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} 

?>	