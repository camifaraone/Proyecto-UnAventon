<?php

require_once "../model/aceptarpostulacion.php";

$id = ($_GET['idautoincremental']);
$idviaje = get_id2($id);
$a = aceptar($id);
$increment = incrementarpostulacion($idviaje);
$iduser = get_id($id);



// ALERTA QUE DIGA QUE SE ACEPTO LA POSTULACION CORRECTAMENTE 

header("Location: ../controller/verpostulantes.php?idviaje=".$idviaje."&idautoincremental=".$id);






?>