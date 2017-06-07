<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE> Loving Birds SL</TITLE>
			<META CHARSET="UTF-8"/>
			<LINK REL="STYLESHEET" HREF="estils/estils.css" TYPE="TEXT/CSS"/>
	</HEAD>
	<BODY>
			<?php
	
			include("/conexio/conexion_php.php");
			include("./session/session_idioma.php")
			?>
<?php
		//echo "GET: ";print_r($_GET);
		//echo "<br/>"."POST: ";print_r($_POST);
		//echo "<br/>"."SESSION: ";print_r($_SESSION);
		
	$id="";
	if(isset($_GET['id']) && $_GET['id'] > 0){
		$id = (int)$_GET['id'];
	}
	?>
	<!-- ENCABEZADO -->
	<div class="header">
			<form method="post" style="text-align:right; font-family:monospace";>
				<?php echo SELECTLANG; ?><select  name="idioma" width="173" style="width: 173px" id="idioma" onChange="javascript:document.location.href='<?php echo $_SERVER['PHP_SELF'];?>?idioma=' + this.value + '&id=<?php echo $id;?>' " />
										 <option value="es" <?php if(isset($_SESSION['idioma']) && $_SESSION['idioma'] == "es") echo "selected"; ?>><?php echo NOMIDIOMAUN; ?></option>
										
										 <option value="en" <?php if(isset($_SESSION['idioma']) && $_SESSION['idioma'] == "en") echo "selected"; ?> ><?php echo NOMIDIOMATRES; ?></option>
				</select><br/>
			</form>
	</div><br>
		
		<DIV ID="principal">
			<div class="header2">
				<!-- MENU -->
					<nav class="nav">
					  <ul class="nav-list">
							<li class="nav-item"><a href="index.php">HOME<!-- <span class="trampa">SDRSTTS</span> --></a></li>
							<li class="nav-item"><a href="reserva.php"><?php echo RESERVA;?></a></li>
							<li class="nav-item"><a href="contacto.php"><?php echo CONTACT;?></a>
						
							</li>
							
					  </ul>
					</nav>
			</div>
				<br/>
			<HR>
			<br/>
			
			
		</div>
			<DIV class="last">
			<br/>
				<p style="text-decoration:underline;"><?php echo ULTIMOS;?></p>
				<br/>
			</DIV>
				
			<HR>
			<br/>
			
			<DIV id="cuatro2">
			<!-- FORMULARIO -->
				<div class="formulario_mail">
					<form method="POST" action="contacto.php">
						<input type="text" placeholder="<?php echo ASUNTO; ?>" name="T1" size="29"/> <br/>
						<textarea name="T2" rows="3" cols="30"></textarea>
						<br/><input type="submit">
					</form>
					
					<?php
					if (isset($_POST['T1']) and isset($_POST['T2'])){
						$mensaje = $_POST['T2'];
						mail('administrador@gmail.com', $_POST['T1'], $mensaje);	echo "GRACIAS POR CONTACTAR!";
					}
					?>
				</div>
			<!-- FORMULARIO -->
			</DIV>
			<br/>
			<HR>
			<br/>	

	</BODY>
</HTML>