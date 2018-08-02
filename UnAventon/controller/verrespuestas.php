<?php
error_reporting(E_ALL ^ E_NOTICE);
require "../model/verrespuesta.php";

$idviaje = ($_GET["idviaje"]);
$id = ($_GET["idautoincremental"]);
$idpregunta = ($_GET["idpregunta"]);


$perfil = get_perfil ($idviaje);
$mirespuesta = get_mirespuesta($idpregunta);

include ("../view/verrespuestas.html");
?>