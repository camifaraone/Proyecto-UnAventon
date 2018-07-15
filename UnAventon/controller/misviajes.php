<?php




require_once ("../model/misviajes.php");



$id= ($_GET["idautoincremental"]);


$viaje = get_viaje($id);
$idviaje = get_idviaje($id);
$postulacion= get_estadopostulacion($idviaje);

$eliminar= geteliminar($id);

include "../view/misviajes.html";
	

?>
