<?php

require_once ("../model/postularse.php");


$idviaje= ($_GET["idviaje"]);
$id = ($_GET["idautoincremental"]);


$postulados = nuevo_postulado($id,$idviaje);



include '../view/postularse.html';

?>