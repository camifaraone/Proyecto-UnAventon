<?php

error_reporting(E_ALL ^ E_NOTICE);


require_once ("../model/misviajes.php");



$id= ($_GET["idautoincremental"]);


$viaje = get_viaje($id);
$idviaje = get_idviaje($id);
$postulacion= get_estadopostulacion($idviaje);
$eliminar= geteliminar($id);


$viajespost = get_viajespost($id);


$pre=pregresp($id);
	
include "../view/misviajes.html";
?>
