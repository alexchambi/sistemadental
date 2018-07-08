<?php
    require_once("../models/Persona.php");

    $persona = new Persona();

    $idpersona = isset($_POST["idpersona"])? limpiarCadena($_POST["idpersona"]):"";
    $nombre =isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
    $tipopersona =isset($_POST["tipopersona"])? limpiarCadena($_POST["tipopersona"]):"";
    $sexo =isset($_POST["sexo"])? limpiarCadena($_POST["sexo"]):"";
    $tipodocumento =isset($_POST["tipodocumento"])? limpiarCadena($_POST["tipodocumento"]):"";
    $numdocumento =isset($_POST["numdocumento"])? limpiarCadena($_POST["numdocumento"]):"";
    $direccion =isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
    $telefono =isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
    $email =isset($_POST["email"])? limpiarCadena($_POST["email"]):"";

    switch ($_GET["op"]){
        case 'guardaryeditar':	if (empty($idpersona)){
                                    $rspta=$persona->insertar($nombre, $tipopersona, $sexo, $tipodocumento, $numdocumento, $direccion, $telefono, $email);
                                    echo $rspta ? "Persona registrada" : "Persona no registrada";
                                }
                                else {
                                    $rspta=$persona->editar($idpersona ,$nombre, $tipopersona, $sexo, $tipodocumento, $numdocumento, $direccion, $telefono, $email);
                                    echo $rspta ? "Persona actualizada" : "Persona no actualizda";
                                }
                                break;
        

        case 'mostrar':			$rspta=$persona->mostrar($idpersona);
                                
                                echo json_encode($rspta);
                                break;
        

        case 'listar':			$rspta=$persona->listar();
                                
                                $data= Array();

                                while ($reg=$rspta->fetch_object()){
                                    $data[]=array(
                                        "0"=>'<button class="btn btn-success"onclick="mostrar('.$reg->idpersona.')">Historia Clinica <i class="fa fa-pencil"></i></button>',
                                        "1"=>$reg->nombre,
                                        "2"=>$reg->tipopersona,
                                        "3"=>$reg->sexo,
                                        "4"=>$reg->tipodocumento,
                                        "5"=>$reg->numdocumento,
                                        "6"=>$reg->direccion,
                                        "7"=>$reg->telefono,
                                        "8"=>$reg->email
                                        );
                                }
                                $results = array(
                                    "sEcho"=>1, 
                                    "iTotalRecords"=>count($data), 
                                    "iTotalDisplayRecords"=>count($data),
                                    "aaData"=>$data);
                                echo json_encode($results);

                                break;
    }
?>