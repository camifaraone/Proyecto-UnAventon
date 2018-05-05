<!DOCTYPE html>
<html>
<head>
	//link rel="shortcut icon" href="../img/icono.ico"/
	<title>UnAventon | Inicio</title>
	//link rel="stylesheet" type="text/css" href="css-js/estilo1.css">
</head>
<body>
	<div id="global">
	<?php
		include('header.php');
		include('usuario.php');
		$user= new usuario(); //instancia de una clase
		$user->estaRegistrado();
	?>
		<article>
			<section>
				<div class="menu">
					<img  class= "lateral" width="70%" height="70%">  //src="../img/backend.png"
	            </div>
			</section>
			
		</article>
		
		<?php 
			include('footer.php');
		?>
		
	</div>
</body>
</html>
