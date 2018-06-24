<?php

    require_once("../config/Conexion.php");

    class Persona{

        public function __construct(){

        }

        public function insertar($nombre, $tipopersona, $tipodocumento, $numdocumento, $direccion, $telefono, $email){
            
            $sql = "INSERT INTO persona(nombre, tipopersona, tipodocumento, numdocumento, direccion, telefono, email) 
                    VALUES ('$nombre','$tipopersona','$tipodocumento','$numdocumento','$direccion','$telefono', '$email')";

            return ejecutarConsulta($sql);
        }

        public function editar($nombre, $numdocumento, $direccion, $telefono, $email){
            $sql = "UPDATE categoria SET nombre='$nombre', numdocumento = '$numdocumento', direccion = $direccion, telefono = $telefono, email = $email
                    WHERE idpersona = '$idpersona'";
            
            return ejecutarConsulta($sql);
        }

        /*
        public function desactivar($idcategoria){
            $sql = "UPDATE categoria SET condicion = '0' WHERE idcategoria = '$idcategoria'" ;
            
            return ejecutarConsulta($sql);
        }

        public function activar($idcategoria){
            $sql = "UPDATE categoria SET condicion = '1' WHERE idcategoria = '$idcategoria'" ;
            
            return ejecutarConsulta($sql);
        }

        */
        public function mostrar($idpersona){

            $sql = "SELECT* FROM persona WHERE idpersona = '$idpersona'";

            return ejecutarConsultaSimpleFila($sql);
        }

        public function listar(){

            $sql = "SELECT * FROM persona";

            return ejecutarConsulta($sql);

        }


    }


?>