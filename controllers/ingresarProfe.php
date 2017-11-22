<?php

	include '../models/profesor.php';
	include '../models/conexion.php';	

	$matricula=$_POST['matricula'];
	$contrasena=$_POST['contrasena'];

	Profesor::ingresar($matricula,$contrasena);

?>