<?php

require_once "../controladores/cabeza.controlador.php";
require_once "../modelos/cabeza.modelo.php";


class AjaxCabeza{

  /*=============================================
  EDITAR CABEZA
  =============================================*/ 

  public $idCabeza;
  public $traerCabeza;
  public $nombreCabeza;

  public function ajaxEditarCabeza(){

    if($this->traerCabeza == "ok"){

      $item = null;
      $valor = null;
      $orden = "id";

      $respuesta = ControladorCabeza::ctrMostrarCabeza($item, $valor,
        $orden);

      echo json_encode($respuesta);


    }else if($this->nombreCabeza != ""){

      $item = "nombre";
      $valor = $this->nombreCabeza;
      $orden = "id";

      $respuesta = ControladorCabeza::ctrMostrarCabeza($item, $valor,
        $orden);

      echo json_encode($respuesta);

    }else{

      $item = "id";
      $valor = $this->idCabeza;
      $orden = "id";

      $respuesta = ControladorCabeza::ctrMostrarCabeza($item, $valor,
        $orden);

      echo json_encode($respuesta);

    }

  }

}


/*=============================================
EDITAR CABEZA
=============================================*/ 

if(isset($_POST["idCabeza"])){

  $editarCabeza = new AjaxCabeza();
  $editarCabeza -> idCabeza = $_POST["idCabeza"];
  $editarCabeza -> ajaxEditarCabeza();

}

/*=============================================
TRAER CABEZA
=============================================*/ 

if(isset($_POST["traerCabeza"])){

  $traerCabeza = new AjaxCabeza();
  $traerCabeza -> traerCabeza = $_POST["traerCabeza"];
  $traerCabeza -> ajaxEditarCabeza();

}

/*=============================================
TRAER CABEZA
=============================================*/ 

if(isset($_POST["nombreCabeza"])){

  $traerCabeza = new AjaxCabeza();
  $traerCabeza -> nombreCabeza = $_POST["nombreCabeza"];
  $traerCabeza -> ajaxEditarCabeza();

}






