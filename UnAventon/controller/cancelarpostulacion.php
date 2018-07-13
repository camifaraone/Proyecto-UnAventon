<?php

require_once "../model/cancelarpostulacion.php";

$id = ($_GET['idautoincremental']);

$a = cancelar($id);

$iduser = get_id($id);

$idviaje = get_id2($id);

// ALERTA QUE DIGA QUE SE CANCELO LA POSTULACION CORRECTAMENTE 

//header("Location: ../controller/verpostulantes.php?idviaje=".$idviaje."&idautoincremental=".$iduser);






?>