<?php
$host="localhost";
	$user="root";
	$password="";
	$db="escuela";
	$con = new mysqli($host,$user,$password,$db);
/* 
	class Conexion{
		private $datos = array(
			"host" => "localhost",
			"user" => "root",
			"pass" => "",
			"db" => "escuela"
			);

		private $con;

		public function __construct(){
			$this->con = new mysqli($this->datos['host'],$this->datos['user'],$this->datos['pass'],$this->datos['db']);
		}

		public function consultaSimple($sql){
			$this->con->query($sql);
			//print "consulta simple";
		}
		public function consultaRetorno($sql){
			$datos = $this->con->query($sql);
			return $datos;
			//print "consulta retorno";
		}
	}
	*/
 ?>