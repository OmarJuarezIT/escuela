<?php  
	class Alumno{

		private $matricula;
		private $nombreAlumno;		
		private $apellidos;
		private $carrera;

		public function __construct($matricula,$nombreAlumno,$apellidos,$carrera){
			
			$this->matricula = $matricula;
			$this->nombreAlumno = $nombreAlumno;
			$this->apellidos = $apellidos;
			$this->carrera = $carrera;	
		}
		
		public function registrar(){
			include 'conexion.php';

			$sql = "insert into alumno(matricula,nombreAlumno,apellidos,carrera,fechaRegistro) value ('".$this->matricula."','".$this->nombreAlumno."','".$this->apellidos."','".$this->carrera."',NOW())";	  		
   			mysqli_query($con,$sql);  
		}

		

		public static function verMatricula(){
			include 'conexion.php';
			$m = 201312345;//ejemplo
	   		$sql = "SELECT * FROM alumno WHERE matricula='" . $m . "'";   		
   			$resultado = mysqli_query($con,$sql);
   			$fila = mysqli_fetch_array($resultado);
   			echo "$fila[matricula]";
		}
		public static function verNombre(){
			include 'conexion.php';
			$m = 201312345;
	   		$sql = "SELECT * FROM alumno WHERE matricula='" . $m . "'";   		
   			$resultado = mysqli_query($con,$sql);
   			$fila = mysqli_fetch_array($resultado);
   			echo "$fila[nombreAlumno]";
		}
		public static function verApellidos(){
			include 'conexion.php';
			$m = 201312345;
	   		$sql = "SELECT * FROM alumno WHERE matricula='" . $m . "'";   		
   			$resultado = mysqli_query($con,$sql);
   			$fila = mysqli_fetch_array($resultado);
   			echo "$fila[apellidos]";
		}





	}

?>