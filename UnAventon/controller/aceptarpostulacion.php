<?php

require_once "../model/aceptarpostulacion.php";

$id = ($_GET['idautoincremental']);
$idviaje = ($_GET['idviaje']);
$a = aceptar($id,$idviaje);
$increment = incrementarpostulacion($idviaje);




// ALERTA QUE DIGA QUE SE ACEPTO LA POSTULACION CORRECTAMENTE 

header("Location: ../controller/verpostulantes.php?idviaje=".$idviaje."&idautoincremental=".$id);






?>