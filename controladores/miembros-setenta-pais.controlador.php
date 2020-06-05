<?php

class ControladorMiembrosSetentaPais{



	static public function ctrMostrarMiembrosSetentaPais($item, $valor, $orden , $pais){

		$tabla = "miembros";

		$respuesta = ModeloMiembrosSetentaPais::mdlMostrarMiembrosSetentaPais($tabla, $item, $valor, $orden, $pais);

		return $respuesta;

	}





}