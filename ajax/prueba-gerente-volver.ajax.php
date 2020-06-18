<?php
require_once "../controladores/desaprobar.controlador.php";
require_once "../modelos/desaprobar.modelo.php";



 $idSolicitudes = $_POST['idSolicitudes'];
 $tabla ="desaprobado";
 $datos = $idSolicitudes;

// $codigo=$_POST['codigo'];
// $tipo=$_POST['tipo'];


 print($datos); 

 $respuesta = ModeloDesaprobar::mdlActivarSolicitudes($tabla, $datos);

// print($codigo);
// print($tipo);



