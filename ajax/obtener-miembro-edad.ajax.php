<?php


require_once "../controladores/miembros.controlador.php";
require_once "../modelos/miembros.modelo.php";

 $idMiembro= $_POST['idMiembro'];
 $item = "id";
 $valor = $idMiembro;
 $orden = "id";

// $codigo=$_POST['codigo'];
// $tipo=$_POST['tipo'];




$miem = ControladorMiembros::ctrMostrarMiembros($item, $valor, $orden);



$edad = $miem["edad"];







print($edad);





// print($ncm);
// print($edad);
// print($email);
// print($telefono);




// print($tipo);

