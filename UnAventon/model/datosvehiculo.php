<?php
	 
	
  
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
 
?>