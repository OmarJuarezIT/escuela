<?php
	include '../models/materia.php';
	include '../models/conexion.php';	

	$materia1 = new Materia("$_POST[clave]","$_POST[nombre]","$_POST[cuatrimestre]");

	$materia1->registrar();

	print "<script>alert(\"Registro exitoso.\"); window.location='../registroMateria.php';</script>";	      	  
?>