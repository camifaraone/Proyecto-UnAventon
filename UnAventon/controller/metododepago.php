
<?php

error_reporting(E_ALL ^ E_NOTICE); //no muestra el error

require_once ("../model/metododepago.php");



$id= ($_GET["idautoincremental"]);
$idviaje = ($_GET["idviaje"]);




//if(isset($_POST["pago"])){
	if(!empty($_POST['tipo']) && !empty($_POST['numtarjeta']) && !empty($_POST['mes'])  && !empty($_POST['nomape']) && !empty($_POST['codseguridad']) && !empty($_POST['documento'])) {
	
	$tipo=$_POST['tipo'];
	$numtarjeta=$_POST['numtarjeta'];
	$mes=$_POST['mes'];
	$nomape=$_POST['nomape'];
	$codseguridad=$_POST['codseguridad'];
	$documento = $_POST['documento'];
	
	
	if ($mes < 9 ){
		
		echo "<html><script> alert('Pago denegado!');</script></html>"; 
		echo "<html><script> document.location.href='../controller/metododepago.php?idautoincremental=".$id."&&idviaje=".$idviaje."';</script></html>";
	}
	else {
		$a = estadopago($idviaje);
		$b = dame_el_id($idviaje);
	
	echo "<html><script> alert('Pago realizado con éxito!');</script></html>"; 
	echo "<html><script> document.location.href='../controller/realizarpago.php?idautoincremental=".$b."';</script></html>";
	}
	}
	
	
	/*
	if ($mes < 9 && $anio < 18){
		echo "<html><script> alert('Pago denegado!');</script></html>"; 
		echo "<html><script> document.location.href='../controller/metododepago.php?idautoincremental=".$id."&&idviaje=".$idviaje."';</script></html>";
	}
	else {
		
		$a = estadopago($idviaje);
		echo "<html><script> alert('Pago realizado con éxito!');</script></html>"; 
		echo "<html><script> document.location.href='../controller/realizarpago.php?idautoincremental=".$id."';</script></html>";
	}

	}
	else{
		$message = "Todos los campos no deben de estar vacios!";
	}
*/


include "../view/metododepago.html";
if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";}


?>