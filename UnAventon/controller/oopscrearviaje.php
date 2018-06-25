<?php




require_once ("../model/oopscrearviaje.php");



$id= ($_GET["idautoincremental"]);


$viaje = oopsviaje($id);

include "../view/oopscrearviaje.html";
	

?>
