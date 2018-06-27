<?php

require_once ("../model/postularse.php");


$idviaje= ($_GET["idviaje"]);
$id = ($_GET["idautoincremental"]);
$estado = 1;

$postulados = nuevo_postulado($id,$idviaje,$estado);
//print_r($postulados);


include '../view/postularse.html';

?>