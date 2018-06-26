<?php
 
	
  
 
  function get_postulados($idviaje) {
	 require "../model/db.php";//te crea una conexion
	try{
		
		$sql = $conn->prepare("SELECT * FROM viaje INNER JOIN usuario ON usuario.idautoincremental = viaje.idautoincremental WHERE viaje.idviaje =: idviaje");
		$sql->bindParam(":idviaje",$idviaje,PDO::PARAM_INT);   
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