<?php

require_once ("../model/postularse.php");


$idviaje= ($_GET["idviaje"]);

$postulados = get_postulados($idviaje);
print_r($postulados);


include '../view/postularse.html';

?>