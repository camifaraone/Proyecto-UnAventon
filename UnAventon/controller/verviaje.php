<?php
error_reporting(E_ALL ^ E_NOTICE); //no muestra el error



require_once "../model/verviaje.php";

$idviaje = ($_GET["idviaje"]);
$viaje= get_unviaje($_GET["idviaje"]);

if( empty($_SESSION['session_username'])) {
$id = ($_GET["idautoincremental"]);


if ( $viaje["idautoincremental"]<>$id ) { 
$postulacion= get_estadopostulacion($idviaje);
}
}

include ("../view/verviaje.html");
?>