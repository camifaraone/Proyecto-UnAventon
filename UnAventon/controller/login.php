<?php

 
 
require_once "../model/login.php";
 
         if(!empty($_POST['nombreusuario']) && !empty($_POST['contrasenia'])){
          
         	  $nombreusuario=$_POST['nombreusuario'];
		      $contrasenia=$_POST['contrasenia'];
		
		
              $valor= ingresos($nombreusuario,$contrasenia);
			      
              var_dump($valor);
             
              if(!isset($valor[0]['idautoincremental'])){
				 
			     header("Location: ../controller/login.php?m=Nombre de usuario o contraseña invalida!");
				
			 }else
			 { 
					
             		session_start();
					$_SESSION['session_username']=$nombreusuario;
					
    
		            header("Location: ../controller/index.php?idautoincremental=".$nombreusuario);
					
			 }
			 
		
		} 
		
	include "../view/login.html";	
 
 if (!empty($_GET['m'])) {echo "<p class=\"error\">" . "Mensaje: ". $_GET['m'] . "</p>";}
 
 ?>