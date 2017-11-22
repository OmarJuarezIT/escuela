<?php
	
	//conexion
	
	$mysqli = new mysqli('localhost', 'root' ,'' ,'escuela');
		
		if($mysqli->connect_error){
			
			die('Error en la conexion' . $mysqli->connect_error);	
		}

	
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE clave LIKE '$valor%'";
			
		}
	}
	$sql = "SELECT * FROM materia $where";
			$resultado = $mysqli->query($sql);
	
	
?>