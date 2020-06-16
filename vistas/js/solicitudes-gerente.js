

$.ajax({

	url: "ajax/datatable-solicitudes-gerente.ajax.php",
	success:function(respuesta){
		
		console.log("respuesta", respuesta);

	}

})



var consejo = $("#idconsejo").val();


$('.tablaSolicitudGerente').DataTable( {
    "ajax": "ajax/datatable-solicitudes-gerente.ajax.php?consejo="+consejo,
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


$(".tablaSolicitudGerente tbody").on("click", "button.btnVisualizarSolicitudesGerente", function(){

	var idSolicitudes = $(this).attr("idSolicitudes");

	window.location = "index.php?ruta=visualizar-solicitudes&idSolicitudes="+idSolicitudes;


	 
})





$(".aprobacion_gerente").click(function(){

	var boton = $(".boton_aprobacion_gerente").val();

	if(boton == 1){

	$(this).removeClass("aprobacion_gerente form-control btn btn-info");

	$(this).addClass("aprobacion_gerente form-control btn btn-danger");

	$("#aprobacion_gerente").html('Desaprobado');
	$("#boton_aprobacion_gerente").val(2);



	}else if(boton == 0){

	$(this).removeClass("aprobacion_gerente form-control btn btn-info");

	$(this).addClass("aprobacion_gerente form-control btn btn-success");

	$("#aprobacion_gerente").html('Aprobado');

		$("#boton_aprobacion_gerente").val(1);
		
	}else if(boton == 2){
		
	$(this).removeClass("aprobacion_gerente form-control btn btn-danger");

	$(this).addClass("aprobacion_gerente form-control btn btn-success");

	$("#aprobacion_gerente").html('Aprobado');

		$("#boton_aprobacion_gerente").val(1);
	}

})


$(".aprobacion_gerente_2").click(function(){

	var boton = $(".boton_aprobacion_gerente_2").val();

	if(boton == 1){

	$(this).removeClass("aprobacion_gerente_2 form-control btn btn-info");

	$(this).addClass("aprobacion_gerente_2 form-control btn btn-danger");

	$("#aprobacion_gerente_2").html('Desaprobado');

	$("#boton_aprobacion_gerente_2").val(2);



	}else if(boton == 0){

	$(this).removeClass("aprobacion_gerente_2 form-control btn btn-info");

	$(this).addClass("aprobacion_gerente_2 form-control btn btn-success");

	$("#aprobacion_gerente_2").html('Aprobado');

		$("#boton_aprobacion_gerente_2").val(1);
		
	}else if(boton == 2){
		
	$(this).removeClass("aprobacion_gerente_2 form-control btn btn-danger");

	$(this).addClass("aprobacion_gerente_2 form-control btn btn-success");

	$("#aprobacion_gerente_2").html('Aprobado');

		$("#boton_aprobacion_gerente_2").val(1);
	}

})





$(".cambios_gerente").click(function(){
	var boton = $(".boton_aprobacion_gerente").val();

	if(boton == 1){
		var id = $(".id_solicitud").val();
		var aprobacion = $(".boton_aprobacion_gerente").val();
		var comentarios = $(".comentarios_gerente").val();

		document.getElementById("id").value = id;
		document.getElementById("aprobacion").value = aprobacion;
		document.getElementById("comentarios").value = comentarios;

		document.forms["prueba-guardar-estado-aprobado"].submit();

	}else if(boton ==2){
		var id = $(".id_solicitud").val();
		var codigo = $(".codigo").val();
		var ncm = $(".ncm").val();
		var nombre = $(".nombre").val();
		var edad = $(".edad").val();
		var email = $(".email").val();
		var telefono = $(".telefono").val();
		var idbarrio = $(".idbarrio").val();
		var idestaca = $(".idestaca").val();
		var idconsejo = $(".idconsejo").val();
		var idpais = $(".idpais").val();
		var enfermedad = $(".enfermedad").val();
		var medicamento = $(".medicamento").val();
		var dosis = $(".dosis").val();
		var duracion = $(".duracion").val();
		var necesidad = $(".necesidad").val();
		var pa1 = $(".pa1").val();
		var pa2 = $(".pa2").val();
		var im = $(".im").val();
		var rm = $(".rm").val();
		var ci = $(".ci").val();
		var aprobacion = $(".boton_aprobacion_gerente").val();
		var comentarios = $(".comentarios_gerente").val();
		var fecha_solicitud = $(".fecha_solicitud").val();



		document.getElementById("id").value = id;
		document.getElementById("cod").value = codigo;
		document.getElementById("ncm").value = ncm;
		document.getElementById("nombre").value = nombre;
		document.getElementById("edad").value = edad;
		document.getElementById("email").value = email;
		document.getElementById("telefono").value = telefono;
		document.getElementById("barrioid").value = idbarrio;
		document.getElementById("idestaca").value = idestaca;
		document.getElementById("idconsejo").value = idconsejo;
		document.getElementById("idpais").value = idpais;
		document.getElementById("enfermedad").value = enfermedad;
		document.getElementById("medicamento").value = medicamento;
		document.getElementById("dosis").value = dosis;
		document.getElementById("duracion").value = duracion;
		document.getElementById("necesidad").value = necesidad;
		document.getElementById("pa1").value = pa1;
		document.getElementById("pa2").value = pa2;
		document.getElementById("im").value = im;
		document.getElementById("rm").value = rm;
		document.getElementById("ci").value = ci;
		document.getElementById("aprobacion_g").value = aprobacion;
		document.getElementById("comentarios_g").value = comentarios;
		document.getElementById("fecha_solicitud").value = fecha_solicitud;


		
		

		swal({

			title: '¿Esta Seguro de Desaprobar la Solicitud?',
			text: "¡Si no lo está puede cancelar la accíón!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			cancelButtonText: 'Cancelar',
			confirmButtonText: 'Si, Desaprobar!'
		}).then(function (result) {
			if (result.value) {

				$.ajax({
						type: "POST",
								url: "ajax/desaprobar-solicitud-gerente.ajax.php",
								data:'id=' + id ,
								dataType:"html",
								asycn:false, //el error que cometí de sintaxis, es async
									success: function (respuesta) {

									 document.forms["prueba-desaprobado-gerente"].submit();
				
							
						}
				
			
				})
			


				
	
	


		


				// window.location = "index.php?ruta=local&idlocal=" + idlocal;








			

			}});



		














	
	








		








	}









})


$(".cambios_gerente_2").click(function(){
	var boton = $(".boton_aprobacion_gerente_2").val();

	if(boton == 1){
		var id = $(".id_solicitud").val();
		var aprobacion = $(".boton_aprobacion_gerente_2").val();
		var comentarios = $(".comentarios_gerente_2").val();

		document.getElementById("id").value = id;
		document.getElementById("aprobacion").value = aprobacion;
		document.getElementById("comentarios").value = comentarios;

		document.forms["prueba-guardar-estado-aprobado"].submit();

	}else if(boton ==2){
		var id = $(".id_solicitud").val();
		var codigo = $(".codigo").val();
		var ncm = $(".ncm").val();
		var nombre = $(".nombre").val();
		var edad = $(".edad").val();
		var email = $(".email").val();
		var telefono = $(".telefono").val();
		var idestaca = $(".idestaca").val();
		var idconsejo = $(".idconsejo").val();
		var idpais = $(".idpais").val();
		var enfermedad = $(".enfermedad").val();
		var medicamento = $(".medicamento").val();
		var dosis = $(".dosis").val();
		var duracion = $(".duracion").val();
		var necesidad = $(".necesidad").val();
		var pa1 = $(".pa1").val();
		var pa2 = $(".pa2").val();
		var im = $(".im").val();
		var rm = $(".rm").val();
		var ci = $(".ci").val();
		var aprobacion = $(".boton_aprobacion_gerente_2").val();
		var comentarios = $(".comentarios_gerente_2").val();
		var fecha_solicitud = $(".fecha_solicitud").val();



		document.getElementById("id").value = id;
		document.getElementById("cod").value = codigo;
		document.getElementById("ncm").value = ncm;
		document.getElementById("nombre").value = nombre;
		document.getElementById("edad").value = edad;
		document.getElementById("email").value = email;
		document.getElementById("telefono").value = telefono;
		document.getElementById("idestaca").value = idestaca;
		document.getElementById("idconsejo").value = idconsejo;
		document.getElementById("idpais").value = idpais;
		document.getElementById("enfermedad").value = enfermedad;
		document.getElementById("medicamento").value = medicamento;
		document.getElementById("dosis").value = dosis;
		document.getElementById("duracion").value = duracion;
		document.getElementById("necesidad").value = necesidad;
		document.getElementById("pa1").value = pa1;
		document.getElementById("pa2").value = pa2;
		document.getElementById("im").value = im;
		document.getElementById("rm").value = rm;
		document.getElementById("ci").value = ci;
		document.getElementById("aprobacion_g").value = aprobacion;
		document.getElementById("comentarios_g").value = comentarios;
		document.getElementById("fecha_solicitud").value = fecha_solicitud;


		
		

		swal({

			title: '¿Esta Seguro de Desaprobar la Solicitud?',
			text: "¡Si no lo está puede cancelar la accíón!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			cancelButtonText: 'Cancelar',
			confirmButtonText: 'Si, Desaprobar!'
		}).then(function (result) {
			if (result.value) {

				$.ajax({
						type: "POST",
								url: "ajax/desaprobar-solicitud-gerente.ajax.php",
								data:'id=' + id ,
								dataType:"html",
								asycn:false, //el error que cometí de sintaxis, es async
									success: function (respuesta) {

									 document.forms["prueba-desaprobado-gerente"].submit();
				
							
						}
				
			
				})
			


				
	
	


		


				// window.location = "index.php?ruta=local&idlocal=" + idlocal;








			

			}});



		














	
	








		








	}









})

