<?php


require_once "../model/register.php";

require_once "../model/viajes.php";
$viaje = get_viajes();

require_once "../model/unuser.php";
if(isset($_GET["idincremental"]) ){

$user= get_user($_GET["idincremental"]);
var_dump($user);
}





include "../view/index.html";
	

?>