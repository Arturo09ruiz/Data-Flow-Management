


$.ajax({

	url: "ajax/datatable-solicitudes-por-entregar-gerente.ajax.php",
	success:function(respuesta){
		
		console.log("respuesta", respuesta);

	}

})



var consejo = $("#idconsejo").val();


$('.tablaSolicitudPorEntregarGerente').DataTable( {
    "ajax": "ajax/datatable-solicitudes-por-entregar-gerente.ajax.php?consejo="+consejo,
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


$(".tablaSolicitudPorEntregarGerente tbody").on("click", "button.btnVisualizarSolicitudesGerente", function(){

	var idSolicitudes = $(this).attr("idSolicitudes");

	window.location = "index.php?ruta=visualizar-solicitudes-entregar&idSolicitudes="+idSolicitudes;


	 
})

$(".tablaSolicitudPorEntregarGerente tbody").on("click", "button.btnEntregarSolicitud", function(){

	var idSolicitudes = $(this).attr("idSolicitudes");

	var datos = new FormData();
	datos.append("idSolicitudes", idSolicitudes);
	
	var codigo = $(this).attr("codigo");
	var ncm = $(this).attr("ncm");
	var nombre = $(this).attr("nombre");
	var edad = $(this).attr("edad");
	var email = $(this).attr("email");
	var telefono = $(this).attr("telefono");
	var idbarrio = $(this).attr("idbarrio");
	var idestaca = $(this).attr("idestaca");
	var idconsejo = $(this).attr("idconsejo");
	var idpais = $(this).attr("idpais");
	var enfermedad = $(this).attr("enfermedad");
	var medicamento = $(this).attr("medicamento");
	var dosis = $(this).attr("dosis_recetada");
	var duracion = $(this).attr("duracion");
	var necesidad = $(this).attr("necesidad");
	var pa1 = $(this).attr("pa1");
	var pa2 = $(this).attr("pa2");
	var im = $(this).attr("im");
	var rm = $(this).attr("rm");
	var ci = $(this).attr("ci");
	var aprobacion_gerente = $(this).attr("aprobacion_gerente");
	var comentarios_gerente = $(this).attr("comentarios_gerente");
	var aprobacion_asesor = $(this).attr("aprobacion_asesor");
	var comentarios_asesor = $(this).attr("comentarios_asesor");
	var aprobacion_finanzas = $(this).attr("aprobacion_finanzas");
	var comentarios_finanzas = $(this).attr("comentarios_finanzas");
	var fecha_solicitud = $(this).attr("fecha_solicitud");


	


		swal({

			title: 'Desea Reactivar el Pedido?',
			text: "¡Si no lo está puede cancelar la accíón!",
			type: 'success',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			cancelButtonText: 'Cancelar',
			confirmButtonText: 'Si!'
		}).then(function (result) {
			if (result.value) {

				$.ajax({
					// url: "ajax/prueba.ajax.php",
					// method: "POST",
					// data: datos,
					// cache: false,
					// contentType: false,
					// processData: false,
					 // dataType: "json",
				
				
						type: "POST",
								url: "ajax/prueba-gerente-entregado.ajax.php",
								data:'idSolicitudes=' + idSolicitudes ,
								dataType:"html",
								asycn:false, //el error que cometí de sintaxis, es async
									success: function (respuesta) {

										
	// Traer Datos a los Inputs
	document.getElementById("codigo").value = codigo;
	document.getElementById("ncm").value = ncm;
	document.getElementById("nombre").value = nombre;
	document.getElementById("edad").value = edad;
	document.getElementById("email").value = email;
	document.getElementById("telefono").value = telefono;
	document.getElementById("idb").value = idbarrio;
	document.getElementById("ide").value = idestaca;
	document.getElementById("idc").value = idconsejo;
	document.getElementById("idp").value = idpais;
	document.getElementById("enfermedad").value = enfermedad;
	document.getElementById("medi").value = medicamento;
	document.getElementById("dosis").value = dosis;
	document.getElementById("duracion").value = duracion;
	document.getElementById("necesidad").value = necesidad;
	document.getElementById("pa1").value = pa1;
	document.getElementById("pa2").value = pa2;
	document.getElementById("im").value = im;
	document.getElementById("rm").value = rm;
	document.getElementById("ci").value = ci;
	document.getElementById("aprobacion_gerente").value = aprobacion_gerente;
	document.getElementById("comentarios_gerente").value = comentarios_gerente;
	document.getElementById("aprobacion_asesor").value = aprobacion_asesor;
	document.getElementById("comentarios_asesor").value = comentarios_asesor;
	document.getElementById("aprobacion_finanzas").value = aprobacion_finanzas;
	document.getElementById("comentarios_finanzas").value = comentarios_finanzas;
	document.getElementById("fecha_solicitud").value = fecha_solicitud;





	


									 document.forms["prueba-entregado"].submit();
				
							
						}
				
			
				})
			


				
	
	


		


				// window.location = "index.php?ruta=local&idlocal=" + idlocal;








			

			}});


		})
	 














