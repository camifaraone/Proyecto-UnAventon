<?php

require_once "../model/vercomentarios.php";

$idviaje = ($_GET["idviaje"]);
$id = ($_GET["idautoincremental"]);

$comentario = get_comentarios($idviaje);
var_dump($comentario);


include ("../view/vercomentarios.html");
?>