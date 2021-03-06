/*=============================================
CARGAR LA TABLA DINÁMICA DE MIEMBROS
=============================================*/

$.ajax({


	url: 'ajax/datatable-miembros.ajax.php',
	success:function(respuesta){
		
		console.log("respuesta", respuesta);

	}

})

var barrio = $("#idbarrio").val();

$('.tablaMiembros').DataTable( {
    "ajax": "ajax/datatable-miembros.ajax.php?barrio="+barrio,
    "deferRender": true,
	"retrieve": true,
	"processing": true,
	 "language": {

			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
			"sFirst":    "Primero",
			"sLast":     "Último",
			"sNext":     "Siguiente",
			"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}

	}

} );




/*=============================================
EDITAR Miembros
=============================================*/

$(".tablaMiembros tbody").on("click", "button.btnEditarMiembros", function(){

	var idMiembros = $(this).attr("idMiembros");
	
	var datos = new FormData();
    datos.append("idMiembros", idMiembros);

     $.ajax({

      url:"ajax/miembros.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
         
           $("#editarNCM").val(respuesta["ncm"]);

           $("#editarNombre").val(respuesta["nombre"]);

           $("#editarEmail").val(respuesta["email"]);

           $("#editarTelefono").val(respuesta["telefono"]);

         

      }

  })

})

/*=============================================
ELIMINAR Miembros
=============================================*/

$(".tablaMiembros tbody").on("click", "button.btnEliminarMiembros", function(){

	var idMiembros = $(this).attr("idMiembros");

	
	swal({

		title: '¿Está seguro de borrar el Miembro?',
		text: "¡Si no lo está puede cancelar la accíón!",
		type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar Miembro!'
        }).then(function(result) {
        if (result.value) {

        	window.location = "index.php?ruta=miembros&idMiembros="+idMiembros;

        }


	})

})
	
