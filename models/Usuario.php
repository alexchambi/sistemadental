<?php
    require "../config/Conexion.php";

    class Usuario{

        public function __construct(){

        }

        public function insertar($nombre, $tipodocumento, $numdocumento, $direccion, $telefono, $email, $cargo, $login, $clave){
            $sql = "INSERT INTO usuario (nombre, tipodocumento, numdocumento, direccion, telefono, email, cargo, login, clave)"
        }

    }


?>