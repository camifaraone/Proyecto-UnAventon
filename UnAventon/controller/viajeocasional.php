<?php


require_once "../model/viajeocasional.php";

$id= ($_GET["idautoincremental"]);


$origen = get_origen();
$destino = get_destino();
$vehiculo = get_vehiculo($id);




 





if(!empty($_POST['fechaviaje']) && !empty($_POST['preciototal']) && !empty($_POST['duracion']) && !empty($_POST['horasalida']) && !empty($_POST['cantidadasientos']) && !empty($_POST['observaciones']) && !empty($_POST['origen']) && !empty($_POST['destino'])) {
	
	$fechaviaje=$_POST['fechaviaje'];
	$preciototal=$_POST['preciototal'];
	$duracion=$_POST['duracion'];
	$horasalida=$_POST['horasalida'];
	$cantasientos=$_POST['cantidadasientos'];
	$observaciones=$_POST['observaciones'];
	$idorigen = $_POST['origen'];
	$iddestino = $_POST['destino'];
	$idvehiculo = $_POST['vehiculo'];
	$estadopago = 0;
	

	$viaje = newtrip($fechaviaje, $preciototal, $duracion, $horasalida, $cantasientos, $observaciones,$idorigen,$iddestino,$idvehiculo,$id, $estadopago);
	var_dump($viaje);
	header("Location: ../controller/misviajes.php?idautoincremental=".$id);
	

} else {
	 $message = "Todos los campos no deben de estar vacios!";
}






include "../view/viajeocasional.html";
	

?>