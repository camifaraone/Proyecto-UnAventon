<?php

require_once "../model/eliminarpostulacion.php";

$id = ($_GET['idautoincremental']);
$idviaje = ($_GET['idviaje']);

$calificacion = 3;
$motivo = "se rechazo a un postulante luego de haberlo aceptado.";
$idpilotosistem = -1;
$calif = calificacion_negativa($calificacion,$id,$idpilotosistem,$idviaje,$motivo);


$a = cancelar($id,$idviaje);
$b = get_postulados ($idviaje);
$d = ($b - 1);
$c = disminuir_postulantes ($d,$idviaje);

$x = get_id_piloto($idviaje);

$z = get_calificacion_piloto($x);

$dis = ($z - 1);
$bajarcalificacion = bajar_calificacion($dis,$x);


// ALERTA QUE DIGA QUE SE CANCELO LA POSTULACION CORRECTAMENTE 

header("Location: ../controller/verpostulantes.php?idviaje=".$idviaje."&idautoincremental=".$id);




?>