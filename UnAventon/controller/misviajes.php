<?php




require_once ("../model/misviajes.php");



$id= ($_GET["idautoincremental"]);


$viaje = get_viaje($id);

var_dump($viaje);
include "../view/misviajes.html";
	

?>
