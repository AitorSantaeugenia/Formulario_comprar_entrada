<!DOCTYPE html5>
<html>
    <head>
		<link rel="stylesheet" type="text/css" href="estils/estils.css"/>
	</head>
	
		<style>


		</style>
	<body>
	<!-- 
		EXERCICI PROTECTORA ANIMAL - NUEVO ANIMAL FORM
			
	-->
	<?php
	include("../../conexio/conexion_php.php");
	$value=NULL;
		if(isset($_GET["id"]) && (int)$_GET["id"]>0)
		{
			$sql="SELECT * FROM persona WHERE id = ".$_GET["id"];
			$resultado = mysqli_query($conn,$sql);
			
			//print_r($resultado);
			
			foreach($resultado as $value){
				
			}
			
			$action= "../updates/update_persona.php?id=".$_GET['id'];
			$nombreBoton="Modificar";
		}else
		{
			$action="./guardar/guardar_persona.php";
			$nombreBoton="Guardar";
		}			
	?>
	<!--------------------------------------------------------- CONTENEDOR ---------------------------------------------------------------------->
	<div class="container">
		<!--------------------------------------------------------- ENCABEZADO ---------------------------------------------------------------------->
		<div class="header">
			<!-- MENU -->
				<nav class="nav">
				  <ul class="nav-list">
						<li class="nav-item"><a href="../index.php">HOME<!-- <span class="trampa">SDRSTTS</span> --></a></li>					
						</li>
						
				  </ul>
				</nav>
		</div>
		<!--------------------------------------------------------- BODY ---------------------------------------------------------------------->	
		<div class="body_web">
			<h1 style="text-align:Center"> RESERVE SU ENTRADA </h1><br/>
					<!-- FORMULARI ANIMALS -->
					<form method="post" class="formulari" action="<?php echo $action; ?>">
					
						<div style="border: 1px solid black; text-align:center; padding-top:3%; padding-bottom:3%;";>
							Nom:<input type="text" name="nombre" id="nombre" maxlength="30" value="<?php if(isset($value))  echo $value["nombre"]; ?>"/><br>
							Llinatges: <input type="text" name="apellido" id="apellido" maxlength="30" value="<?php if(isset($value))  echo $value["apellido"]; ?>"/><br>
							DNI:<input type="text" name="dni" id="dni" maxlength="9" value="<?php if(isset($value))  echo $value["dni"]; ?>"/><br>
							E-mail:<input type="text" name="email" id="email" maxlength="35" value="<?php if(isset($value))  echo $value["email"]; ?>"/><br>
							Telèfon:<input type="text" name="telefono" id="telefono" maxlength="35" value="<?php if(isset($value))  echo $value["telefono"]; ?>"/><br>
							Fecha de nacimiento:<input type="text" name="fechanaz" id="fechanaz" maxlength="35" value="<?php if(isset($value))  echo $value["fechanaz"]; ?>"/><br>
							Comentario:<input type="text" name="comentario" id="comentario" maxlength="250" value="<?php if(isset($value))  echo $value["comentario"]; ?>"/>
								<br><br>
						</div>			
						<div class="footer">
							<br/>
								<input type="submit" name="Enviar" value="<?php echo $nombreBoton;?>"><br/><br/> 
						</div>
					</form>
					<!-- FI FORMULARI ANIMALS -->
		</div>
		<!--------------------------------------------------------- FOOTER ---------------------------------------------------------------------->	
		<div class="footer_web">
		
		</div>
		<!--------------------------------------------------------- FI FOOTER ---------------------------------------------------------------------->
		
		
		
		
		
	</div>
		<!--------------------------------------------------------- FI BODY ---------------------------------------------------------------------->
	</body>
</html>