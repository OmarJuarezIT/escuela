<?php
	include '../models/alumno.php';
	include '../models/conexion.php';	

	$materia1 = new Alumno("$_POST[matricula]","$_POST[nombre]","$_POST[apellidos]","$_POST[carrera]");

	$materia1->registrar();

	print "<script>alert(\"Registro exitoso.\"); window.location='../registroAlumno.php';</script>";	      	  
?>