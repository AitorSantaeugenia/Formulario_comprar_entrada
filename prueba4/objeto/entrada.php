<?php
include("../conexio/conexion_php.php");
//CLASE ENTRADA
class Entrada{
	//atributos
    private $codigo = "";
	private $precio = 0;

   //MÈTODES
		//CODIGO ---------------------------
		public function getCode() 
		{
			return  $this->codigo;
		}
		
		public function setCode($n) 
		{
			$this->codigo=substr($n, 0, 30);
		}
		//CODIGO ---------------------------
		
		//PRECIO ---------------------------
		public function getPrecio() 
		{
			return  $this->precio;
		}
		
		public function setPrecio($n) 
		{
			$this->precio=(int)substr($n, 0, 15);
		}
		//PRECIO ---------------------------
				
}
?>
