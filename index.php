<?php
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/ventas.controlador.php";






require_once "controladores/pais.controlador.php";
require_once "controladores/consejo.controlador.php";
require_once "controladores/estaca.controlador.php";
require_once "controladores/medicamento.controlador.php";
require_once "controladores/barrios.controlador.php";
require_once "controladores/miembros.controlador.php";
require_once "controladores/solicitudes.controlador.php";
require_once "controladores/miembros-pdt-estaca.controlador.php";
require_once "controladores/miembros-gerente.controlador.php";
require_once "controladores/entregados.controlador.php";
require_once "controladores/miembros-setenta-pais.controlador.php";
require_once "controladores/desaprobar.controlador.php";
require_once "controladores/entregar.controlador.php";





require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/ventas.modelo.php";
require_once "extensiones/vendor/autoload.php";







//administrador Modelos
require_once "modelos/medicamento.modelo.php";
require_once "modelos/pais.modelo.php";
require_once "modelos/estaca.modelo.php";
require_once "modelos/barrios.modelo.php";
require_once "modelos/consejo.modelo.php";
require_once "modelos/entregados.modelo.php";
require_once "modelos/miembros.modelo.php";
require_once "modelos/solicitudes.modelo.php";
require_once "modelos/miembros-pdt-estaca.modelo.php";
require_once "modelos/entregar.modelo.php";
require_once "modelos/miembros-gerente.modelo.php";
require_once "modelos/miembros-setenta-pais.modelo.php";
require_once "modelos/desaprobar.modelo.php";






$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();