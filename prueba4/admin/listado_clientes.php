<?php
	include("../conexio/conexion_php.php");
	//$results = mysql_query("SELECT * FROM clientes");
	$sql="SELECT * FROM persona";
	
	$resultado = mysqli_query($conn,$sql);

	if (!$resultado) {
		die('Consulta no válida: ' . mysqli_error());
	}
?>


<html>
	<head>
		<style>
			.tabla{
				border:1px solid black;
				padding: 3px;
				font-family: monospace;
				width:100%;
			}
			
			.tabla td {
				border:1px solid black;
				margin: 0 auto;
				text-align:center;
			}
			
			.tabla a{
				margin: auto;
				text-align:center;
				text-decoration: none;
			}
			
		</style>
	</head>
    <body>
		<div class="header">

		</div>
		
		<!-- INICI TAULA PER ELS VALORS DELS ANIMALS -->
		<table class="tabla">
			<thead>
			
				<tr>
					<td >ID</td>
					<td> Nom</td>
					<td> Llinatges</td>
					<td> DNI</td>
					<td> E-mail</td>
					<td> Telèfon</td>
					<td> Fecha de nacimiento</td>
					<td> Comentario</td>
				</tr>
			</thead>
			
			<tbody>
			<?php
			
			foreach($resultado as $item){
			
			?>
			  <tr>
				<td><?php echo $item['id']?></td>
				<td><?php echo $item['nombre']?></td>
				<td><?php echo $item['apellido']?></td>
				<td><?php echo $item['dni']?></td>
				<td><?php echo $item['email']?></td>
				<td><?php echo $item['telefono']?></td>
				<td><?php echo $item['fechanaz']?></td>
				<td><?php echo $item['comentario']?></td>
				<td><?php echo "<a href='./eliminar/propietarios/eliminar_persona.php?id=". $item['id']."'>ELIMINAR</a><br/> <br/> ";?></td>
				<td><?php echo "<a href='./nuevo/nuevo_cliente.php?id=". $item['id']."'>UPDATE</a><br/> <br/> ";?></td>
				
			  </tr>
			<?php
			}
			mysqli_close($conn);
			?>
			
			</tbody>
		</table>
		<!-- INICI TAULA PER ELS VALORS DELS ANIMALS -->
		
		<br/>
		<!-- FORM PER RETORNAR A LA PAGINA INICIAL -->
				<form method="post" action="./index.php" style="text-align:center; font-family:monospace;">
				<?php
						echo "<input type='submit' name='volver' style='font-family:monospace;' value='INDEX'><br/><br/>"; 
				?>
				</form>
    </body>
</html>