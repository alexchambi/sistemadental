var tabla;

	function init(){
		mostrarform(false);
		listar();

		$("#formulario").on("submit",function(e)
		{
			guardaryeditar(e);	
		})
	}

	function limpiar(){
        $("#nombre").val("");
		$("#tipopersona").val("");
		$("#sexo").val("");
        $("#tipodocumento").val("");
        $("#numdocumento").val("");
        $("#direccion").val("");
        $("#telefono").val("");
        $("#email").val("");
		$("#idpersona").val("");
	}

	function mostrarform(flag){
		limpiar();
		if (flag){
			$("#listadoregistros").hide();
			$("#formularioregistros").show();
			$("#btnGuardar").prop("disabled",false);
			$("#btnagregar").hide();
		}

		else{
			$("#listadoregistros").show();
			$("#formularioregistros").hide();
			$("#btnagregar").show();
		}
	}

	function cancelarform(){
		limpiar();
		mostrarform(false);
	}

	function listar(){
		tabla=$('#tbllistado').dataTable(
		{
			"aProcessing": true,//Activamos el procesamiento del datatables
			"aServerSide": true,//Paginación y filtrado realizados por el servidor
			dom: 'Bfrtip',//Definimos los elementos del control de tabla
			buttons: [		          
						'copyHtml5',
						'excelHtml5',
						'csvHtml5',
						'pdf'
					],
			"ajax":
					{
						url: '../ajax/historia.php?op=listar',
						type : "get",
						dataType : "json",						
						error: function(e){
							console.log(e.responseText);	
						}
					},
			"bDestroy": true,
			"iDisplayLength": 10,//Paginación
			"order": [[ 0, "desc" ]]//Ordenar (columna,orden)
		}).DataTable();
	}
	

	function guardaryeditar(e){
		e.preventDefault(); 
		$("#btnGuardar").prop("disabled",true);
		var formData = new FormData($("#formulario")[0]);

		$.ajax({
			url: "../ajax/historia.php?op=guardaryeditar",
			type: "POST",
			data: formData,
			contentType: false,
			processData: false,

			success: function(datos)
			{                    
				bootbox.alert(datos);	          
				mostrarform(false);
				tabla.ajax.reload();
			}

		});
		limpiar();
	}

	function mostrar(idpersona){
		$.post("../ajax/historia.php?op=mostrar",{idpersona : idpersona}, function(data, status)
		{
			data = JSON.parse(data);		
			mostrarform(true);

            $("#nombre").val(data.nombre);
			$("#tipopersona").val(data.tipopersona);
			$("#sexo").val(data.sexo);
            $("#tipodocumento").val(data.tipodocumento);
            $("#numdocumento").val(data.numdocumento);
            $("#direccion").val(data.direccion);
            $("#telefono").val(data.telefono);
            $("#email").val(data.email);
            $("#idpersona").val(data.idpersona);

		})
	}


init();