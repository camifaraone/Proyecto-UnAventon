<?php

require_once "../model/verviaje.php";

$id = ($_GET["idautoincremental"]);
$viaje= get_unviaje($_GET["idviaje"]);
$idviaje = ($_GET["idviaje"]);

if ( $viaje["idautoincremental"]<>$id ) { 
$postulacion= get_estadopostulacion($idviaje);
}

include ("../view/verviaje.html");
?>