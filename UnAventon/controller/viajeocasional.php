<?php


require_once "../model/viajeocasional.php";

$id= ($_GET["idautoincremental"]);


$origen = get_origen();
$destino = get_destino();
$vehiculo = get_vehiculo($id);


var_dump($_POST);




if(isset($_POST["finishtrip"])){


if(!empty($_POST['fechaviaje']) && !empty($_POST['preciototal']) && !empty($_POST['duracion']) && !empty($_POST['horasalida']) && !empty($_POST['cantasientos']) && !empty($_POST['observaciones'])) {
	
	$fechaviaje=$_POST['fechaviaje'];
	$preciototal=$_POST['preciototal'];
	$duracion=$_POST['duracion'];
	$horasalida=$_POST['horasalida'];
	$cantasientos=$_POST['cantasientos'];
	$observaciones=$_POST['observaciones'];
	
	$O= ($_POST["origen"]);
	$D= ($_POST["destino"]);
	$V= ($_POST["vehiculo"]);
	$idorigen = get_idOrigen($O);
	$iddestino = get_idDestino($D);
	$idvehiculo = get_idVehiculo($V);
	
	$viaje = newtrip($fechaviaje, $preciototal, $duracion, $horasalida, $cantasientos, $observaciones,$idorigen,$iddestino,$idvehiculo,$id);
	header("Location: ../controller/misviajes.php?idautoincremental=".$id);
	

} else {
	 $message = "Todos los campos no deben de estar vacios!";
}
}





include "../view/viajeocasional.html";
	

?>