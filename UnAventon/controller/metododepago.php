<?php

error_reporting(E_ALL ^ E_NOTICE); //no muestra el error


require_once ("../model/metododepago.php");
include "../view/metododepago.html";


$id= ($_GET["idautoincremental"]);
$idviaje = ($_GET["idviaje"]);


// NO FUNCIONA CORRECTAMENTE

/*
//if(isset($_POST["pago"])){
	if(!empty($_POST['tipo']) && !empty($_POST['numtarjeta']) && !empty($_POST['mes']) && !empty($_POST['anio']) && !empty($_POST['nomape']) && !empty($_POST['codseguridad']) && !empty($_POST['documento'])) {
	
	$tipo=$_POST['tipo'];
	$numtarjeta=$_POST['numtarjeta'];
	$mes=$_POST['mes'];
	$anio=$_POST['anio'];
	$nomape=$_POST['nomape'];
	$codseguridad=$_POST['codseguridad'];
	$documento = $_POST['documento'];

*/
	
	$a = estadopago($idviaje);
	
	if($a == true){
	//$viaje = pago($tipo, $numtarjeta, $mes, $anio, $nomape,$codseguridad,$documento,$idviaje,$id);
	echo "<html><script> alert('Pago realizado con éxito!');</script></html>"; 
echo "<html><script> document.location.href='../controller/newtrip.php?idautoincremental=".$id."';</script></html>";  
 
    //header("Location: ../controller/perfil.php?idautoincremental=".$id);


} else {
	if ($mes < 9 && $anio < 18){
     echo "<html><script> alert('Pago denegado!');</script></html>"; 
echo "<html><script> document.location.href='../controller/metododepago.php?idautoincremental=".$id."';</script></html>";  
}

	}


//}





?>