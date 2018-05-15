<?php

 include "../view/login.html";
 
require_once "../model/login.php";
 
         if(!empty($_POST['nombreusuario']) && !empty($_POST['contrasenia'])){
          
         	  $nombreusuario=$_POST['nombreusuario'];
		      $contrasenia=$_POST['contrasenia'];
		
		
              $valor= ingresos($nombreusuario,$contrasenia);
			      
           //   var_dump($valor);
             
              if(!isset($valor[0]['id'])){
				 
			     header("Location: ../controller/login.php?m=Nombre de usuario &oacute; contrase&ntilde;a inv&aacute;lida!");
			 
			 }else
			 { 
             		session_start();
					$_SESSION['session_username']=$nombreusuario;

    
		            header("Location: ../controller/index.php");
			 }
			 
		
		} else {
			echo "Todos los campos no deben de estar vacios!";
		}
		
		
 
 if (!empty($_GET['m'])) {echo "<p class=\"error\">" . "Mensaje: ". $_GET['m'] . "</p>";}
 
 ?>