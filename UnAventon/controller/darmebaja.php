<?php

require_once "../model/darmebaja.php";

$id = ($_GET['idviaje']);
$idviaje = ($_GET['idautoincremental']);


$a = cancelar($id,$idviaje);





// ALERTA QUE DIGA QUE SE CANCELO LA POSTULACION CORRECTAMENTE 

header("Location: ../controller/misviajes.php?idautoincremental=".$id);




?>