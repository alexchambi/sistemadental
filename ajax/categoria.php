<?php

	require_once "../models/Categoria.php";

	$categoria=new Categoria();

	$idcategoria=isset($_POST["idcategoria"])? limpiarCadena($_POST["idcategoria"]):"";
	$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
	$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";

	switch ($_GET["op"]){
		case 'guardaryeditar':	if (empty($idcategoria)){
									$rspta=$categoria->insertar($nombre,$descripcion);
									echo $rspta ? "Categoria registrada" : "Categoriyya no registrada";
								}
								else {
									$rspta=$categoria->editar($idcategoria,$nombre,$descripcion);
									echo $rspta ? "Categoria actualizada" : "Categoria no actualizda";
								}
								break;

		case 'desactivar':		$rspta=$categoria->desactivar($idcategoria);
								echo $rspta ? "Categoria desactivada" : "Categoria no desactivada";
								break;
		

		case 'activar':			$rspta=$categoria->activar($idcategoria);
								echo $rspta ? "Categoria activada" : "Categoria no activada";
								break;
		

		case 'mostrar':			$rspta=$categoria->mostrar($idcategoria);
								
								echo json_encode($rspta);
								break;
		

		case 'listar':			$rspta=$categoria->listar();
								
								$data= Array();

								while ($reg=$rspta->fetch_object()){
									$data[]=array(
										"0"=>($reg->condicion)?'<button onclick="mostrar('.$reg->idcategoria.')"><i class="fa fa-pencil"></i></button>'.
											' <button onclick="desactivar('.$reg->idcategoria.')"><i class="fa fa-close"></i></button>':
											' <button onclick="mostrar('.$reg->idcategoria.')"><i class="fa fa-pencil"></i></button>'.
											' <button onclick="activar('.$reg->idcategoria.')"><i class="fa fa-check"></i></button>',
										"1"=>$reg->nombre,
										"2"=>$reg->descripcion,
										"3"=>($reg->condicion)?'<span class="label bg-green">1</span>':'<span class="label bg-red">0</span>'
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