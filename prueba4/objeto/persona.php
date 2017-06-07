<?php
//CLASE ANIMAL
class Persona{
	//atributos
    private $nombre = "";
	private $apellido = "";
	private $dni = "";
	private $email = "";
	private $telefono = "";
	private $fechanaz ="";
	private $comentario ="";

   //MÈTODES
		//NOMBRE ---------------------------
		public function getNombre() 
		{
			return  $this->nombre;
		}
		
		public function setNombre($n) 
		{
			$this->nombre=substr($n, 0, 30);
		}
		//NOMBRE ---------------------------
		
		//APELLIDO ---------------------------
		public function getApellido() 
		{
			return  $this->apellido;
		}
		
		public function setApellido($n) 
		{
			$this->apellido=substr($n, 0, 30);
		}
		//APELLIDO ---------------------------
		
		//DNI ---------------------------
		public function getDni() 
		{
			return  $this->dni;
		}
		
		public function setDni($n) 
		{
			$letra = substr($n, -1);
				$numeros = (int)substr($n, 0, -1);
					if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
						$n = $n;
					}else{
						$n = " ";
					}
					
			$this->dni=substr($n, 0, 9);
		}
		//DNI ---------------------------
		
		//EMAIL ---------------------------
		public function getEmail() 
		{
			return  $this->email;
		}
		
		public function setEmail($n) 
		{
			$this->email=substr($n, 0, 30);
		}
		//EMAIL ---------------------------
		
		//TELEFONO ---------------------------
		public function getTelefono() 
		{
			return  $this->telefono;
		}
		
		public function setTelefono($n) 
		{
			$this->telefono=substr($n, 0, 15);
		}
		//TELEFONO ---------------------------
		
		//FECHA NACIMIENTO ---------------------------
		public function getFechanaz() 
		{
			return  $this->fechanaz;
		}
		
		public function setFechanaz($n) 
		{
			$this->fechanaz=substr($n, 0, 15);
		}
		//DIRECCIO ---------------------------	
		
		//COMENTARIO ---------------------------
		public function getComentario() 
		{
			return  $this->comentario;
		}
		
		public function setComentario($n) 
		{
			$this->comentario=substr($n, 0, 250);
		}
		//COMENTARIO ---------------------------
		
		
}
?>