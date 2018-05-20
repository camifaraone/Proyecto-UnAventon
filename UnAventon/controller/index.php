<?php


require_once "../model/register.php";

require_once "../model/viajes.php";
$viaje = get_viajes();


require_once "../model/get_id2.php";
$id= ($_GET["idautoincremental"]);
var_dump($id);





include "../view/index.html";
	

?>