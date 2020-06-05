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



$email = $miem["email"];







print($email);





// print($ncm);
// print($edad);
// print($email);
// print($telefono);




// print($tipo);

