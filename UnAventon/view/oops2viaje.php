<!DOCTYPE html>
<html>
<head>
		<title>UnAventon | Crear viaje</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
			<link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
			<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			<script type="text/javascript" src="../js/materialize.min.js"></script>
			<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			<script src="../js/materialize.js"></script>
			<script src="../js/init.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			 <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>

			 
			 
			 
			 
</head>
  
  <?php
		session_start();	
		if(!empty($_SESSION['session_username'])) {
			$email = $_SESSION['session_username'];
			
	?>
  
  
  
  
<nav class="white" role="navigation"  >
<div class="nav-wrapper #ff9800 orange" >
 <img id="logo-container" src="../img/logo.jpg" width="6%" height="100%" class="brand-logo"></img>
 <ul id="nav-mobile" class="right hide-on-med-and-down">
 <li> Bienvenido!</li><li>&nbsp;<?php echo $email ?></li>
 <li><a href="../controller/logout.php">Cerrar Sesión</a></li>
 </ul>
 </div>
</nav>
<?php } ?>


<body style="background-color: #FEF9E7;">
	<div class="container">
		<div class="jumbotron">
	<article>
		<section>
				
				<div class="usuario"> 
					<ul>
							<li> 
								<blockquote>
     <h3>CREAR VIAJE </h3>
    </blockquote>
								
							</li>
							<li>
								<label for="foto" width="720"></label>
								<img src="../img/oops2.jpg" width="720"/>
							</li>
							
<h3 class="center-align"> <?php echo"<a href=../controller/realizarpago.php?idautoincremental=".$id.">Realizar pago</a>"; ?> </h3>		</section>
			
	</article>
	</div>
	<?php 
		echo "<h5 class='center -align'><p class='regtext'>¿Desea volver a la página principal?<a href='../controller/index.php?idautoincremental='.$id.>Clic aqu&iacute;</a></p> </h5>" 
	?>
</div>
	</div>
	 <?php
  		include "../controller/footer.php";
	?>
	
</body>
</html>