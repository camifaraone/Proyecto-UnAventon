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
 
 

 
function editarviaje($fecha, $monto, $duracion, $hssalida, $observaciones, $id){
 require ("db.php");
try{

	$sql = $conn->prepare("UPDATE viaje SET fecha=? ,monto=? ,duracion=? ,hssalida=?, observaciones=? WHERE idviaje=?");
	
    
	$sql->execute(array( $fecha, $monto, $duracion, $hssalida, $observaciones, $id));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}


   
 
?>