<?php

require_once "../model/verpostulantes.php";

$idviaje = ($_GET["idviaje"]);
$id = ($_GET["idautoincremental"]);
$users = get_postulantes($idviaje);

$asientos = get_asientos($idviaje);

include ("../view/verpostulantes.html");
?>