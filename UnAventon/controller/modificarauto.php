<?php


//require_once ("../model/modificarauto.php");



$id= ($_GET["idautoincremental"]);






include "../view/modificarauto.html";
if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} 

?>	