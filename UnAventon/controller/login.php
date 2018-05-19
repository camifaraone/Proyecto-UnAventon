<?php

 
 
require_once "../model/login.php";
 
         if(!empty($_POST['email']) && !empty($_POST['contrasenia'])){
          
         	  $email=$_POST['email'];
		      $contrasenia=$_POST['contrasenia'];
		
		
              $valor= ingresos($email,$contrasenia);
			      
              var_dump($valor);
             
              if(!isset($valor[0]['idautoincremental'])){
				 
			     header("Location: ../controller/login.php?m=Email o contraseña invalida");
				
			 }else
			 { 
					
             		session_start();
					$_SESSION['session_username']=$email;
					
    
		            header("Location: ../controller/index.php?email=".$email);
					
			 }
			 
		
		} 
		
	include "../view/login.html";	
 
 if (!empty($_GET['m'])) {echo "<p class=\"error\">" . "Mensaje: ". $_GET['m'] . "</p>";}
 ?>
