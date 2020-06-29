
/*=============================================
CARGAR LA TABLA DINÁMICA DE PRODUCTOS
=============================================*/

$.ajax({

	url: "ajax/datatable-solicitudes-obispo.ajax.php",
	success:function(respuesta){
		
		console.log("respuesta", respuesta);

	}

})

var barrio = $("#idbarrio").val();

$('.tablaSolicitudObispo').DataTable( {
    "ajax": "ajax/datatable-solicitudes-obispo.ajax.php?barrio="+barrio,
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
ELIMINAR Solicitud
=============================================*/

$(".tablaPedidos tbody").on("click", "button.btnEliminarPedido", function(){

	var idPedido = $(this).attr("idPedido");

	swal({

		title: '¿Está seguro de borrar La Solicitud?',
		text: "¡Si no lo está puede cancelar la accíón!",
		type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar Solicitud!'
        }).then(function(result) {
        if (result.value) {

        	window.location = "index.php?ruta=realizar-solicitud&idPedido="+idPedido;

        }


	})

})
	














$(".nuevaNombre").change(function(){

    
	var idMiembro = $("#nuevaNombre").val();

    $.ajax({
	
	
			type: "POST",
					url: "ajax/obtener-miembro-ncm.ajax.php",
					data:'idMiembro=' + idMiembro ,
					dataType:"html",
					asycn:false, //el error que cometí de sintaxis, es async
						success: function (respuesta) {

                            $("#ncm").val(respuesta);

					}
	

	})



    $.ajax({
	
	
        type: "POST",
                url: "ajax/obtener-miembro-nombre.ajax.php",
                data:'idMiembro=' + idMiembro ,
                dataType:"html",
                asycn:false, //el error que cometí de sintaxis, es async
                    success: function (respuesta) {

                        $("#nombre").val(respuesta);

                }


})
    



$.ajax({
	
	
    type: "POST",
            url: "ajax/obtener-miembro-edad.ajax.php",
            data:'idMiembro=' + idMiembro ,
            dataType:"html",
            asycn:false, //el error que cometí de sintaxis, es async
                success: function (respuesta) {

                    $("#edad").val(respuesta);

            }


})


$.ajax({
	
	
    type: "POST",
            url: "ajax/obtener-miembro-email.ajax.php",
            data:'idMiembro=' + idMiembro ,
            dataType:"html",
            asycn:false, //el error que cometí de sintaxis, es async
                success: function (respuesta) {

                    $("#email").val(respuesta);

            }


})


$.ajax({
	
	
    type: "POST",
            url: "ajax/obtener-miembro-telefono.ajax.php",
            data:'idMiembro=' + idMiembro ,
            dataType:"html",
            asycn:false, //el error que cometí de sintaxis, es async
                success: function (respuesta) {

                    $("#telefono").val(respuesta);

            }


})



















})




$(".tablaSolicitudObispo tbody").on("click", "button.btnVisualizarSolicitudes", function(){

	var idSolicitudes = $(this).attr("idSolicitudes");

	window.location = "index.php?ruta=visualizar-solicitudes&idSolicitudes="+idSolicitudes;


})



$(".medi").change(function(){

	var medicamento = $("#medi").val();

	$("#nuevaMedicamento").val(medicamento);



})