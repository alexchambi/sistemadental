<?php 

	require "../config/Conexion.php";

	Class Persona{

		public function __construct()
		{

		}

		public function insertar($nombre, $tipopersona, $tipodocumento, $numdocumento, $direccion, $telefono, $email){

			$sql="INSERT INTO persona(nombre, tipopersona, tipodocumento, numdocumento, direccion, telefono, email)
			VALUES ('$nombre', '$tipopersona', '$tipodocumento', '$numdocumento', '$direccion', '$telefono', '$email')";
			return ejecutarConsulta($sql);
		}

		public function editar($idpersona ,$nombre, $tipopersona, $tipodocumento, $numdocumento, $direccion, $telefono, $email){

			$sql="UPDATE persona SET nombre='$nombre', tipopersona='$tipopersona', tipodocumento='$tipodocumento', numdocumento='$numdocumento', direccion='$direccion', telefono='$telefono', email='$email' WHERE idpersona='$idpersona'";
			return ejecutarConsulta($sql);
		}


		public function mostrar($idpersona){

			$sql="SELECT * FROM persona WHERE idpersona='$idpersona'";
			return ejecutarConsultaSimpleFila($sql);
		}


		public function listar(){

			$sql="SELECT * FROM persona";
			return ejecutarConsulta($sql);		
		}

		public function select(){

			$sql="SELECT * FROM persona";
			return ejecutarConsulta($sql);		
		}
	}

?>