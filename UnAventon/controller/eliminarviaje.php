<?php

require_once "../model/eliminarviaje.php";


$idviaje= ($_GET["idviaje"]);
$id = get_id($idviaje);
$a = del_viaje($idviaje,$id);
// aca falta la consulta para saber si el viaje tiene o no usuarios postulados. SI tiene usuario, baja calificacion, sino la elimina sin problemas.
$calificacion = geteliminar($id);
$c = ($calificacion - 1);
$b = actualizar_calificacion($c,$id);





?>