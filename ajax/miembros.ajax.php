<?php

require_once "../controladores/miembros.controlador.php";
require_once "../modelos/miembros.modelo.php";


class AjaxMiembros{


  /*=============================================
  EDITAR Miembros
  =============================================*/ 

  public $idMiembros;
  public $traerMiembros;
  public $nombreMiembros;

  public function ajaxEditarMiembros(){

    if($this->traerMiembros == "ok"){

      $item = null;
      $valor = null;
      $orden = "id";

      $respuesta = ControladorMiembros::ctrMostrarMiembros($item, $valor,
        $orden);

      echo json_encode($respuesta);


    }else if($this->nombreMiembros != ""){

      $item = "nombre";
      $valor = $this->nombreMiembros;
      $orden = "id";

      $respuesta = ControladorMiembros::ctrMostrarMiembros($item, $valor,
        $orden);

      echo json_encode($respuesta);

    }else{

      $item = "id";
      $valor = $this->idMiembros;
      $orden = "id";

      $respuesta = ControladorMiembros::ctrMostrarMiembros($item, $valor,
        $orden);

      echo json_encode($respuesta);

    }

  }

}



/*=============================================
EDITAR Miembros
=============================================*/ 

if(isset($_POST["idMiembros"])){

  $editarMiembros = new AjaxMiembros();
  $editarMiembros -> idMiembros = $_POST["idMiembros"];
  $editarMiembros -> ajaxEditarMiembros();

}

/*=============================================
TRAER Miembros
=============================================*/ 

if(isset($_POST["traerMiembros"])){

  $traerMiembros = new AjaxMiembros();
  $traerMiembros -> traerMiembros = $_POST["traerMiembros"];
  $traerMiembros -> ajaxEditarMiembros();

}

/*=============================================
TRAER Miembros
=============================================*/ 

if(isset($_POST["nombreMiembros"])){

  $traerMiembros = new AjaxMiembros();
  $traerMiembros -> nombreMiembros = $_POST["nombreMiembros"];
  $traerMiembros -> ajaxEditarMiembros();

}






