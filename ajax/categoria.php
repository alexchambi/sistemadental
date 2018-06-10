<?php
    require_once("../models/Categoria.php");

    $categoria = new Categoria();

    $idcategoria = isset($_POST["idcategoria"])? limpiarCadena($_POST["idcategoria"]):"";
    $nombre =isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
    $descripcion =isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";


    switch ($_GET["op"]) {
        case 'guardaryeditar':  if(empty($idcategoria)){
                                    $respuesta = $categoria->insertar($nombre, $descripcion);
                                    
                                    echo $respuesta ? "Categoria Regsitrado": "Categoria no registrada";
                                    //insertar si no existe el txtidcategoria
                                }
                                else{
                                    $respuesta = $categoria->editar($idcategoria ,$nombre, $descripcion);
                                    
                                    echo $respuesta ? "Categoria Actualizada": "Categoria no actualizada";
                                }
                                break;
        
        case 'desactivar':      $respuesta = $categoria->desactivar($idcategoria);
                                echo $respuesta ? "Desactivada": "No Desactivada";
                                break;

        case 'activar':         $respuesta = $categoria->activar($idcategoria);
                                echo $respuesta ? "Activada": "No Activada";
                                break;

        case 'mostrar':         $respuesta = $categoria->mostrar($idcategoria);
                                echo json_encode($respuesta);
                                break;

        case 'listar':          $respuesta = $categoria->listar();
                                $datos = Array();
                                while($registro = $respuesta->fetch_object()){
                                    $datos[] = array(
                                        "0"=>$registro->idcategoria,
                                        "1"=>$registro->nombre,
                                        "2"=>$registro->descripcion,
                                        "3"=>$registro->condicion
                                    );
                                }
                                $resultado = array(
                                    //1 = informacion para el data tables
                                    "sEcho"=>1,
                                    "iTotalRecords"=>count($datos),
                                    "iTotalDisplayRecords"=>count($datos),
                                    "aaData"=>$datos
                                );
                                echo json_encode($resultado);

                                break;

        

    }


?>