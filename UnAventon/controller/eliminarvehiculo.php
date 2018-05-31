<?php

require_once "../model/eliminarvehiculo.php";




$idvehiculo= ($_GET["idvehiculo"]);
$id = get_id ($idvehiculo);
$idvehiculo= delVehiculo($_GET["idvehiculo"]);

header("Location: ../controller/perfil.php?idautoincremental=".$id);


?>