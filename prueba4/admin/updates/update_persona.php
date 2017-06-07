<?php
	include("../../objeto/persona.php");
	include("../../conexio/conexion_php.php");
	
	$miPersona = new Persona(); 

	$miPersona->setNombre($_POST["nombre"]);
	$miPersona->setApellido($_POST["apellido"]);
	$miPersona->setDni($_POST["dni"]);
	$miPersona->setEmail($_POST["email"]);
	$miPersona->setTelefono($_POST["telefono"]);
	$miPersona->setFechanaz($_POST["fechanaz"]);
	$miPersona->setComentario($_POST["comentario"]);
	
	$sql="UPDATE persona SET nombre='".$miPersona->getNombre()."', apellido='".$miPersona->getApellido()."',dni='".$miPersona->getDni()."',email='".$miPersona->getEmail()."',telefono='".$miPersona->getTelefono()."',fechanaz='".$miPersona->getFechanaz()."',comentario='".$miPersona->getComentario()."'  WHERE id = ".$_GET["id"];
	//$sql="UPDATE coches SET marca='".$miCoche->getNumMarca()."', model='".$miCoche->getNumModel()."',numPuerta='".$miCoche->getNumPuertas()."', numPlaca='".$miCoche->getNumPlaca()."', automatica='".$miCoche->getNumAutomatica()."', tipoTerreno='".$miCoche->getTerreno()."', descapotable='".$miCoche->getisdescapotable()."', potencia='".$miCoche->getNumPotencia()."' WHERE id = ".$_GET["id"];
	echo $sql;

	$resultado = mysqli_query($conn,$sql);

	if (!$resultado) {
		die('Update incorrecta: ' . mysqli_error());
	}else{
		echo "<br/>";
		echo "Update cliente con id.".$_GET["id"];
	}
	
	mysqli_close($conn);
?>

<form method="post" action="../index.php">
<br/>
						<input type="submit" name="Volver" value="Volver"><br/><br/> 
</form>