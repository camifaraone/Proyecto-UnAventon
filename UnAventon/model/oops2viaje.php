<?php
 
	
  
 
  function oops2viaje($id) {
	 require "../model/db.php";//te crea una conexion
	try{
		
		$sql = $conn->prepare("select * from viaje where coments=:coments");
		$sql->bindParam(":coments",$id,PDO::PARAM_INT);
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