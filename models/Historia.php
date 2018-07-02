<?php 

	require "../config/Conexion.php";

	Class Historia{

		public function __construct()
		{

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