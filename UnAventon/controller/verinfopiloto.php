<?php




require_once ("../model/verinfopiloto.php");

$id= ($_GET["idautoincremental"]);

$idviaje= ($_GET["idviaje"]);

$user = get_datos($idviaje);
$calif = get_calificacion($id);


include "../view/verinfopiloto.html";
	

?>
