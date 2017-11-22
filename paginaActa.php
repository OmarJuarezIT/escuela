<!DOCTYPE html>
<head>
  	<meta charset="UTF-8">
</head>
<body>
	<?php 
		include 'models/acta.php';
		include 'models/alumno.php';
	?>

	<h1>la titulacion es  <?php  Acta::verTitulacion();?></h1>
	<br>
	<h1>el profesor es <?php  Acta::verProfesor();?></h1>
	<br>
	<h1>el alumno es: <?php Alumno::verNombre();?></h1>

</body>
</html>