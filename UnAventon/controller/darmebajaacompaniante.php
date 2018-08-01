<?php

require_once "../model/darmebajaacompaniante.php";

$id = ($_GET['idviaje']);
$idviaje = ($_GET['idautoincremental']);

var_dump($id);


$a = cancelar($id,$idviaje);
$b = get_calificacion ($id);
$d = ($b - 1);
$c = disminuir_calificacion ($d,$id);




// ALERTA QUE DIGA QUE SE CANCELO LA POSTULACION CORRECTAMENTE 

header("Location: ../controller/misviajes.php?idautoincremental=".$id);




?>