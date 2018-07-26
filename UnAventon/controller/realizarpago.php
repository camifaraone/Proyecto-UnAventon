<?php




require_once ("../model/realizarpago.php");



$id= ($_GET["idautoincremental"]);


$viaje = get_viaje($id);
$viajeid = get_idviaje($id);

var_dump($viaje);
//var_dump($viajeid);



if(isset($_POST["pago"])){
	if(!empty($_POST['tipo']) && !empty($_POST['numtarjeta']) && !empty($_POST['mes']) && !empty($_POST['anio']) && !empty($_POST['nomape']) && !empty($_POST['codseguridad']) && !empty($_POST['documento'])) {
	
	$tipo=$_POST['tipo'];
	$numtarjeta=$_POST['numtarjeta'];
	$mes=$_POST['mes'];
	$anio=$_POST['anio'];
	$nomape=$_POST['nomape'];
	$codseguridad=$_POST['codseguridad'];
	$documento = $_POST['documento'];
	$idviaje = $_POST['viaje'];
	

	$viaje = pago($tipo, $numtarjeta, $mes, $anio, $nomape,$codseguridad,$documento,$idviaje,$id);
	echo "<html><script> alert('Pago realizado con éxito!');</script></html>"; 
echo "<html><script> document.location.href='../controller/index.php?idautoincremental=".$id."';</script></html>";  
 
    //header("Location: ../controller/perfil.php?idautoincremental=".$id);


} else {
     echo "<html><script> alert('Pago denegado!');</script></html>"; 
echo "<html><script> document.location.href='../controller/realizarpago.php?idautoincremental=".$id."';</script></html>";  
}
}






include "../view/realizarpago.html";
?>
