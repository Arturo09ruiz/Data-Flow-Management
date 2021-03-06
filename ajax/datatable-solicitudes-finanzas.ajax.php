<?php

require_once "../controladores/solicitudes.controlador.php";
require_once "../modelos/solicitudes.modelo.php";

require_once "../controladores/barrios.controlador.php";
require_once "../modelos/barrios.modelo.php";


require_once "../controladores/estaca.controlador.php";
require_once "../modelos/estaca.modelo.php";


require_once "../controladores/consejo.controlador.php";
require_once "../modelos/consejo.modelo.php";


class TablaSolicitudesFinanzas{

 	/*=============================================
 	 MOSTRAR LA TABLA DE SOLICITUDES
  	=============================================*/ 

	public function mostrarTablaSolicitudesFinanzas(){

		$item = null;
    	$valor = null;
		$orden = "id";
        $pais = $_GET["pais"];

  		$solicitudes = ControladorSolicitudes::ctrMostrarSolicitudesConformePais($item, $valor, $orden, $pais);	

  		if(count($solicitudes) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($solicitudes); $i++){

		 
		
            $item = "id";
            $orden = "id";
            $valor = $solicitudes[$i]["idbarrio"];

            $barrios = ControladorBarrios::ctrMostrarBarrios($item, $valor, $orden);

			$botones =  "<div class='btn-group'><button class='btn btn-info btnVisualizarSolicitudesFinanzas' idSolicitudes='".$solicitudes[$i]["id"]."' '><i class='fa fa-eye'></i></button></div>"; 





            $item = "id";
            $orden = "id";
            $valor = $solicitudes[$i]["idestaca"];

            $estaca = ControladorEstaca::ctrMostrarEstaca($item, $valor, $orden);


            




            $item = "id";
            $orden = "id";
            $valor = $solicitudes[$i]["idconsejo"];

            $con = ControladorConsejo::ctrMostrarConsejo($item, $valor, $orden);

if($solicitudes[$i]["necesidad"] == "Normal"){
	$ne = "<button class='btn btn-success btn-block'>Normal</button>";
}else if($solicitudes[$i]["necesidad"] == "Urgente"){
	$ne = "<button class='btn btn-warning btn-block'>Urgente</button>";
}else if($solicitudes[$i]["necesidad"] == "Emergencia"){
	$ne = "<button class='btn btn-block btn-danger'>Emergencia</button>";

}

if($solicitudes[$i]["aprobacion_finanzas"] == 1){
	$a = "<button class='btn btn-success btn-block'>Aprobado</button>";
}else if($solicitudes[$i]["aprobacion_finanzas"] == 2){
	$a = "<button class='btn btn-warning btn-block'>Desaprobado</button>";
}else{
	$a = "<button class='btn btn-warning btn-block'>Sin Aprobar</button>";

}
        

        




  		
		 
		  	$datosJson .='[
			      "'.($i+1).'",
				  "'.$solicitudes[$i]["codigo"].'",
				  "'.$ne.'",
                  "'.$a.'",
                  "'.$barrios["nombre"].'",
                  "'.$estaca["nombre"].'",
                  "'.$con["nombre"].'",
				  "'.$botones.'"

			    ],';

		  }

		  $datosJson = substr($datosJson, 0, -1);

		 $datosJson .=   '] 

		 }';
		
		echo $datosJson;


	}




}

/*=============================================
ACTIVAR TABLA DE Solicitudes
=============================================*/ 
$activarSolicitudesFinanzas = new TablaSolicitudesFinanzas();
$activarSolicitudesFinanzas -> mostrarTablaSolicitudesFinanzas();

