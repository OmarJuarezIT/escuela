<?php 

	class Acta{	


		public static function verTitulacion(){
			include 'conexion.php';
	   		$u = 3;
	   		$sql = "SELECT * FROM acta WHERE id_profesor='" . $u . "'";   		
   			$resultado = mysqli_query($con,$sql);
   			$fila = mysqli_fetch_array($resultado);
   			echo "$fila[titulacion]";
		}
		public static function verCampus(){
			include 'conexion.php';
	   		$u = 3;
	   		$sql = "SELECT * FROM acta WHERE id_profesor='" . $u . "'";   		
   			$resultado = mysqli_query($con,$sql);
   			$fila = mysqli_fetch_array($resultado);
   			echo "$fila[campus]";
		}
		public static function verCurso(){   		
	   		include 'conexion.php';
	   		$u = 3;
	   		$sql = "SELECT * FROM acta WHERE id_profesor='" . $u . "'";   		
   			$resultado = mysqli_query($con,$sql);
   			$fila = mysqli_fetch_array($resultado);
   			echo "$fila[cursoAcademico]";
		}
		public static function verDenominacion(){
			include 'conexion.php';
	   		$u = 3;
	   		$sql = "SELECT * FROM acta WHERE id_profesor='" . $u . "'";   		
   			$resultado = mysqli_query($con,$sql);
   			$fila = mysqli_fetch_array($resultado);
   			echo "$fila[denominacionAcademica]";
		}
		public static function verConvocatoria(){
			include 'conexion.php';
	   		$u = 3;
	   		$sql = "SELECT * FROM acta WHERE id_profesor='" . $u . "'";   		
   			$resultado = mysqli_query($con,$sql);
   			$fila = mysqli_fetch_array($resultado);
   			echo "$fila[convocatoria]";
		}

		public function verProfesor(){
			include 'conexion.php';
	   		$u = 3;
	   		$sql = "SELECT * FROM profesor WHERE idProfesor ='" . $u . "'";   		
   			$resultado = mysqli_query($con,$sql);
   			$fila = mysqli_fetch_array($resultado);
   			echo "$fila[nombre] ";
   			echo "$fila[aPaterno] ";
   			echo "$fila[aMaterno]";
		}
	}

 ?>