<?php

class ControladorMiembrosGerente{



	static public function ctrMostrarMiembrosGerente($item, $valor, $orden , $consejo){

		$tabla = "miembros";

		$respuesta = ModeloMiembrosGerente::mdlMostrarMiembrosGerente($tabla, $item, $valor, $orden, $consejo);

		return $respuesta;

	}





}