<?php




require_once ("../model/misviajes.php");



$id= ($_GET["idautoincremental"]);


$viaje = get_viaje($id);
$postulacion= get_estadopostulacion($id);

include "../view/misviajes.html";
	

?>
