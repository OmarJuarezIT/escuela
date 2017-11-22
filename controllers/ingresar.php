<?php 
     include '../models/conexion.php';

		$matricula = $_POST['matricula'];
		$contrasena = $_POST['contrasena'];
         	//echo $id.$password;
		//$conexion = Conectarse();
		$consulta = mysqli_query($con,"SELECT * FROM profesor WHERE matricula='".$matricula."' AND contrasena='".$contrasena."'");

session_start();		
			
			if( $u =  mysqli_fetch_array($consulta) ){
			
				$_SESSION['id'] = $u['idProfesor'];
				$_SESSION['nivel'] = $u['nivelUsuario'];
				$_SESSION['nombre'] = $u['nombre'];

				
				if($u['nivelUsuario']==1){				
					header("Location: ../indexProfesor.php");					
				}else{
					if ($u['nivelUsuario']==0){
						header("Location: ../indexAdmin.php");
					}				}
				
			}else{
				header("Location: ../incorrecto.php");
			}

		
		
//modificacios
		
		

			
		

		
?>