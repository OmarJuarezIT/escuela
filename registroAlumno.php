<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Administrador</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="views/css/bootstrap.min-copia.css" rel="stylesheet">
   <link href="views/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="views/css/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="views/css/sb-admin.css" rel="stylesheet">
	<!--<link rel ="stylesheet" href="views/css/estilo.css">-->
		<script src="js/validar.js"></script>

	<!-- ++++Esto funciona para que no se pueda regresar hacia atras ++++
	<script Language="JavaScript">
    	if(history.forward(1)){
        	history.replace(history.forward(1));
    	}
 	</script>
 	+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
 	
</head>
<?PHP 
/*
    session_start();
    if (!isset($_SESSION['nombre']))
        header("Location: index.php");          //si no hay nadie logueado
            
    if ($_SESSION['tipo']==1)
        header("Location: indexAlumno.php");        //si esta logueado un alumno

    if ($_SESSION['tipo']==0)
        header("Location: indexA.php");
    $tipo=$_SESSION['tipo'];
    $id=$_SESSION['id'];
    $nombre=$_SESSION['nombre'];
    */
            
?>

<body class="fixed-nav sticky-footer">
	<?php  include 'cabeceraAdmin.php'; ?>

<div class="content-wrapper">
  <div class="container-fluid">



	<div class="container">
      <div class="row">
        <div class="col-sm-12 col-sm-offset-6 myform-cont">
          
          <div class="myform-bottom">
            <form class='form-horizontal' role='form'  method="POST" action="controllers/guardarAlumno.php">
                  <div class='form-group'>
                    
                    <div class='col-md-6'>                     
                      <h3>Registro de alumno</h3>                      
                    </div>                    
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-1">                        
                      </div>
                      <div class="col-md-3">
                        <label for="exampleInputName">Nombre</label>
                        <input class="form-control" id="exampleInputName" name="nombre" type="text" aria-describedby="nameHelp">
                      </div>
                      <div class="col-md-3">
                        <label for="exampleInputLastName">Apellidos</label>
                        <input class="form-control" id="exampleInputLastName" name="apellidos" type="text" aria-describedby="nameHelp">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-1">                        
                      </div>
                      <div class="col-md-3">
                        <label for="exampleInputName">Matricula</label>
                        <input class="form-control" id="exampleInputName" name="matricula" type="text" aria-describedby="nameHelp">
                      </div>                      
                    </div>
                  </div>

                  
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-1">                        
                      </div>
                      <div class="col-md-offset-2">
                        <label for="exampleInputName">Carrera</label>
                      </div>
                      <div class="col-md-4">
                        <select class='form-control' name="carrera">
                                <option>Ingeniería en Tecnologías de la Información</option>                                           
                        </select>
                      </div>                      
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-2">
                        
                      </div>
                      <div class="col-md-3">
                        <button class='btn-lg btn-info' type='submit'>Registrar alumno</button>
                      </div>                      
                    </div>
                  </div>

                  
                </form>
            
          </div>
        </div>
      </div>
    </div>



  </div>      
</div>


	<footer>
		<div class="container-fluid row">
			
		</div>
	</footer>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
 