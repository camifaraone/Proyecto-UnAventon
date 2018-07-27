<?php 
 	function getcalifacomp($id){
	require ("db.php");
	try{
		$sql = $conn->prepare("select calificacionacompaniante from usuario where idautoincremental=:id");
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
 


function get_perfil($idautoincremental){
	 require_once ("db.php");//te crea una conexion
	try{
		$sql = $conn->prepare("select * from usuario where idautoincremental=:idautoincremental"); //selecciona todos los campos del usuario que coincidan con el email que viene paso por GET ( en el buscador) 
		$sql->bindParam(":idautoincremental",$idautoincremental,PDO::PARAM_INT);   
		$sql ->execute();
	
	

	$result= $sql->fetch(); // los resultados de la consulta son guardados en un array 
	

   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }

 
 
 function actualizar_calificacion($calificacion,$id){
 require ("db.php");
try{

	$sql = $conn->prepare("UPDATE usuario SET calificacionacompaniante=?  WHERE idautoincremental=?");
	
    
	$sql->execute(array($calificacion, $id ));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}



?>