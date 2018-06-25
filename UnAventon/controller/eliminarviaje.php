<?php

require_once "../model/eliminarviaje.php";

// consultar en la base si algun viaje tiene ese ID vehiculo asociado. si tiene, no se puede eliminar.


$idviaje= ($_GET["idviaje"]);
$delviaje = del_viaje ($idviaje);
$id = get_id($idviaje);
header("Location: ../controller/misviajes.php?idautoincremental=".$id);
/*
var_dump($a);
if($a[0] == null){
	echo 'El vehiculo se encuentra asociado a un viaje. No se puede eliminar!';

}
else {
	echo 'wrwr';
//	$idvehiculo= delVehiculo($_GET["idvehiculo"]);
//	header("Location: ../controller/perfil.php?idautoincremental=".$id);
}*/
?>