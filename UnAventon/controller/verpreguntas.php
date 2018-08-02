<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once "../model/verpreguntas.php";

$idviaje = ($_GET["idviaje"]);
$id = ($_GET["idautoincremental"]);

$mid = get_mi_idviaje ($id);

$preguntas = get_preguntas($idviaje);


include ("../view/verpreguntas.html");
?>