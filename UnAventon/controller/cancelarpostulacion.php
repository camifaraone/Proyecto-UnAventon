<?php

require_once "../model/cancelarpostulacion.php";

$id = ($_GET['idautoincremental']);
$idviaje = ($_GET['idviaje']);
$a = cancelar($id,$idviaje);
$b = get_postulados ($idviaje);
$d = ($b - 1);
$c = disminuir_postulantes ($d,$idviaje);




// ALERTA QUE DIGA QUE SE CANCELO LA POSTULACION CORRECTAMENTE 

header("Location: ../controller/verpostulantes.php?idviaje=".$idviaje."&idautoincremental=".$id);




?>