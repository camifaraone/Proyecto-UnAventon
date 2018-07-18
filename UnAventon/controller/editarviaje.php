<?php


require_once ("../model/editarviaje.php");




$id= ($_GET["idviaje"]);
$datosviaje = get_viaje ($id);
$iduser = get_id($id);
$origen = get_origen();
$destino = get_destino();
$vehiculo = get_vehiculo($iduser);


if(isset($_POST["modif"])){


if(!empty($_POST['fecha']) && !empty($_POST['monto']) && !empty($_POST['duracion']) && !empty($_POST['hssalida']) && !empty($_POST['observaciones'])) {
	$fecha=$_POST['fecha'];
	$monto=$_POST['monto'];
	$duracion=$_POST['duracion'];
	$hssalida=$_POST['hssalida'];
	$observaciones=$_POST['observaciones'];
	$origen = $_POST['origen'];
	$destino = $_POST['destino'];
	$vehiculo = $_POST['vehiculo'];
	

	$modi = editarviaje($fecha, $monto, $duracion, $hssalida, $observaciones, $origen, $destino, $vehiculo, $id);
	if ($modi != ''){
	echo "<html><script> alert('Datos cambiados!');</script></html>"; 
echo "<html><script> document.location.href='../controller/misviajes.php?idautoincremental=".$iduser."';</script></html>"; 
} 
else {
	echo "<html><script> alert('Completar datos');</script></html>"; 
}
}
}



include "../view/editarviaje.html";


?>	