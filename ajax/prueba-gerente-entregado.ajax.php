<?php
require_once "../controladores/entregar.controlador.php";
require_once "../modelos/entregar.modelo.php";



 $idSolicitudes = $_POST['idSolicitudes'];
 $tabla ="entregar";
 $datos = $idSolicitudes;

// $codigo=$_POST['codigo'];
// $tipo=$_POST['tipo'];


 print($datos); 

 $respuesta = ModeloEntregar::mdlEntregar($tabla, $datos);

// print($codigo);
// print($tipo);



