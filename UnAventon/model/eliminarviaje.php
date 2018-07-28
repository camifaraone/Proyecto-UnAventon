<?php 
 	function geteliminar($id){
	require ("db.php");
	try{
		$sql = $conn->prepare("select calificacion from usuario where idautoincremental=:id");
		$sql->bindParam(":id",$id,PDO::PARAM_INT);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll()[0][0];
	

   }catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
 }
 
 
function del_viaje($idviaje, $id){

		require ("db.php");



		try{

		$gsent = $conn->prepare('UPDATE viaje SET bajalogica=? WHERE idviaje=?');

		
				
		$gsent->execute(array(1, $idviaje));
		
		
		


		//$result=$gsent->fetch();

		}

catch(PDOException $e){

echo "ERROR: " . $e->getMessage();
return false; //die();

}


return true;

}

function get_postulados($idviaje){
	 require "../model/db.php";
	try{
		$sql = $conn->prepare("select postulados from viaje where idviaje=:idviaje"); 
		$sql->bindParam(":idviaje",$idviaje,PDO::PARAM_INT);   
		$sql ->execute();
	
	

	$result= $sql->fetch()[0][0];
	

   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }


function get_id($idviaje){
	 require "../model/db.php";//te crea una conexion
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
 
 
 function actualizar_calificacion($calificacion,$id){
 require ("db.php");
try{

	$sql = $conn->prepare("UPDATE usuario SET calificacion=?  WHERE idautoincremental=?");
	
    
	$sql->execute(array($calificacion, $id ));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}



?>