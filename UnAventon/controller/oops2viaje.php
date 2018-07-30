<?php




require_once ("../model/oops2crearviaje.php");



$id= ($_GET["idautoincremental"]);


$viaje = oops2viaje($id);

include "../view/oops2crearviaje.html";
	

?>
