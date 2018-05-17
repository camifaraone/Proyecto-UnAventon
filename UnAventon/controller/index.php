<?php


require_once "../model/register.php";

require_once "../model/viajes.php";
$viaje = get_viajes();

include "../view/index.html";
	

?>