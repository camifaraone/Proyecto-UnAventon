<?php

require_once "../model/darmebajaacompaniante.php";

$id = ($_GET['idviaje']);
$idviaje = ($_GET['idautoincremental']);

$calificacion = 3;
$motivo = "se dio de baja la postulacion al viaje luego de haberse aceptado.";

$idpilotosistem = -1;
$calif = calificacion_negativa($calificacion,$id,$idpilotosistem,$idviaje,$motivo);

$a = cancelar($id,$idviaje);
$b = get_calificacion ($id);
$d = ($b - 1);
$c = disminuir_calificacion ($d,$id);




// ALERTA QUE DIGA QUE SE CANCELO LA POSTULACION CORRECTAMENTE 

header("Location: ../controller/misviajes.php?idautoincremental=".$id);




?>