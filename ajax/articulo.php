<?php 
	require_once "../models/Articulo.php";

	$articulo=new Articulo();

	$idarticulo=isset($_POST["idarticulo"])? limpiarCadena($_POST["idarticulo"]):"";
	$idcategoria=isset($_POST["idcategoria"])? limpiarCadena($_POST["idcategoria"]):"";
	$codigo=isset($_POST["codigo"])? limpiarCadena($_POST["codigo"]):"";
	$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
	$stock=isset($_POST["stock"])? limpiarCadena($_POST["stock"]):"";
	$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";
	

	switch ($_GET["op"]){

		case 'guardaryeditar':	if (empty($idarticulo)){
									$rspta=$articulo->insertar($idcategoria,$codigo,$nombre,$stock,$descripcion);
									echo $rspta ? "Articulo registrado" : "Articulo no registrdo";
								}
								else {
									$rspta=$articulo->editar($idarticulo,$idcategoria,$codigo,$nombre,$stock,$descripcion);
									echo $rspta ? "Articulo actualizado" : "Articulo no actualizado";
								}
								break;

		case 'desactivar':		$rspta=$articulo->desactivar($idarticulo);
								echo $rspta ? "Articulo desactivado" : "Articulo no descativado";
								break;
								break;

		case 'activar':			$rspta=$articulo->activar($idarticulo);
								echo $rspta ? "Articulo activado" : "Articulo no activado";
								break;
								break;

		case 'mostrar':			$rspta=$articulo->mostrar($idarticulo);
								
								echo json_encode($rspta);
								break;
								break;

		case 'listar':			$rspta=$articulo->listar();
								$data= Array();

								while ($reg=$rspta->fetch_object()){
									$data[]=array(
										"0"=>($reg->condicion)?'<button onclick="mostrar('.$reg->idarticulo.')"><i class="fa fa-pencil"></i></button>'.
											' <button onclick="desactivar('.$reg->idarticulo.')"><i class="fa fa-close"></i></button>':
											' <button onclick="mostrar('.$reg->idarticulo.')"><i class="fa fa-pencil"></i></button>'.
											' <button onclick="activar('.$reg->idarticulo.')"><i class="fa fa-check"></i></button>',
										"1"=>$reg->nombre,
										"2"=>$reg->categoria,
										"3"=>$reg->codigo,
										"4"=>$reg->stock,
										"5"=>($reg->condicion)?'<span class="label bg-green">1</span>':'<span class="label bg-red">0</span>'
										);
								}
								$results = array(
									"sEcho"=>1, 
									"iTotalRecords"=>count($data), 
									"iTotalDisplayRecords"=>count($data),
									"aaData"=>$data);
								echo json_encode($results);

								break;

		case "selectCategoria":	require_once "../models/Categoria.php";
								$categoria = new Categoria();

								$rspta = $categoria->select();

								while ($reg = $rspta->fetch_object()){
											echo '<option value=' . $reg->idcategoria . '>' . $reg->nombre . '</option>';
								}
								break;
	}
?>