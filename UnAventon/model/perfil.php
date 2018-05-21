 <?php
 
 function get_perfil($email){
	 require_once ("db.php");//te crea una conexion
	try{
		$sql = $conn->prepare("select * from usuario where email=:email"); //selecciona todos los campos del usuario que coincidan con el email que viene paso por GET ( en el buscador) 
		$sql->bindParam(":email",$email,PDO::PARAM_STR);   
		$sql ->execute();
	
	

	$result= $sql->fetch(); // los resultados de la consulta son guardados en un array 
	

   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }

 ?>