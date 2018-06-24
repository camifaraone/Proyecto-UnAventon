<?php
 function get_viaje($idviaje){
	 require ("db.php");//te crea una conexion
	try{
		$sql = $conn->prepare("select * from viaje  INNER JOIN origen ON viaje.idOrigen = origen.idOrigen INNER JOIN destino ON viaje.idDestino = destino.idDestino INNER JOIN vehiculo ON viaje.idvehiculo = vehiculo.idvehiculo where idviaje=:idviaje"); 
		$sql->bindParam(":idviaje",$idviaje,PDO::PARAM_INT);   
		$sql ->execute();
	
	

	$result= $sql->fetch(); // los resultados de la consulta son guardados en un array 
	

   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 } 
 
 function get_idviaje($idviaje){
	 require ("db.php");//te crea una conexion
	try{
		$sql = $conn->prepare("select idautoincremental from viaje where idviaje=:idviaje"); 
		$sql->bindParam(":idviaje",$idviaje,PDO::PARAM_INT);   
		$sql ->execute();
	
	

	$result= $sql->fetch()[0][0]; // los resultados de la consulta son guardados en un array 
	

   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
 
 

 
function editarviaje($fechaviaje, $monto, $duracion, $horasalida, $distancia, $origen, $destino, $observaciones,$idvehiculo, $id, $idviaje){
 require ("db.php");
try{

	$sql = $conn->prepare("UPDATE viaje SET fecha=? ,monto=? ,duracion=? ,hssalida=?, distancia=?, idOrigen=?, idDestino=?, observaciones=?, idvehiculo=?, idautoincremental=? WHERE idviaje=?");
	
    
	$sql->execute(array($fechaviaje, $monto, $duracion, $horasalida, $distancia, $origen, $destino, $observaciones,$idvehiculo, $id));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

function get_vehiculo($id){
	require ("db.php");
	try{
		$sql = $conn->prepare("select * from vehiculo where idautoincremental=:id");
		$sql->bindParam(":id",$id,PDO::PARAM_INT);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll();
	

   }catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
 }

 function get_origen() {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("select * from origen");
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll();
	
   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
 
 
 function get_destino() {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("select * from destino ");
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll();
	
   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
 
 
?>