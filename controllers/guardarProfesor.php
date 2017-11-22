<?php
	include '../models/profesor.php';
	include '../models/conexion.php';	

	$profe = new Profesor("$_POST[nombre]","$_POST[apellidos]","$_POST[direccion]","$_POST[correo]","$_POST[area]","$_POST[matricula]","$_POST[contrasena]");

	$profe->registrar();

	print "<script>alert(\"Registro exitoso.\"); window.location='../registroProfesor.php';</script>";	      	  
?>