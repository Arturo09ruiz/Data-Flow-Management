$(".nuevaNombre").change(function(){

    
	var idMiembro = $("#nuevaNombre").val();

    $.ajax({
	
	
			type: "POST",
					url: "ajax/obtener-datos-miembro-obispo.ajax.php",
					data:'idMiembro=' + idMiembro ,
					dataType:"html",
					asycn:false, //el error que cometí de sintaxis, es async
						success: function (respuesta) {

                            

							// $("#g").val(respuesta);
							// var formula = $("#nuevoMedida").val();
							// var tipo = $("#g").val();

							// final = tipo +"   "+ formula;


							// $("#nuevaDescripcion").val(final);

                            // // 

					}
	

	})


	

})
