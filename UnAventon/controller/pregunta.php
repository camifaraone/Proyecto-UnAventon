<!--
 * Sistema comentarios mas panel de administración :
 * Php mysql comentarios,
 * Copyright 2015 bloguero-ec.
 * Usese cómo mas le convenga no elimine estas líneas (http://www.bloguero-ec.com)
*-->
<?php

require_once "../model/fecha.php";
require_once "../model/funciones.php";
$estado="OK";
?>
<?php
$comments_result = mysqli_query("SELECT * FROM comentarios where estado='$estado' ORDER BY post_id ASC");
// seleccionamos los comentarios en orden ascendente y que su estado sea ok 'por el momenta OK se encuentra en estado beta' 

$comments=array();
$js_history='';

while($row=mysql_fetch_assoc($comments_result))
{
	if($row['parent']==0)
		// Lo colocamos como comentario superior si no es una respuesta a otro comentario
		$comments[$row['post_id']] = $row;
	else
	{
		if(!$comments[$row['parent']]) continue;
		
		$comments[$row['parent']]['replies'][] = $row;
		// Si es una respuesta le buscamos su parent 
	}
	
	$js_history.='addHistory({post_id:"'.$row['post_id'].'"});'.PHP_EOL;
	// añadimos js history a cada comentario luego mediante css le quitamos a las respuestas el js history
}

$js_history='<script type="text/javascript">
'.$js_history.'
</script>';

// lo ponemos en la cabecera justo para cargar la página

?>


<!DOCTYPE html>
<html>
<head>
	<title>UnAventon | Realizar comentario</title>
<meta charset="utf-8">


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-lightness/jquery-ui.css" />

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.js"></script>

<script type="text/javascript" src="../js/script.js"></script>



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

		<?php session_start();
 
      if(empty($_SESSION['session_username'])) {
          
	?>  
		  <nav class="white" role="navigation"  >
    <div class="nav-wrapper #ff9800 orange" >
      <img id="logo-container" src="../img/logo.jpg" width="6%" height="100%" class="brand-logo"></img>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../controller/login.php">Iniciar sesión</a></li>
        <li><a href="../controller/register.php">Registrarse</a></li>
      </ul>
    </div>
  </nav> <?php } ?>
	<?php
			
		if(!empty($_SESSION['session_username'])) {
			$email = $_SESSION['session_username'];
	?>	  
		<nav class="white" role="navigation"  >
    <div class="nav-wrapper #ff9800 orange" >
      <img id="logo-container" src="../img/logo.jpg" width="6%" height="100%" class="brand-logo"></img>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li > Bienvenido!</li> <li> &nbsp; <?php echo $email ?>  </li>
        <li ><a href="../controller/logout.php">Cerrar sesión</a></li>
      </ul>
    </div>
  </nav>
	
	<?php } ?> 
	
<body style="background-color: #FEF9E7;">
	<div class="container">
		<div class="jumbotron">
	<article>
		<section>
				
					<div> 
						<ul>
							<li> 
								<h4>REALIZAR COMENTARIO </h4>
								
							</li>



























<?php echo $js_history; ?>
</head>

<body>

<?php
$sql = mysqli_query("SELECT COUNT(*) FROM comentarios"); 
$total=mysql_result($sql,0); 
	
	if ($total >0 ){ 
	
	foreach($comments as $c)
	{
		showComment($c);
		
		// mostramos los comentarios 
	}
	
	} else {
   echo "<div id='error_vacio'>Por el momento no hay comentarios..  :-(  <span class='close'> <a href='#' title='cerrar'>cerrar</a></span></div>";
}

?>
    <div id="section">
      <div id="commentArea">
          <input type="button" class="waveButtonMain" value="Comentar" onclick="addComment()" /> 
      </div>
    </div>

</body>
</html>
