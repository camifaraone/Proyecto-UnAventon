<?php

require_once "../model/verviaje.php";


if(isset($_GET["idviaje"]) ){

$viaje= get_unviaje($_GET["idviaje"]);
}

include ("../view/verviaje.html");
?>