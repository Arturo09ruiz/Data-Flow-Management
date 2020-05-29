
$.ajax({

    url: "ajax/datatable-cabeza.ajax.php",
    success: function (respuesta) {

        console.log("respuesta", respuesta);

    }

})

var perfilOculto = $("#perfilOculto").val();
var barrio = $("#idbarrio").val();


$('.tablaCabeza').DataTable({
    "ajax": "ajax/datatable-cabeza.ajax.php?barrio=" + barrio,
    "deferRender": true,
    "retrieve": true,
    "processing": true,
    "language": {

        "sProcessing": "Procesando...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ningún dato disponible en esta tabla",
        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix": "",
        "sSearch": "Buscar:",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }

    }

});

/*=============================================
EDITAR Cabeza
=============================================*/

$(".tablaCabeza tbody").on("click", "button.btnEditarCabeza", function () {

    var idCabeza = $(this).attr("idCabeza");

    var datos = new FormData();
    datos.append("idCabeza", idCabeza);

    $.ajax({

        url: "ajax/cabeza.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) {


            $("#id").val(respuesta["id"]);



            $("#editarNCM").val(respuesta["ncm"]);
            $("#editarNombre").val(respuesta["nombre"]);
            $("#editarFechaNacimiento").val(respuesta["fecha_nacimiento"]);
            $("#editarMiembros").val(respuesta["miembros_de_la_familia"]);






        }

    })

})

/*=============================================
ELIMINAR CABEZA
=============================================*/

$(".tablaCabeza tbody").on("click", "button.btnEliminarCabeza", function () {

    var idCabeza = $(this).attr("idCabeza");

    swal({

        title: '¿Está seguro de borrar La Cabeza de Familia?',
        text: "¡Si no lo está puede cancelar la accíón!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar Cabeza de Familia!'
    }).then(function (result) {
        if (result.value) {

            window.location = "index.php?ruta=cabezas-de-familia&idCabeza=" + idCabeza;

        }


    })

})

