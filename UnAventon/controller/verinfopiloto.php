<?php




require_once ("../model/verinfopiloto.php");

$id= ($_GET["idautoincremental"]);

$idviaje= ($_GET["idviaje"]);

$idpiloto = get_idpiloto ($idviaje);
$calif = get_calificacion($id,$idpiloto,$idviaje);
$user = get_datos($idviaje);



include "../view/verinfopiloto.html";
	

?>
