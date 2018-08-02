<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once "../model/vercomentarios.php";

$idviaje = ($_GET["idviaje"]);
$id = ($_GET["idautoincremental"]);

$comentario = get_comentarios($idviaje,$id);



include ("../view/vercomentarios.html");
?>