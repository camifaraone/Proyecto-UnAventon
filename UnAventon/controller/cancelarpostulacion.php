<?php

require_once "../model/cancelarpostulacion.php";

$id = ($_GET['idautoincremental']);
$idviaje = ($_GET['idviaje']);
$a = cancelar($id,$idviaje);




// ALERTA QUE DIGA QUE SE CANCELO LA POSTULACION CORRECTAMENTE 

header("Location: ../controller/verpostulantes.php?idviaje=".$idviaje."&idautoincremental=".$id);




?>