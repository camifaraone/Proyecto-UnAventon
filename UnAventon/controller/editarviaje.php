<?php


require_once ("../model/editarviaje.php");




$id= ($_GET["idautoincremental"]);
$datosviaje = get_viaje ($id);

if(isset($_POST["modif"])){


if(!empty($_POST['fechaviaje']) && !empty($_POST['monto']) && !empty($_POST['duracion']) && !empty($_POST['hora']) && !empty($_POST['distancia']) && !empty($_POST['origen']) && !empty($_POST['destino']) && !empty($_POST['observaciones'])) {
	$fechaviaje=$_POST['fechaviaje'];
	$monto=$_POST['monto'];
	$duracion=$_POST['duracion'];
	$hora=$_POST['hora'];
	$distancia=$_POST['distancia'];
	$origen=$_POST['origen'];
	$destino=$_POST['destino'];
	$observaciones=$_POST['observaciones'];
	
	
	$modi = editarviaje($fechaviaje, $precio, $duracion, $hora, $distancia, $origen, $destino, $observaciones,$id);
	
	header("Location: ../controller/misviajes.php?idautoincremental=".$id);


} else {
	 $message = "Todos los campos deben estar completos";
}
}




include "../view/editarviaje.html";
if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} 

?>	