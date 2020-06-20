<?php

$item = null;
$valor = null;
$orden = "id";
$consejo = $_SESSION["idconsejo"];



$solicitudes = ControladorSolicitudes::ctrMostrarSolicitudesConformeConsejo($item, $valor, $orden, $consejo);
$totalSolicitudes= count($solicitudes);

$solicitudesentregar = ControladorEntregar::ctrMostrarSolicitudesPorEntregarGerente($item, $valor, $orden, $consejo);
$solicitudesen = count($solicitudesentregar);

$solicitudesentregradas = ControladorEntregados::ctrMostrarSolicitudesEntregadosGerente($item, $valor, $orden, $consejo);
$solicitudesentre= count($solicitudesentregradas);

$solicitudesdesaprobadas = ControladorDesaprobar::ctrMostrarSolicitudesDesaprobadasConsejo($item, $valor, $orden, $consejo);
$solicitudesdesa = count($solicitudesdesaprobadas)

?>



<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-aqua">
    
    <div class="inner">
      
      <h3><?php echo $totalSolicitudes ?></h3>

      <p>Solicitudes Sin Revisar</p>
    
    </div>
    
    <div class="icon">
      
      <i class="fa fa-inbox"></i>
    
    </div>
    
    <a href="solicitud" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>



<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-yellow">
    
    <div class="inner">
    
      <h3><?php echo $solicitudesen ?></h3>

      <p>Solicitudes Por Entregar</p>
  
    </div>
    
    <div class="icon">
    
      <i class="fa fa-inbox"></i>
    
    </div>
    
    <a href="entregar" class="small-box-footer">

      Más info <i class="fa fa-arrow-circle-right"></i>

    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-green">
    
    <div class="inner">
    
      <h3><?php echo number_format($solicitudesentre); ?></h3>

      <p>Solicitudes Entregadas</p>
    
    </div>
    
    <div class="icon">
    
      <i class="fa fa-dropbox"></i>
    
    </div>
    
    <a href="entregados" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>
<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-red">
  
    <div class="inner">
    
      <h3><?php echo number_format($solicitudesdesa); ?></h3>

      <p>Solicitudes Desaprobadas</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-ios-cart"></i>
    
    </div>
    
    <a href="desaprobado" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>