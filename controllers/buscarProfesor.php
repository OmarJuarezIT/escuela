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
			$where = "WHERE matricula LIKE '$valor%'";
			
		}
	}
	$sql = "SELECT * FROM profesor $where";
			$resultado = $mysqli->query($sql);
	
	
?>