<?php


require_once "../model/register.php";

require_once "../model/viajes.php";
$viaje = get_viajes();


 
    if(!isset($_SESSION['session_username'])) {

$id= ($_GET["idautoincremental"]);

	}




include "../view/index.html";
	

?>