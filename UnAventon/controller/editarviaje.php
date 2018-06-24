<?php


require_once ("../model/editarviaje.php");




$idviaje= ($_GET["idviaje"]);
$datosviaje = get_viaje ($idviaje);
$id = get_idviaje($idviaje);
$vehiculo = get_vehiculo($id);
$origen = get_origen();
$destino = get_destino();

var_dump($_POST);
if(isset($_POST["modif"])){


if(!empty($_POST['fechaviaje']) && !empty($_POST['monto']) && !empty($_POST['duracion']) && !empty($_POST['horasalida']) && !empty($_POST['distancia']) && !empty($_POST['origen']) && !empty($_POST['destino']) && !empty($_POST['observaciones'])) {
	$fechaviaje=$_POST['fechaviaje'];
	$monto=$_POST['monto'];
	$duracion=$_POST['duracion'];
	$horasalida=$_POST['horasalida'];
	$distancia=$_POST['distancia'];
	$origen=$_POST['origen'];
	$destino=$_POST['destino'];
	$observaciones=$_POST['observaciones'];
	$idvehiculo = $_POST['vehiculo'];
	
//	$modi = editarviaje($fechaviaje, $monto, $duracion, $horasalida, $distancia, $origen, $destino, $observaciones,$idvehiculo, $id, $idviaje);
	
//	header("Location: ../controller/misviajes.php?idautoincremental=".$id);


} else {
	 $message = "Todos los campos deben estar completos";
}
}




include "../view/editarviaje.html";
if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} 

?>	