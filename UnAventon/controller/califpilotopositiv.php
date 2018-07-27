<?php

require_once "../model/califpilotopositiv.php";


$id= ($_GET["idautoincremental"]);
// aca falta la consulta para saber si el viaje tiene o no usuarios postulados. SI tiene usuario, baja calificacion, sino la elimina sin problemas.
$calificacion = getcalifacomp($id);
$c = ($calificacion + 1);
$b = actualizar_calificacion($c,$id);



echo "<html><script> alert('Votación realizada!');</script></html>"; 


echo"<td><a href=../controller/verpostulantes.php?idviaje=".$viaje[$i]["idviaje"]."&idautoincremental=".$id.">Ver postulantes </a></td>";


?>