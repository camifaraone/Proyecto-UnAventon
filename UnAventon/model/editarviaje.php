<?php
 function get_viaje($id){
	 require ("db.php");//te crea una conexion
	try{
		$sql = $conn->prepare("select * from viaje  where idviaje=:id"); 
		$sql->bindParam(":id",$id,PDO::PARAM_INT);   
		$sql ->execute();
	
	

	$result= $sql->fetch(); // los resultados de la consulta son guardados en un array 
	

   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 } 
 
 function get_id($id){
	 require ("db.php");//te crea una conexion
	try{
		$sql = $conn->prepare("select idautoincremental from viaje where idviaje=:id"); 
		$sql->bindParam(":id",$id,PDO::PARAM_INT);   
		$sql ->execute();
	
	

	$result= $sql->fetch()[0][0]; // los resultados de la consulta son guardados en un array 
	

   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
 
 

 
function editarviaje($fecha, $monto, $duracion, $hssalida, $observaciones, $origen, $destino, $vehiculo, $id){
 require ("db.php");
try{

	$sql = $conn->prepare("UPDATE viaje SET fecha=? ,monto=? ,duracion=? ,hssalida=?, observaciones=?, idOrigen=?, idDestino=?, idvehiculo=? WHERE idviaje=?");
	
    
	$sql->execute(array( $fecha, $monto, $duracion, $hssalida, $observaciones, $origen, $destino, $vehiculo, $id));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

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
 
 
 
 function get_vehiculo($iduser){
	require ("db.php");
	try{
		$sql = $conn->prepare("select * from vehiculo where idautoincremental=:iduser");
		$sql->bindParam(":iduser",$iduser,PDO::PARAM_INT);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll();
	

   }catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
 }


   
 
?>