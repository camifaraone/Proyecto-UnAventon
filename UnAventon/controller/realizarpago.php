<?php




require_once ("../model/realizarpago.php");



$id= ($_GET["idautoincremental"]);


$viaje = get_viaje($id);
$viajeid = get_idviaje($id);
$viajes = get_viajes ($id);
//var_dump($viajeid);







include "../view/realizarpago.html";
?>
