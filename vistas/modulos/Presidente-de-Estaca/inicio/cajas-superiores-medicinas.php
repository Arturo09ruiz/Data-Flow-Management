<?php

$item = null;
$valor = null;
$orden = "id";
$estaca = $_SESSION["idestaca"];



$solicitudes = ControladorSolicitudes::ctrMostrarSolicitudesConformeEstaca($item, $valor, $orden, $estaca);
$totalSolicitudes= count($solicitudes);

$solicitudesentregar = ControladorEntregar::ctrMostrarSolicitudesEntregarEstaca($item, $valor, $orden, $estaca);
$solicitudesen = count($solicitudesentregar);

$solicitudesentregradas = ControladorEntregados::ctrMostrarSolicitudesEntregadosEstaca($item, $valor, $orden, $estaca);
$solicitudesentre= count($solicitudesentregradas);

$solicitudesdesaprobadas = ControladorDesaprobar::ctrMostrarSolicitudesDesaprobadasEstaca($item, $valor, $orden, $estaca);
$solicitudesdesa = count($solicitudesdesaprobadas)

?>



<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-aqua">
    
    <div class="inner">
      
      <h3><?php echo $totalSolicitudes ?></h3>

      <p>Solicitudes Realizadas</p>
    
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

      <p>Solicitudes En Camino</p>
  
    </div>
    
    <div class="icon">
    
      <i class="fa fa-inbox"></i>
    
    </div>
    
    <a href="solicitudes-en-camino" class="small-box-footer">

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
    
    <a href="entregadas" class="small-box-footer">
      
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
    
    <a href="desaprobadas" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>