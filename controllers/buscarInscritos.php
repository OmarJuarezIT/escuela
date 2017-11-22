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
			$where = "WHERE id_materia LIKE '$valor%'";
			
		}
	}
	$sql = "SELECT * FROM grupo $where";
			$resultado = $mysqli->query($sql);
	
	
?>