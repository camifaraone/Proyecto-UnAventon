<?php




require_once ("../model/verinfopiloto.php");

$id= ($_GET["idautoincremental"]);

$idviaje= ($_GET["idviaje"]);

$user = get_datos($idviaje);

include "../view/verinfopiloto.html";
	

?>
