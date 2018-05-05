<nav>
				<ul class="barramenu">
					<li>
						<a href="index.php">INICIO</a>
					</li>
					
					<?php
						//si el usuario inició sesión muestra en el menu las demás opciones
						if(isset($_SESSION['idautoincremental'])){ ?>  
							<li>
								<a href="buscarviajes.php">BUSCAR VIAJES</a>
							</li>
							<li>
								<a href="crearviaje.php">CREAR VIAJE</a>
							</li>
							<li>
								<a href="misviajes.php">MIS VIAJES</a>
							</li>
							<li>
								<a href="miperfil.php">MI PERFIL</a>
							</li>
						<?php } else{ ?>
							<li>
								<a href="perfil.php">REGISTRARSE</a>
							</li>
							<li>
								<a href="ingresar.php">INGRESAR</a>
							</li>
						<?php } ?>
				</ul>
</nav>
