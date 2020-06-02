<?php

class ControladorMiembrosPdtEstaca{



	static public function ctrMostrarMiembrosConformeEstaca($item, $valor, $orden , $estaca){

		$tabla = "miembros";

		$respuesta = ModeloMiembrosPdtEstaca::mdlMostrarMiembrosConformeEstaca($tabla, $item, $valor, $orden, $estaca);

		return $respuesta;

	}





}