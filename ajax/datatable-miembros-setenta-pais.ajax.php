<?php

require_once "../controladores/miembros-setenta-pais.controlador.php";
require_once "../modelos/miembros-setenta-pais.modelo.php";


require_once "../controladores/barrios.controlador.php";
require_once "../modelos/barrios.modelo.php";

require_once "../controladores/pais.controlador.php";
require_once "../modelos/pais.modelo.php";

require_once "../controladores/consejo.controlador.php";
require_once "../modelos/consejo.modelo.php";

require_once "../controladores/estaca.controlador.php";
require_once "../modelos/estaca.modelo.php";

class TablaMiembrosSetentaPais{

 	/*=============================================
 	 MOSTRAR LA TABLA DE MIEMBROS
  	=============================================*/ 

	public function mostrarTablaMiembrosSetentaPais(){

		$item = null;
    	$valor = null;
		$orden = "id";
        $pais = $_GET["pais"];

  		$miembrospais = ControladorMiembrosSetentaPais::ctrMostrarMiembrosSetentaPais($item, $valor, $orden, $pais);	

  		if(count($miembrospais) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($miembrospais); $i++){

		 
		
            $item = "id";
            $orden = "id";
            $valor = $miembrospais[$i]["idbarrio"];

            $barrios = ControladorBarrios::ctrMostrarBarrios($item, $valor, $orden);
         




            $item = "id";
            $orden = "id";
            $valor = $miembrospais[$i]["idestaca"];

            $estacas = ControladorEstaca::ctrMostrarEstaca($item, $valor, $orden);
		 



            $item = "id";
            $orden = "id";
            $valor = $miembrospais[$i]["idconsejo"];

            $consejos = ControladorConsejo::ctrMostrarConsejo($item, $valor, $orden);
		 






            

		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$miembrospais[$i]["ncm"].'",
				  "'.$miembrospais[$i]["nombre"].'",
			      "'.$miembrospais[$i]["edad"].'",
			      "'.$miembrospais[$i]["email"].'",
                  "'.$miembrospais[$i]["telefono"].'",
                  "'.$barrios["nombre"].'",
                  "'.$estacas["nombre"].'",
                  "'.$consejos["nombre"].'"
                  
			    ],';

		  }

		  $datosJson = substr($datosJson, 0, -1);

		 $datosJson .=   '] 

		 }';
		
		echo $datosJson;


	}



}

/*=============================================
ACTIVAR TABLA DE MIEMBROS
=============================================*/ 
$activarMiembrosSetentaPais = new TablaMiembrosSetentaPais();
$activarMiembrosSetentaPais -> mostrarTablaMiembrosSetentaPais();

