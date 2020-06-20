<?php

error_reporting(0);

$item = null;
$valor = null;
$orden = "id";
$consejo = $_SESSION["idconsejo"];

$solicitudesentregradas = ControladorEntregados::ctrMostrarSolicitudesEntregadosGerente($item, $valor, $orden, $consejo);
$solicitudesentre= count($solicitudesentregradas);

$test = array($solicitudesentre);




?>

<!--=====================================
GRÁFICO DE VENTAS
======================================-->


<div class="box box-solid bg-teal-gradient">
	
	<div class="box-header">
		
 		<i class="fa fa-th"></i>

  		<h3 class="box-title">Gráfico de Ventas</h3>

	</div>

	<div class="box-body border-radius-none nuevoGraficoVentas">

		<div class="chart" id="line-chart-ventas" style="height: 250px;"></div>

  </div>

</div>

<script>
	
 var line = new Morris.Line({
    element          : 'line-chart-ventas',
    resize           : true,
    data             : [

    <?php

    if($solicitudesentre != null){

	    foreach($test as $key){

	    	echo "{ y: '".$key."', ventas: ".$solicitudesentre[$key]." },";


	    }

	    echo "{y: '".$key."', ventas: ".$solicitudesentre[$key]." }";

    }else{

       echo "{ y: '0', ventas: '0' }";

    }

    ?>

    ],
    xkey             : 'y',
    ykeys            : ['ventas'],
    labels           : ['ventas'],
    lineColors       : ['#efefef'],
    lineWidth        : 2,
    hideHover        : 'auto',
    gridTextColor    : '#fff',
    gridStrokeWidth  : 0.4,
    pointSize        : 4,
    pointStrokeColors: ['#efefef'],
    gridLineColor    : '#efefef',
    gridTextFamily   : 'Open Sans',
    preUnits         : '$',
    gridTextSize     : 10
  });

</script>