<?php
	
	class Materia{
		
		private $clave;
		private $nombre;		
		private $cuatrimestre;

		public function __construct($clave,$nombre,$cuatrimestre){
			
			$this->clave = $clave;
			$this->nombre = $nombre;
			$this->cuatrimestre = $cuatrimestre;		
		}
		
		public function registrar(){
			include 'conexion.php';

			$sql = "insert into materia(clave,nombreMateria,cuatrimestre,fechaCreacion) value ('".$this->clave."','".$this->nombre."','".$this->cuatrimestre."',NOW())";	  		
   			mysqli_query($con,$sql);  
		}

		
	}
 ?>