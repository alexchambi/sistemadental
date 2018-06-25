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

    switch ($_GET["op"]){
        case 'guardaryeditar':	if (empty($idpersona)){
                                    $rspta=$persona->insertar($nombre, $tipopersona, $tipodocumento, $numdocumento, $direccion, $telefono, $email);
                                    echo $rspta ? "Persona registrada" : "Persona no registrada";
                                }
                                else {
                                    $rspta=$persona->editar($idpersona ,$nombre, $tipopersona, $tipodocumento, $numdocumento, $direccion, $telefono, $email);
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
                                        "0"=>'<button onclick="mostrar('.$reg->idpersona.')"><i class="fa fa-pencil"></i></button>',
                                        "1"=>$reg->nombre,
                                        "2"=>$reg->tipopersona,
                                        "3"=>$reg->tipodocumento,
                                        "4"=>$reg->numdocumento,
                                        "5"=>$reg->direccion,
                                        "6"=>$reg->telefono,
                                        "7"=>$reg->email
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