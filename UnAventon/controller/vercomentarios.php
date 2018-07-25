<?php

require_once "../model/vercomentarios.php";

$idviaje = ($_GET["idviaje"]);
$id = ($_GET["idautoincremental"]);

$comentario = get_comentarios($idviaje);
$coments = get_coments($idviaje);


include ("../view/vercomentarios.html");
?>