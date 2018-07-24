/*
 * Sistema de comentarios mas panel de administración:
 * Php mysql comentarios,
 * Copyright 2015 bloguero-ec.
 * Usese cómo mas le convenga no elimine estas líneas (http://www.bloguero-ec.com)
*/

jQuery(function($){

	$('#error_vacio a').click(function(){
		$(this).closest('#error_vacio').fadeOut();
	});
	
	function addStyle(str){
		var style = document.createElement('style');
	
		style.setAttribute("type", "text/css");
		if (style.styleSheet) {   // IE
			style.styleSheet.cssText = str;
		} else {                // the world
			style.appendChild(document.createTextNode(str));
		}
		
		jQuery('head').append(style);
		$('html').css('background-attachment','scroll');
	}
});

var totHistory=0;
// contenemos el numero de comentarios

var positions = new Array();
var lastVal;


function addComment(where,parent)
{
	/*	esta función sirve tanto para añadir respuesta como para añadir un comentario.. */
		
	var $el;

	if($('.waveButton').length) return false;
	// Si ya existe el formulario no lo remuestra
	// se muestra en la página de retorno y salida
	
	if(!where)
		$el = $('#commentArea');
	else
		$el = $(where).closest('#section');

	if(!parent) parent=0;


	var comment = '<div id="#section addComment">\
		\
		<div class="comment">\
			<div class="commentAvatar">\
			<img src="avatar/usuario.jpg" width="30" height="30" />\
			</div>\
			\
			<div class="commentText">\
			\
			<textarea class="textArea" rows="2" cols="70" name="" />\
			<div><input type="button" class="waveButton" value="Enviar" onclick="addSubmit(this,'+parent+')" /> or <a href="" onclick="cancelAdd(this);return false">cancelar</a></div>\
			\
			</div>\
		</div>\
	\
	</div>';
	
	$el.append(comment);
	
	// abrimos el formulario
}
//cerramos el form con un cancelar
function cancelAdd(el)
{
	$(el).closest('.comment').remove();
}


function addSubmit(el,parent)
{
	/* ejecutamos con clic en boton de envío */
	
	var cText = $(el).closest('.commentText');
	var text = cText.find('textarea').val();
	var wC = $(el).closest('#section');
	
	//validamos que los mensajes no sean muy cortos...
	if(text.length<10)
	{
		alert("Su mensaje es demasiado corto o está vacío!");
		return false;
	}
	
	$(el).parent().html('<img src="img/ajax_loader.gif" width="16" height="16" />');
	// si demoramos un poco mostramos su animación gif
	
	// Enviamos mediante ajax el request del post:
	$.ajax({
		type: "POST",
		url: "../controller/saveComment.php",
		data: "comment="+encodeURIComponent(text)+"&parent="+parent,
		/* enviamos el texto y el parent dentro del sql */
		success: function(msg){
			
			transForm(text,cText);
			// Ocultamos el formulario y mostramos el comentario
			
		}
	});

}

function transForm(text,cText)
{
	var tmpStr ='<span class="name">Usuario:</span> '+text;
	cText.html(tmpStr);
}