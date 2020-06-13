<?php

class ControladorSolicitudes
{

    /*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

    // static public function ctrMostrarProductos($item, $valor, $orden)
    // {

    //     $tabla = "productos";

    //     $respuesta = ModeloProductos::mdlMostrarProductos($tabla, $item, $valor, $orden);

    //     return $respuesta;
    // }


    
    static public function ctrMostrarSolicitudesConformeBarrioObispo($item, $valor, $orden, $barrio)
    {

        $tabla = "solicitudes";

        $respuesta = ModeloSolicitudes::mdlMostrarSolicitudesConformeBarrioObispo($tabla, $item, $valor, $orden, $barrio);

        return $respuesta;
    }

    
    static public function ctrMostrarSolicitudesConformeEstaca($item, $valor, $orden, $estaca)
    {

        $tabla = "solicitudes";

        $respuesta = ModeloSolicitudes::mdlMostrarSolicitudesConformeEstaca($tabla, $item, $valor, $orden, $estaca);

        return $respuesta;
    }

    static public function ctrMostrarSolicitudesConformeConsejo($item, $valor, $orden, $consejo)
    {

        $tabla = "solicitudes";

        $respuesta = ModeloSolicitudes::mdlMostrarSolicitudesConformeConsejo($tabla, $item, $valor, $orden, $consejo);

        return $respuesta;
    }


    static public function ctrMostrarSolicitudesConformeBarrioObispoID($item, $valor, $orden, $barrio)
    {

        $tabla = "solicitudes";

        $respuesta = ModeloSolicitudes::ctrMostrarSolicitudesConformeBarrioObispoID($tabla, $item, $valor, $orden, $barrio);

        return $respuesta;
    }

    
    

    /*=============================================
	CREAR PRODUCTO 
	=============================================*/

    static public function ctrCrearSolicitudes()
    {

        if (isset($_POST["nuevaNecesidad"])) {











            $ruta = "vistas/img/informe_medico/default/anonymous.png";

            if(isset($_FILES["nuevaImagen"]["tmp_name"])){

             list($ancho, $alto) = getimagesize($_FILES["nuevaImagen"]["tmp_name"]);

             $nuevoAncho = 1024;
             $nuevoAlto = 720;

             /*=============================================
             CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
             =============================================*/

             $directorio = "vistas/img/informe_medico/".$_POST["nuevoCodigo"];

             mkdir($directorio, 0755);

             /*=============================================
             DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
             =============================================*/

             if($_FILES["nuevaImagen"]["type"] == "image/jpeg"){

                 /*=============================================
                 GUARDAMOS LA IMAGEN EN EL DIRECTORIO
                 =============================================*/

                 $aleatorio = mt_rand(100,999);

                 $ruta = "vistas/img/informe_medico/".$_POST["nuevoCodigo"]."/".$aleatorio.".jpg";

                 $origen = imagecreatefromjpeg($_FILES["nuevaImagen"]["tmp_name"]);						

                 $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                 imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                 imagejpeg($destino, $ruta);

             }

             if($_FILES["nuevaImagen"]["type"] == "image/png"){

                 /*=============================================
                 GUARDAMOS LA IMAGEN EN EL DIRECTORIO
                 =============================================*/

                 $aleatorio = mt_rand(100,999);

                 $ruta = "vistas/img/informe_medico/".$_POST["nuevoCodigo"]."/".$aleatorio.".png";

                 $origen = imagecreatefrompng($_FILES["nuevaImagen"]["tmp_name"]);						

                 $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                 imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                 imagepng($destino, $ruta);

             }

         }








//Recipe Medico

         $ruta2 = "vistas/img/informe_medico/default/anonymous.png";

         if(isset($_FILES["nuevaRecipe"]["tmp_name"])){

          list($ancho, $alto) = getimagesize($_FILES["nuevaRecipe"]["tmp_name"]);

          $nuevoAncho = 1024;
          $nuevoAlto = 720;

          /*=============================================
          CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
          =============================================*/

          $directorio = "vistas/img/recipe_medico/".$_POST["nuevoCodigo"];

          mkdir($directorio, 0755);

          /*=============================================
          DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
          =============================================*/

          if($_FILES["nuevaRecipe"]["type"] == "image/jpeg"){

              /*=============================================
              GUARDAMOS LA IMAGEN EN EL DIRECTORIO
              =============================================*/

              $aleatorio = mt_rand(100,999);

              $ruta2 = "vistas/img/recipe_medico/".$_POST["nuevoCodigo"]."/".$aleatorio.".jpg";

              $origen = imagecreatefromjpeg($_FILES["nuevaRecipe"]["tmp_name"]);						

              $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

              imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

              imagejpeg($destino, $ruta2);

          }

          if($_FILES["nuevaRecipe"]["type"] == "image/png"){

              /*=============================================
              GUARDAMOS LA IMAGEN EN EL DIRECTORIO
              =============================================*/

              $aleatorio = mt_rand(100,999);

              $ruta2 = "vistas/img/recipe_medico/".$_POST["nuevoCodigo"]."/".$aleatorio.".png";

              $origen = imagecreatefrompng($_FILES["nuevaRecipe"]["tmp_name"]);						

              $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

              imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

              imagepng($destino, $ruta2);

          }

      }







//Cedula Identidad Miembro

$ruta3 = "vistas/img/cedulas_identidad_miembro/default/anonymous.png";

if(isset($_FILES["nuevaCedula"]["tmp_name"])){

 list($ancho, $alto) = getimagesize($_FILES["nuevaCedula"]["tmp_name"]);

 $nuevoAncho = 1024;
 $nuevoAlto = 720;

 /*=============================================
 CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
 =============================================*/

 $directorio = "vistas/img/cedulas_identidad_miembro/".$_POST["nuevoCodigo"];

 mkdir($directorio, 0755);

 /*=============================================
 DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
 =============================================*/

 if($_FILES["nuevaCedula"]["type"] == "image/jpeg"){

     /*=============================================
     GUARDAMOS LA IMAGEN EN EL DIRECTORIO
     =============================================*/

     $aleatorio = mt_rand(100,999);

     $ruta3 = "vistas/img/cedulas_identidad_miembro/".$_POST["nuevoCodigo"]."/".$aleatorio.".jpg";

     $origen = imagecreatefromjpeg($_FILES["nuevaCedula"]["tmp_name"]);						

     $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

     imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

     imagejpeg($destino, $ruta3);

 }

 if($_FILES["nuevaCedula"]["type"] == "image/png"){

     /*=============================================
     GUARDAMOS LA IMAGEN EN EL DIRECTORIO
     =============================================*/

     $aleatorio = mt_rand(100,999);

     $ruta3 = "vistas/img/cedulas_identidad_miembro/".$_POST["nuevoCodigo"]."/".$aleatorio.".png";

     $origen = imagecreatefrompng($_FILES["nuevaCedula"]["tmp_name"]);						

     $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

     imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

     imagepng($destino, $ruta3);

 }

}









//PLAN AUTOSUFICIENCA 1

$ruta4 = "vistas/img/plan-autosuficiencia/default/anonymous.png";

if(isset($_FILES["nuevaPlan1"]["tmp_name"])){

 list($ancho, $alto) = getimagesize($_FILES["nuevaPlan1"]["tmp_name"]);

 $nuevoAncho = 1366;
 $nuevoAlto = 768;

 /*=============================================
 CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
 =============================================*/

 $directorio = "vistas/img/plan-autosuficiencia/".$_POST["nuevoCodigo"];

 mkdir($directorio, 0755);

 /*=============================================
 DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
 =============================================*/

 if($_FILES["nuevaPlan1"]["type"] == "image/jpeg"){

     /*=============================================
     GUARDAMOS LA IMAGEN EN EL DIRECTORIO
     =============================================*/

     $aleatorio = mt_rand(100,999);

     $ruta4 = "vistas/img/plan-autosuficiencia/".$_POST["nuevoCodigo"]."/".$aleatorio.".jpg";

     $origen = imagecreatefromjpeg($_FILES["nuevaPlan1"]["tmp_name"]);						

     $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

     imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

     imagejpeg($destino, $ruta4);

 }

 if($_FILES["nuevaPlan1"]["type"] == "image/png"){

     /*=============================================
     GUARDAMOS LA IMAGEN EN EL DIRECTORIO
     =============================================*/

     $aleatorio = mt_rand(100,999);

     $ruta4 = "vistas/img/plan-autosuficiencia/".$_POST["nuevoCodigo"]."/".$aleatorio.".png";

     $origen = imagecreatefrompng($_FILES["nuevaPlan1"]["tmp_name"]);						

     $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

     imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

     imagepng($destino, $ruta4);

 }

}






//PLAN AUTOSUFICIENCA 2

$ruta5 = "vistas/img/plan-autosuficiencia/default/anonymous.png";

if(isset($_FILES["nuevaPlan2"]["tmp_name"])){

 list($ancho, $alto) = getimagesize($_FILES["nuevaPlan2"]["tmp_name"]);

 $nuevoAncho = 1366;
 $nuevoAlto = 768;

 /*=============================================
 CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
 =============================================*/

 $directorio = "vistas/img/plan-autosuficiencia/".$_POST["nuevoCodigo"];

 mkdir($directorio, 0755);

 /*=============================================
 DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
 =============================================*/

 if($_FILES["nuevaPlan2"]["type"] == "image/jpeg"){

     /*=============================================
     GUARDAMOS LA IMAGEN EN EL DIRECTORIO
     =============================================*/

     $aleatorio = mt_rand(100,999);

     $ruta5 = "vistas/img/plan-autosuficiencia/".$_POST["nuevoCodigo"]."/".$aleatorio.".jpg";

     $origen = imagecreatefromjpeg($_FILES["nuevaPlan2"]["tmp_name"]);						

     $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

     imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

     imagejpeg($destino, $ruta5);

 }

 if($_FILES["nuevaPlan2"]["type"] == "image/png"){

     /*=============================================
     GUARDAMOS LA IMAGEN EN EL DIRECTORIO
     =============================================*/

     $aleatorio = mt_rand(100,999);

     $ruta5 = "vistas/img/plan-autosuficiencia/".$_POST["nuevoCodigo"]."/".$aleatorio.".png";

     $origen = imagecreatefrompng($_FILES["nuevaPlan2"]["tmp_name"]);						

     $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

     imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

     imagepng($destino, $ruta5);

 }

}















































































            $tabla = "solicitudes";

            $datos = array(
                "codigo" => $_POST["nuevoCodigo"],
                "ncm_miembro" => $_POST["ncm"],
                "nombre_miembro" => $_POST["nombre"],
                "edad" => $_POST["edad"],
                "email" => $_POST["email"],
                "telefono" => $_POST["telefono"],
                "idbarrio" => $_POST["idbarrio"],
                "idestaca" => $_POST["idestaca"],
                "idconsejo" => $_POST["idconsejo"],
                "idpais" => $_POST["idpais"],
                "enfermedad" => $_POST["nuevaEnfermedad"],
                "medicamento" => $_POST["nuevaMedicamento"],
                "dosis_recetada" => $_POST["nuevaDosis"],
                "duracion" => $_POST["nuevaDuracion"],
                "necesidad" => $_POST["nuevaNecesidad"],
                "Plan_Autosuficiencia_1" => $ruta4,
                "Plan_Autosuficiencia_2" => $ruta5,
                "Informe_Medico" => $ruta,
                "Recipe_Medico" => $ruta2,
				"CI" => $ruta3
                
                

            );

            $respuesta = ModeloSolicitudes::mdlIngresarSolicitudes($tabla, $datos);
            if ($respuesta == "ok") {

                echo '<script>

						swal({
							  type: "success",
							  title: "La Solicitud ha sido guardada correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "realizar-solicitud";

										}
									})

						</script>';
            }
        }
    }



    /*=============================================
	EDITAR PRODUCTO
	=============================================*/

    static public function ctrEditarProducto()
    {

        if (isset($_POST["editarDescripcion"])) {

            if (
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarDescripcion"]) &&
                preg_match('/^[0-9]+$/', $_POST["editarStock"]) &&
                preg_match('/^[0-9.]+$/', $_POST["editarPrecioCompra"]) &&
                preg_match('/^[0-9.]+$/', $_POST["editarPrecioVenta"])
            ) {

                /*=============================================
				VALIDAR IMAGEN
				=============================================*/

                $ruta = $_POST["imagenActual"];

                if (isset($_FILES["editarImagen"]["tmp_name"]) && !empty($_FILES["editarImagen"]["tmp_name"])) {

                    list($ancho, $alto) = getimagesize($_FILES["editarImagen"]["tmp_name"]);

                    $nuevoAncho = 500;
                    $nuevoAlto = 500;

                    /*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

                    $directorio = "vistas/img/productos/" . $_POST["editarCodigo"];

                    /*=============================================
					PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
					=============================================*/

                    if (!empty($_POST["imagenActual"]) && $_POST["imagenActual"] != "vistas/img/productos/default/anonymous.png") {

                        unlink($_POST["imagenActual"]);
                    } else {

                        mkdir($directorio, 0755);
                    }

                    /*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

                    if ($_FILES["editarImagen"]["type"] == "image/jpeg") {

                        /*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

                        $aleatorio = mt_rand(100, 999);

                        $ruta = "vistas/img/productos/" . $_POST["editarCodigo"] . "/" . $aleatorio . ".jpg";

                        $origen = imagecreatefromjpeg($_FILES["editarImagen"]["tmp_name"]);

                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                        imagejpeg($destino, $ruta);
                    }

                    if ($_FILES["editarImagen"]["type"] == "image/png") {

                        /*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

                        $aleatorio = mt_rand(100, 999);

                        $ruta = "vistas/img/productos/" . $_POST["editarCodigo"] . "/" . $aleatorio . ".png";

                        $origen = imagecreatefrompng($_FILES["editarImagen"]["tmp_name"]);

                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                        imagepng($destino, $ruta);
                    }
                }

                $tabla = "productos";

                $datos = array(
                    "id_categoria" => $_POST["editarCategoria"],
                    "codigo" => $_POST["editarCodigo"],
                    "descripcion" => $_POST["editarDescripcion"],
                    "stock" => $_POST["editarStock"],
                    "precio_compra" => $_POST["editarPrecioCompra"],
                    "precio_venta" => $_POST["editarPrecioVenta"],
                    "imagen" => $ruta
                );

                $respuesta = ModeloProductos::mdlEditarProducto($tabla, $datos);

                if ($respuesta == "ok") {

                    echo '<script>

						swal({
							  type: "success",
							  title: "El producto ha sido editado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "productos";

										}
									})

						</script>';
                }
            } else {

                echo '<script>

					swal({
						  type: "error",
						  title: "¡El producto no puede ir con los campos vacíos o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "productos";

							}
						})

			  	</script>';
            }
        }
    }

    /*=============================================
	BORRAR PRODUCTO
	=============================================*/
    static public function ctrEliminarProducto()
    {

        if (isset($_GET["idProducto"])) {

            $tabla = "productos";
            $datos = $_GET["idProducto"];

            if ($_GET["imagen"] != "" && $_GET["imagen"] != "vistas/img/productos/default/anonymous.png") {

                unlink($_GET["imagen"]);
                rmdir('vistas/img/productos/' . $_GET["codigo"]);
            }

            $respuesta = ModeloProductos::mdlEliminarProducto($tabla, $datos);

            if ($respuesta == "ok") {

                echo '<script>

				swal({
					  type: "success",
					  title: "El producto ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "productos";

								}
							})

				</script>';
            }
        }
    }

    /*=============================================
	MOSTRAR SUMA VENTAS
	=============================================*/

    static public function ctrMostrarSumaVentas()
    {

        $tabla = "productos";

        $respuesta = ModeloProductos::mdlMostrarSumaVentas($tabla);

        return $respuesta;
    }
}
