<?php


require_once "../model/register.php";
require_once ("../model/perfil.php");
require_once "../model/viajes.php";

$viaje = get_viajes();



 
    if(isset($_GET['idautoincremental'])) {

$id= ($_GET["idautoincremental"]);
$pago = get_pago($id);
$baja_logica = get_baja_logica ($id);



	}
	




include "../view/index.html";
	

?>