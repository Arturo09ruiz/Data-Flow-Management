<?php

class ControladorMiembrosGerente{



	static public function ctrMostrarMiembrosGerente($item, $valor, $orden , $consejo){

		$tabla = "miembros";

		$respuesta = ModeloMiembrosGerente::mdlMostrarMiembrosGerente($tabla, $item, $valor, $orden, $consejo);

		return $respuesta;

	}

	static public function ctrMostrarMiembros($item, $valor, $orden , $ncm){

		$tabla = "miembros";

		$respuesta = ModeloMiembrosGerente::mdlMostrarMiembros($tabla, $item, $valor, $orden, $ncm);

		return $respuesta;

	}






}