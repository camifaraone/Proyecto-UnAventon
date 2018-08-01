<?php




require_once ("../model/verinfoacompaniante.php");

$id= ($_GET["idautoincremental"]);
$idviaje= ($_GET["idviaje"]);
$id_piloto = get_id_piloto($idviaje);

$user = get_datos($id);
$calif = get_calificacion($id,$id_piloto,$idviaje);


include "../view/verinfoacompaniante.html";
	

?>
