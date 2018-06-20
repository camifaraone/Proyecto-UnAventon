<?php


require_once "../model/viajeocasional.php";

$id= ($_GET["idautoincremental"]);


$origen = get_origen();
$destino = get_destino();
$vehiculo = get_vehiculo($id);



var_dump($_POST);


/*
if(isset($_POST["finishtrip"])){


if(!empty($_POST['fechaviaje']) && !empty($_POST['dias']) && !empty($_POST['preciototal']) && !empty($_POST['horasalida']) && !empty($_POST['observaciones'])) {
	
	
	$fechaviaje=$_POST['fechaviaje'];
	$dias=$_POST['dias'];
	$preciototal=$_POST['preciototal'];
	$horasalida=$_POST['horasalida'];
	$observaciones=$_POST['observaciones'];
	
	
	
	$viaje = newtrip($fechaviaje, $dias,$preciototal, $horasalida, $observaciones,$idorigen,$iddestino,$idvehiculo,$id);
	header("Location: ../controller/misviajes.php?idautoincremental=".$id);
	

} else {
	 $message = "Todos los campos no deben de estar vacios!";
}
}

*/


include "../view/viajeperiodico.html";
	

?>