<?php

$item = null;
$valor = null;
$orden = "id";
$barrio = $_SESSION["idbarrio"];



$solicitudes = ControladorSolicitudes::ctrMostrarSolicitudesConformeBarrioObispo($item, $valor, $orden, $barrio);
$totalSolicitudes= count($solicitudes);

$solicitudesentregar = ControladorEntregar::ctrMostrarSolicitudesEntregarObispo($item, $valor, $orden, $barrio);
$solicitudesen = count($solicitudesentregar);

$solicitudesentregradas = ControladorEntregados::ctrMostrarSolicitudesEntregadosObispo($item, $valor, $orden, $barrio);
$solicitudesentre= count($solicitudesentregradas);

$solicitudesdesaprobadas = ControladorDesaprobar::ctrMostrarSolicitudesDesaprobadasObispo($item, $valor, $orden, $barrio);
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