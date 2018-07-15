<?php

 
 
require_once "../model/login.php";
require_once "../model/getid.php";
 
         if(!empty($_POST['email']) && !empty($_POST['contrasenia'])){
          
         	  $email=$_POST['email'];
		      $contrasenia=$_POST['contrasenia'];
		
		
              $valor= ingresos($email,$contrasenia);
			   
             
             
              if(!isset($valor[0]['idautoincremental'])){
				 
				echo "<script type=\"text/javascript\">alert(\"Email o contraseña invalida\");</script>";
			 }else
			 { 		
					$id= get_id($email);
					
             		session_start();
					$_SESSION['session_username']=$email;
					
    
		            header("Location: ../controller/index.php?idautoincremental=".$id);
					
			 }
			 
		
		} 
		
	include "../view/login.html";	
 
 if (!empty($_GET['m'])) {echo "<p class=\"error\">" . "Mensaje: ". $_GET['m'] . "</p>";}
 
 ?>