<?php
require_once "../controladores/solicitudes.controlador.php";
require_once "../modelos/solicitudes.modelo.php";



 $id = $_POST['id'];
 $tabla ="solicitudes";
 $datos = $id;

// $codigo=$_POST['codigo'];
// $tipo=$_POST['tipo'];


 print($datos); 

 $respuesta = ModeloSolicitudes::mdlEliminarSolicitudes($tabla, $datos);

// print($codigo);
// print($tipo);



