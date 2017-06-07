	<?php
	include("../objeto/persona.php");
		
	$miPersona = new Persona(); 

	$miPersona->setNombre($_POST["nombre"]);
	$miPersona->setApellido($_POST["apellido"]);
	$miPersona->setDni($_POST["dni"]);
	$miPersona->setEmail($_POST["email"]);
	$miPersona->setTelefono($_POST["telefono"]);
	$miPersona->setFechanaz($_POST["fechanaz"]);
	$miPersona->setComentario($_POST["comentario"]);
	?>
	
	<?php
	//------------------------------------------------------------
	
	include("../conexio/conexion_php.php");
	
	$sql = "INSERT INTO persona (nombre, apellido, dni, email, telefono, fechanaz, comentario)
	VALUES ('".$miPersona->getNombre()."', '".$miPersona->getApellido()."', '".$miPersona->getDni()."', '".$miPersona->getEmail()."','".$miPersona->getTelefono()."','".$miPersona->getFechanaz()."','".$miPersona->getComentario()."')";
	
	$textoError = "";
	if (mysqli_query($conn, $sql)){
		$textoError = "Inserción correcta";
	} else {
		$textoError = "Error: " . mysqli_error($conn);
	}
	
	//----------------------------------------------------------------------
		//----------------------------------------------------------------------

	;
?> 
<br/>
<html>
	<header>
		<link rel="stylesheet" type="text/css" href="../estils/estils.css"/>
	</header>
	
	<body>
<!--------------------------------------------------------- CONTENEDOR ---------------------------------------------------------------------->
			<!--------------------------------------------------------- ENCABEZADO ---------------------------------------------------------------------->
			<div class="header2">
				<!-- MENU -->
					<nav class="nav">
					  <ul class="nav-list">
							<li class="nav-item"><a href="../index.php">HOME<!-- <span class="trampa">SDRSTTS</span> --></a></li>
							<li class="nav-item"><a href="reserva.php">RESERVA</a></li>
							<li class="nav-item"><a href="#">CONTACTO</a>
						
							</li>
							
					  </ul>
					</nav>
			</div>
			<!--------------------------------------------------------- BODY ---------------------------------------------------------------------->	
			<div class="body_web">
				<?php echo $textoError;?>
			</div>
			<!--------------------------------------------------------- FOOTER ---------------------------------------------------------------------->	
			<div class="footer_web">
				
			</div>
			<!--------------------------------------------------------- FI FOOTER ---------------------------------------------------------------------->
			
			
			
			
			
		<!--------------------------------------------------------- FI BODY ---------------------------------------------------------------------->
	</body>
	
</html>