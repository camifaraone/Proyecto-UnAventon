<?php


require "../model/newtip.php";


if(isset($_POST["finishtrip"])){


if(!empty($_POST['tipo']) && !empty($_POST['fecha']) && !empty($_POST['monto']) && !empty($_POST['duracion']) && !empty($_POST['hssalida']) && !empty($_POST['distancia']) && !empty($_POST['ciudadOrigen'])  && !empty($_POST['ciudadDestino']) && !empty($_POST['observaciones'])&& !empty($_POST['nombre'])) {
	$tipo=$_POST['tipo'];
	$fecha=$_POST['fecha'];
	$monto=$_POST['monto'];
	$duracion=$_POST['duracion'];
	$hssalida=$_POST['hssalida'];
	$distancia=$_POST['distancia'];
	$ciudadOrigen=$_POST['ciudadOrigen'];
	$ciudadDestino=$_POST['ciudadDestino'];
	$observaciones=$_POST['observaciones'];
	$nombre=$_POST['¨nombre'];
	
	
	$valor = newtrip($tipo, $fecha, $monto, $duracion, $hssalida, $distancia, $ciudadOrigen, $ciudadDestino, $observaciones, $nombre);
	header("Location: ../controller/misviajes.php");


} else {
	 $message = "Todos los campos no deben de estar vacios!";
}
}





include "../view/newtrip.html";
	

?>