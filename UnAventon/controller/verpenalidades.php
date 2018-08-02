<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once "../model/verpenalidades.php";


$id = ($_GET["idautoincremental"]);

$comentariopiloto = get_comentariopiloto($id);

$comentarioacompaniante = get_comentarioacomp ($id);


include ("../view/verpenalidades.html");
?>