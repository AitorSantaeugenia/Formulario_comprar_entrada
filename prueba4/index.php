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
			
			<DIV id="cuatro">
				<DIV CLASS="recuadro">
					<DIV CLASS="trec">METALLICA</DIV>
					<DIV CLASS="irec">
						<IMG SRC="https://revistasoyrock.com.ar/wp/wp-content/uploads/2016/08/Metallica-Live-the-night-before.jpg" width="100%" height="100%"/>
					</DIV>
					<DIV CLASS="frec"><?php echo BARCELONA;?></DIV>
				</DIV>
				
				<DIV CLASS="recuadro">
					<DIV CLASS="trec">ROSENDO</DIV>
					<DIV CLASS="irec">
						<IMG SRC="http://www.rosendo.es/wp-content/uploads/2013/09/1351788003_portada-palau1.jpg" width="100%" height="100%"/>
					</DIV>
					<DIV CLASS="frec"><?php echo MADRID;?></DIV>				
				</DIV>
				
				<DIV CLASS="recuadro">
					<DIV CLASS="trec">BARRICADA</DIV>
					<DIV CLASS="irec">
						<IMG SRC="http://images.coveralia.com/audio/b/Barricada-25_Anos_De_Rocanrol-Frontal.jpg" width="100%" height="100%"/>
					</DIV>
					<DIV CLASS="frec"><?php echo MADRID;?></DIV>				
				</DIV>
				
				<DIV CLASS="recuadro">
					<DIV CLASS="trec">MOTORHEAD</DIV>
					<DIV CLASS="irec">
						<IMG SRC="http://imotorhead.com/mh/wp-content/uploads/2016/12/mh-music-new.jpg" width="100%" height="100%"/>
					</DIV>
					<DIV CLASS="frec"><?php echo BARCELONA;?></DIV>				
				</DIV>
			</DIV>
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