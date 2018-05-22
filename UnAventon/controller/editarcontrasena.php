<?php
    if(!session_id()){
        session_start();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>UnAventon | Editar contraseña de la cuenta</title>
	<link rel="stylesheet" type="text/css" href="../js/estilo.css">
</head>
<script type="text/javascript" src="../js/editarcontra.js"></script>
<body "background-color: #FEF9E7;">
    <div id="global">
    <?php
		
		
		include('../model/usuario.php');
		$user= new usuario(); //instancia de una clase
		$user->estaRegistrado();
	?>
    <article>
        <section>
                <form class="contact_form" action="../model/editarcontrasena2.php" method="post" name="contact_form" onsubmit="return runSubmit(this)">
                    <div> 
                        <ul>
                            <li> 
                                <h3>EDITAR CONTRASEÑA</h3>
                                <p>Contraseña de la cuenta</p>
								<?php
									if(isset($_SESSION['error'])){
										echo $_SESSION['error'];
										unset($_SESSION['error']);
									}
								?>
                                <span class="required_notification">* Datos requeridos</span> 
                            </li>
                            <li>
								<div class="field">
                        			<label for="password" class="required"><em>*</em>Clave actual:</label>
                        			
                        			<div class="input-box">
                            			<input type="password" name="contrasenia" id="password" title="Contraseña" required/>
                        			</div> 
                    			</div>
                    		</li>
                    		<li>
								<div class="field">
                        			<label for="password" class="required"><em>*</em>Nueva clave:</label>
                        			
                        			<div class="input-box">
                            			<input type="password" name="nuevacontrasenia" id="password" title="Contraseña" required/>
                        			</div> 
                    			</div>
                    		</li>
                    		<li>
                    			<div class="field">
                        			<label for="confirmation" ><em>*</em>Confirmar clave:</label>
                        			
                        			<div class="input-box">
                            			<input type="password" name="confirmarcontrasenia" title="Confirmar la contraseña" id="confirmation" required/>
                        			</div>
                    			</div>
                    		</li>
                    		<li>
                                <button class="submit" type="submit">GUARDAR</button>
                            </li>                       
                        </ul> 
                    </div>
                </form>		
				<p>cantidad de accesos: <?echo $_SESSION['cantidadAccesos'];?></p>					
		</section>
	</article>
	<?php 
		  include('footer.php');
	?>
</body>

</html>
