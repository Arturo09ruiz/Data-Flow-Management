<?php
require_once "../../../controladores/miembros.controlador.php";
require_once "../../../controladores/estaca.controlador.php";
require_once "../../../modelos/miembros.modelo.php";
require_once "../../../modelos/miembros-gerente.modelo.php";
require_once "../../../controladores/barrios.controlador.php";
require_once "../../../modelos/barrios.modelo.php";
require_once "../../../modelos/estaca.modelo.php";






$reporte = new ControladorMiembros();
$reporte -> ctrDescargarReporteGerente();