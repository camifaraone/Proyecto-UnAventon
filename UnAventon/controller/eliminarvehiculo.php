<?php

require_once "../model/eliminarvehiculo.php";

// consultar en la base si algun viaje tiene ese ID vehiculo asociado. si tiene, no se puede eliminar.


$idvehiculo= ($_GET["idvehiculo"]);
$id = get_id ($idvehiculo);
$idvehiculo= delVehiculo($_GET["idvehiculo"]);

header("Location: ../controller/perfil.php?idautoincremental=".$id);


?>