<?php


require_once "../model/newtrip.php";

$id= ($_GET["idautoincremental"]);


$origen = get_origen();
$destino = get_destino();
$vehiculo = get_vehiculo($id);









include "../view/newtrip.html";
	

?>