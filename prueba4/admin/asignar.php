<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>

		</style>
		
	<body>
	<!-- 
		Exercici#2 PROTECTORA DE ANIMALES | admin asignar.php
			
	-->
	<?php
		include("../conexio/conexion_php.php");
		include("../objeto/entrada.php");
		//DO PER LES ENTRADES A INSERIR
		$i=0;
		//------------------------------------------------------------------------------------
		//FUNCION PARA EL CODIGO DE LAS ENTRADAS
		function generateRandomString($length = 10) {
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			return $randomString;
		}
		//------------------------------------------------------------------------------------
			
		
			$sql10 = 'SELECT fechanaz FROM persona ORDER BY id LIMIT 10';
			$resultado10 = mysqli_query($conn,$sql10);
			
					$i=0;
					//COGEMOS EL V ALOR DE CADA FECHA EN UNA VARIABLE
					foreach($resultado10 as $value2){
						$separado_por_comas[$i] = implode(",", $value2);
						$i++;
					}
					//echo($separado_por_comas[9]);
					echo "<br/>";
					//MIRAMOS EL RESULTADO
					/*$j=0;
					for($j=0;$j>$resultado10.length;$j++{
					
					}
					*/
					//print_r ($separado_por_comas);
					foreach($separado_por_comas as $item2){
						
					}
					//$birthDate = $separado_por_comas[1];
					
			function getAge($fecha){
						
						//echo $birthDate;
						//echo $fecha;
						//echo "<br/>";
						$birthDate = explode("-", $fecha);
						//print_r( $birthDate);
						$age = (date("md", date("U", mktime(0, 0, 0, (int)$birthDate[1], (int)$birthDate[0], (int)$birthDate[2]))) > date("md")
						? ((date("Y") - $birthDate[2]) - 1)
						: (date("Y") - $birthDate[2]));
						//echo "<br/>";
						
						//echo $age." ";
						 return (int)$age;
						
			}
			
			//echo getAge("11-07-1989");
				
				//echo (count($resultado10['fechanaz']));
		
		//echo generateRandomString();
		$textoError = "";
		//----------------------------------------------------------------------
		//----------------------------------------------------------------------
		
		//SELECT PER ELS 10 PRIMERS USUARIS
		$sql2 = 'SELECT * FROM persona ORDER BY id LIMIT 10';
		$resultado = mysqli_query($conn,$sql2);
		if (mysqli_query($conn, $sql2)){
				$textoError = "<br/>"."Seleccion correcta"."<br/>";
			} else {
				$textoError = "Error: " . mysqli_error($conn);
		}
		//print_r($resultado);
		//FI SELECT PER ELS 10 PRIMERS USUARIS
		
		//INSERT 10 VALORS PER SET
		foreach($resultado as $value)
		{
			$miEntrada = new Entrada(); 

			$miEntrada->setCode(generateRandomString());
			$edadPorPrecio = (int)5000 * (int)getAge($value['fechanaz']);
			$miEntrada->setPrecio($edadPorPrecio);
			//------------------------------------------------------------
			$sql = "INSERT INTO entrada (codigo, precio, id_persona)
			VALUES ('".$miEntrada->getCode()."', '".$miEntrada->getPrecio()."', '".$value['id']."')";
			
			$textoError = "";
			if (mysqli_query($conn, $sql)){
				$textoError = "Inserción correcta"."<br/>";
			} else {
				$textoError = "Error: " . mysqli_error($conn);
			}
			
			
		}
		
		
		//UPDATE ENTRADES AMB ELS 10 PRIMERS USUARIS
		
	?>
	<!-- INICI BODY -->
	<h1 style="text-align:Center"> ASIGNAR ENTRADAS </h1><br/>
			<!-- RETORNAR A INDEX -->
			<?php echo $textoError; ?>
			<form method="post" action="index.php">
				<br/>
				<input type="submit" name="Volver" value="Volver"><br/><br/> 
			</form>
						<!-- FI FORMULARI PROPIETARIS / CLIENTS -->
	</body>
	<!-- FI BODY -->

</html>