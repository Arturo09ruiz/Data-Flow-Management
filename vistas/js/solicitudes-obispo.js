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
