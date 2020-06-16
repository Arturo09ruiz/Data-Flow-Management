

$.ajax({

	url: "ajax/datatable-solicitudes-desaprobadas-obispo.ajax.php",
	success:function(respuesta){
		
		console.log("respuesta", respuesta);

	}

})



var barrio = $("#idbarrio").val();


$('.tablaSolicitudDesaprobadaObispo').DataTable( {
    "ajax": "ajax/datatable-solicitudes-desaprobadas-obispo.ajax.php?barrio="+barrio,
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



$(".tablaSolicitudDesaprobadaObispo tbody").on("click", "button.btnVisualizarSolicitudesObispo", function(){

	var idSolicitudes = $(this).attr("idSolicitudes");

	window.location = "index.php?ruta=visualizar-solicitudes-desaprobadas&idSolicitudes="+idSolicitudes;


	 
})














