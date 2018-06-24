<?php
    require_once("../models/Persona.php");

    $persona = new Persona();

    $idpersona = isset($_POST["idpersona"])? limpiarCadena($_POST["idpersona"]):"";
    $nombre =isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
    $tipopersona =isset($_POST["tipopersona"])? limpiarCadena($_POST["tipopersona"]):"";
    $tipodocumento =isset($_POST["tipodocumento"])? limpiarCadena($_POST["tipodocumento"]):"";
    $numdocumento =isset($_POST["numdocumento"])? limpiarCadena($_POST["numdocumento"]):"";
    $direccion =isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
    $telefono =isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
    $email =isset($_POST["email"])? limpiarCadena($_POST["email"]):"";


    switch ($_GET["op"]) {
        case 'guardaryeditar':  if(empty($idpersona)){
                                    $respuesta = $persona->insertar($nombre, $tipopersona, $tipodocumento, $numdocumento, $direccion, $telefono, $email);
                                    
                                    echo $respuesta ? "Persona Regsitrado": "persona no registrada";
                                    //insertar si no existe el txtidcategoria
                                }
                                else{
                                    $respuesta = $persona->editar($idpersona, $nombre, $tipopersona, $numdocumento, $direccion, $telefono, $email);
                                    
                                    echo $respuesta ? "Persona Actualizada": "Persona no actualizada";
                                }
                                break;

        case 'mostrar':         $respuesta = $persona->mostrar($idpersona);
                                echo json_encode($respuesta);
                                break;

        case 'listar':          $respuesta = $persona->listar();
                                $datos = Array();
                                while($registro = $respuesta->fetch_object()){
                                    $datos[] = array(
                                        "0"=>'<button class="btn" onclick="mostrar('.$registro->idpersona.')">Editar</button>',
                                        "1"=>$registro->nombre,
                                        "2"=>$registro->tipopersona,
                                        "3"=>$registro->tipodocumento,
                                        "4"=>$registro->numdocumento,
                                        "5"=>$registro->direccion,
                                        "6"=>$registro->telefono,
                                        "7"=>$registro->email
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