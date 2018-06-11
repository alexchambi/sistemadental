var tabla;

function init(){
    mostrarFormulario(false);
    listar();

    $("#formulario").on("submit", function(e){
        guardaryeditar(e);
    })

}

function limpiar(){
    $("#idpersona").val("");
    $("#nombre").val("");
    $("#tipopersona").val("");
    $("#tipodocumento").val("");
    $("#numdocumento").val("");
    $("#direccion").val("");
    $("#telefono").val("");
    $("#email").val("");
}

function mostrarFormulario(flag){
    limpiar();
    if(flag){
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("$btnGuardar").prop("disabled",false);
    }
    else{
        $("#listadoregistros").show();
        $("#formularioregistros").hide();
    }
}

function cancelarFormulario(){
    limpiar();
    mostrarFormulario(false);
}

function listar(){
    tabla = $('#tbllistado').dataTable(
        {
            /**
             * procesamiento
             * paginacion y filtrado
             * elementos de control
             */
            "aProcessing": true, 
            "aServerSide": true,
            dom: 'Bfrtip',
            buttons:    [
                            'copyHtml5',
                            'excelHtml5',
                            'csvHtml5',
                            'pdf'
                        ],
                "ajax": {
    
                        url: '../ajax/persona.php?op=listar',
                        type: "get",
                        dataType: "json",
                        error: function(e){
                            console.log(e.responseText);
                        }
                },
                /**
                 * paginacion
                 * orden de datos
                 */
                "bDestroy": true,
                "iDisplayLength": 5,
                "order": [[0, "asc"]] 
        }).DataTable();
}

function guardaryeditar(e)
{
    e.preventDefault();
    $("#btnGuardar").prop("disabled",true);
    var formData = new FormData($("#formulario")[0]);

    $.ajax({
        url: "../ajax/persona.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos)
        {
            alert(datos);
            mostrarFormulario(false);
            tabla.ajax.reload();
        }
    });

    limpiar();
}

init();