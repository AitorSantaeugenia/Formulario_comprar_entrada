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
	include("/conexio/conexion_php.php");
	$value=NULL;
		if(isset($_GET["id"]) && (int)$_GET["id"]>0)
		{
			$sql="SELECT * FROM propietarios WHERE id = ".$_GET["id"];
			$resultado = mysqli_query($conn,$sql);
			
			//print_r($resultado);
			
			foreach($resultado as $value){
				
			}
			
			$action= "/updates/update_propietarios.php?id=".$_GET['id'];
			$nombreBoton="Modificar";
		}else
		{
			$action="./guardar/guardar_persona.php";
			$nombreBoton="Guardar";
		}			
		
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
			
	<div class="container">
		<!--------------------------------------------------------- ENCABEZADO ---------------------------------------------------------------------->
		<!--------------------------------------------------------- BODY ---------------------------------------------------------------------->	
		<div class="body_web">
			<h1 style="text-align:Center"> RESERVE SU ENTRADA </h1><br/>
					<!-- FORMULARI ANIMALS -->
					<form method="post" class="formulari" action="<?php echo $action; ?>">
					
						<div style="border: 1px solid black; text-align:center; padding-top:3%; padding-bottom:3%;";>
							Nom:<input type="text" name="nombre" id="nombre" maxlength="30"/><br>
							Llinatges: <input type="text" name="apellido" id="apellido" maxlength="30"/><br>
							DNI:<input type="text" name="dni" id="dni" maxlength="9"/><br>
							E-mail:<input type="text" name="email" id="email" maxlength="35"/><br>
							Telèfon:<input type="text" name="telefono" id="telefono" maxlength="35"/><br>
							Fecha de nacimiento:<input type="text" name="fechanaz" id="fechanaz" maxlength="35"/><br>
							Comentario:<input type="text" name="comentario" id="comentario" maxlength="250"/>
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
			<br/>
			<HR>
			<br/>
			
			<DIV ID="colocar2">
			<DIV ID="colocar">
				<DIV ID="fdes">
					
				</DIV>

				<DIV ID="fcontact" style="font-family:monospace;">
					<DIV class="lel" style="font-family:monospace;"><?php echo CONTACT;?></DIV>
					<DIV class="contact" style="font-family:monospace;">
						<section><?php echo CALLE;?> Centre Bit</section>
						<section>Alaior</section>
						<section>07702</section>
					</DIV>
					<DIV class="contact">
						<section>Tel:</section>
						<section>971364426</section>
					</DIV>
					<DIV class="contact">
						<section>Fax:</section>
						<section>9713524785</section>
					</DIV>
					<DIV class="contact">
						<section>Email:</section>
						<section>contactconcierto@concierto.com</section>
						<br/>
					</DIV>
				</DIV>
							
				<DIV ID="fsocial" style="font-family:monospace;">
					<DIV class="lel"><?php echo SOCIAL;?></DIV>
					<DIV class="social">
						
						<section class="palabra"><a href="http://www.linkedin.com">Linkedin</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</section>
					</DIV>
					<DIV class="social">
						<section class="palabra"><A CLASS="enlace" HREF="http://www.twitter.com">Twitter</A></section>
					</DIV>
					<DIV class="social">					
						<section class="palabra"><a href="http://www.pinterest.com">Pinterest</a></section>
					</DIV>
					<DIV class="social">				
						<section class="palabra"><a href="https://es.wikipedia.org/wiki/RSS">RSS Feed</a></section>
					</DIV>
				</DIV>					
			</DIV>
		</DIV>
		</DIV>
			<br/>
			<HR>
			<br/>
			

	</BODY>
</HTML>