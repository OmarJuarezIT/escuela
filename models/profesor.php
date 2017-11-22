<?php
	
	class Profesor{

		private $nombre;
		private $apellidos;		
		private $direccion;		
		private $correo;		
		private $area;
		private $nivelUsuario = 1;		
		private $matricula;
		private $contrasena;


		public function __construct($nombre,$apellidos,$direccion,$correo,$area,$matricula,$contrasena){

			//$this->con = new Conexion();

			$this->nombre = $nombre;
			$this->apellidos = $apellidos;
			$this->direccion = $direccion;		
			$this->correo = $correo;			
			$this->area = $area;
			$this->matricula = $matricula;
			$this->contrasena = $contrasena;
		}
		
		public function registrar(){

			include 'conexion.php';

			$sql = "insert into profesor(nombre,apellidos,direccion,correo,area,nivelUsuario,fechaRegistro,matricula,contrasena) value ('".$this->nombre."','".$this->apellidos."','".$this->direccion."','".$this->correo."','".$this->area."','".$this->nivelUsuario."',NOW(),'".$this->matricula."','".$this->contrasena."')";
			
	      	

			  		
   			mysqli_query($con,$sql);
   			//$fila = mysqli_fetch_array($resultado);

	      	//$this->con->consultaSimple($sql);
		}

		public static function ingresar($m,$c){

			mysql_connect('localhost','root','') or die("Error al conectar " . mysql_error());
		mysql_select_db('escuela') or die ("Error al seleccionar la Base de datos: " . mysql_error());		

		
		$result = mysql_query("SELECT * from profesor where matricula ='" . $m . "'");
		//print "<script>alert(\"Denuncia enviada\"); window.location='../index.php';</script>";
		
		if($row = mysql_fetch_array($result)){
			if($row['contrasena'] == $c){
				//$idu = $row['idUsuario'] ;
				$nivel = $row['nivelUsuario'];
				
				session_start();
				$_SESSION['usuario'] = $m;
				//$_SESSION['id'] = $idu;
				$_SESSION['nivelU'] = $nivel;
				
				//
				if($m == "admin")
				{
					$nivelUsuario = 1;
				}     
				
				$bloqueo_acceso = 0;
				$intento_acceso = 0;
		          
		        $sql2 = "insert into acceso(matricula_profesor,fecha_hora,intento_acceso,bloqueo_acceso) value ('".$m."',NOW(),'".$intento_acceso."','".$bloqueo_acceso."')";
		        
		        


		      //$con = new Conexion();
		      include 'conexion.php';
		      //$query = $con->query($sql2);
		      $resultado = mysqli_query($con,$sql2);
		      $fila = mysqli_fetch_array($resultado);
		      //$query = $con->consultaSimple($sql2);
		      if($query!=null){           
            	print "<script>alert(\"Accediste\");</script>";
        		}
		      
				header("Location: ../index.php");		//aqui llega		
				print "contrasena incorrecta";
				
			}else{
				$intetoAcceso++;
				header("Location: ../login.php");
				print "contrasena incorrecta";
				
				exit();
			}
		}else{
			header("Location: ../login.php");
			
			exit();
		}
		}

		public function buscar(){
			//$sql= "select * from profesor where matricula= '".$m."'";
			$sql= "select * from profesor where matricula=4545j";					
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
			//print $datos;
		}
		public function ver(){
			$sql = "SELECT nombre, aPaterno,aMaterno FROM profesor WHERE matricula = '{$this->matricula}'";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}
	}
 ?>