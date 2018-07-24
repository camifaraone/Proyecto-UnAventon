<?php
function showComment($arr)
{
	echo '
	   
		<!-- presentar mensajes-->
		<div id="section"'.$arr['post_id'].'>
		<ol class="messageList">
		<li class="message"> 
		<div class="messageUserInfo">
		<div class="messageUserBlock">
		<div class="avatarHolder">
		<a href="#" class="avatar"><img src="avatar/'.strtolower($arr['nombre']).'.jpg" width="96" height="96" alt="" /></a>
		</div> <!-- avatarHolder-->
		<h3 class="userText">
		<!--<a href="#" class="username">victor</a>-->
		<em class="userBanner bannerStaff wrapped">
		<span class="before"></span>
		<strong>'.$arr['nombre'].'</strong>
		<span class="after"></span>
		</em>
		</h3> <!-- usertext-->
		<span class="arrow"><span></span></span></div> 
		<!-- messageUserBlock-->
		</div> <!-- messageUserinfo-->
		
		<div class="messageInfo primaryContent">
		<div class="messageContent">
		<article><blockquote class="messageText"><span class="quote"></span>'.$arr['comentarios'].'</blockquote></article>
		</div> <!-- messageContent-->
		</div>  <!-- messageInfo primary content-->
		
		<div class="messageMeta">
<div class="privateControls"><span class="item muted">Publicado : '.$arr['dia'].' de '.nombreMes($arr['mes']).' del '.$arr['anio'].'</span></div>
		</div> <!--massagemeta-->
		</li> <!-- message-->
		<div class="replyLink">
			<a href="" onclick="addComment(this,'.$arr['post_id'].');return false;">Responder..</a>
		</div>
	    <div class="clear"></div>

		</ol>';
		

    // Salida de comentarios y respuestas

	if(isset($arr['replies']))
	{ 
	  if($arr['replies']) 
	 { 
	   foreach($arr['replies'] as $r)
	   showComment($r);
     }
    }
	
echo '</div><!--section-->';	   	
	
}
//limpiamos variables maliciosas
function limpiar($var)
{
	$var = trim($var);
	$var = htmlentities($var);
	$var = str_replace(chr(160),'',$var);
	return $var;
}
?>