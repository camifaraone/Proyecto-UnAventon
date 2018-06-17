<?php


require_once "../model/viajeocasional.php";

$id= ($_GET["idautoincremental"]);


$origen = get_origen();
$destino = get_destino();
$vehiculo = get_vehiculo($id);





var_dump($_POST);

if(isset($_POST["finishtrip"])){


if(!empty($_POST['fechaviaje']) && !empty($_POST['preciototal']) && !empty($_POST['duracion']) && !empty($_POST['horasalida']) && !empty($_POST['cantidadasientos']) && !empty($_POST['observaciones']) && !empty($_POST['idOrigen']) && !empty($_POST['idDestino']) && !empty($_POST['idvehiculo'])) {
	
	$fechaviaje=$_POST['fechaviaje'];
	$preciototal=$_POST['preciototal'];
	$duracion=$_POST['duracion'];
	$horasalida=$_POST['horasalida'];
	$cantasientos=$_POST['cantidadasientos'];
	$observaciones=$_POST['observaciones'];
	$idorigen = $_POST['idOrigen'];
	$iddestino = $_POST['idDestino'];
	$idvehiculo = $_POST['idvehiculo'];
	$estadopago = 0;
	
	
	$viaje = newtrip($fechaviaje, $preciototal, $duracion, $horasalida, $cantasientos, $observaciones,$idorigen,$iddestino,$idvehiculo,$id, $estadopago);
	var_dump($viaje);
	header("Location: ../controller/misviajes.php?idautoincremental=".$id);
	

} else {
	 $message = "Todos los campos no deben de estar vacios!";
}
}





include "../view/viajeocasional.html";
	

?>