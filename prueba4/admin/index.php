<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>

		</style>
		
	<body>
	<!-- 
		Exercici#2 PROTECTORA DE ANIMALES | admin index.php
			
	-->
	<?php
	include("../conexio/conexion_php.php");
	

	?>
	<!-- INICI BODY -->
	<h1 style="text-align:Center"> PANEL DE CONTROL ADMINISTRADOR - BBDD CONCIERTO </h1><br/>
			<!-- INICI FORMULARI PROPIETARIS / CLIENTS -->
			<form method="post" action="./listado_clientes.php" style="text-align:center; ">
						<input type="submit" name="coches" style="font-family:monospace;" value="Personas">
			</form>
			
			<form method="post" action="./asignar.php" style="text-align:center">
						<br/><br/><input type="submit" name="clientes" style="font-family:monospace;" value="Asignar entradas">
			</form>
			<!-- FI FORMULARI PROPIETARIS / CLIENTS -->
	</body>
	<!-- FI BODY -->

</html>