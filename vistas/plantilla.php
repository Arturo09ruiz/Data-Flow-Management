<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Data Flow Management - 1.4</title>
  <link rel="shortcut icon" href="vistas/img/favicon.ico" />

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- <link rel="icon" href="vistas/img/plantilla/icono-negro.ico"> -->

  <!--=====================================
  PLUGINS DE CSS
  ======================================-->
  <script src="vistas/bower_components/bootstrap/dist/css/jquery.min.js"></script>

  <link href="vistas/bower_components/bootstrap/dist/css/select2.min.css" rel="stylesheet" />
  <script src="vistas/bower_components/bootstrap/dist/css/select2.min.js"></script>

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">



  <!-- <link rel="stylesheet" href="vistas/bower_components/zoom/easyzoom.css">
  <link rel="stylesheet" href="vistas/bower_components/zoom/example.css">
  <link rel="stylesheet" href="vistas/bower_components/zoom/pygments.css">
<script src="vistas/bower_components/zoom/easyzoom.js"></script>

   -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">

  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="vistas/plugins/iCheck/all.css">

  <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- Morris chart -->
  <link rel="stylesheet" href="vistas/bower_components/morris.js/morris.css">

  <!--=====================================
  PLUGINS DE JAVASCRIPT
  ======================================-->

  <!-- jQuery 3 -->
  <!-- <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script> -->

  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- FastClick -->
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>

  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>

  <!-- DataTables -->
  <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

  <!-- SweetAlert 2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
  <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <!-- iCheck 1.0.1 -->
  <script src="vistas/plugins/iCheck/icheck.min.js"></script>

  <!-- InputMask -->
  <script src="vistas/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="vistas/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="vistas/plugins/input-mask/jquery.inputmask.extensions.js"></script>

  <!-- jQuery Number -->
  <script src="vistas/plugins/jqueryNumber/jquerynumber.min.js"></script>

  <!-- daterangepicker http://www.daterangepicker.com/-->
  <script src="vistas/bower_components/moment/min/moment.min.js"></script>
  <script src="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Morris.js charts http://morrisjs.github.io/morris.js/-->
  <script src="vistas/bower_components/raphael/raphael.min.js"></script>
  <script src="vistas/bower_components/morris.js/morris.min.js"></script>

  <!-- ChartJS http://www.chartjs.org/-->
  <script src="vistas/bower_components/Chart.js/Chart.js"></script>



<style>
.lds-roller {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-roller div {
  animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  transform-origin: 40px 40px;
}
.lds-roller div:after {
  content: " ";
  display: block;
  position: absolute;
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: #fff;
  margin: -4px 0 0 -4px;
}
.lds-roller div:nth-child(1) {
  animation-delay: -0.036s;
}
.lds-roller div:nth-child(1):after {
  top: 63px;
  left: 63px;
}
.lds-roller div:nth-child(2) {
  animation-delay: -0.072s;
}
.lds-roller div:nth-child(2):after {
  top: 68px;
  left: 56px;
}
.lds-roller div:nth-child(3) {
  animation-delay: -0.108s;
}
.lds-roller div:nth-child(3):after {
  top: 71px;
  left: 48px;
}
.lds-roller div:nth-child(4) {
  animation-delay: -0.144s;
}
.lds-roller div:nth-child(4):after {
  top: 72px;
  left: 40px;
}
.lds-roller div:nth-child(5) {
  animation-delay: -0.18s;
}
.lds-roller div:nth-child(5):after {
  top: 71px;
  left: 32px;
}
.lds-roller div:nth-child(6) {
  animation-delay: -0.216s;
}
.lds-roller div:nth-child(6):after {
  top: 68px;
  left: 24px;
}
.lds-roller div:nth-child(7) {
  animation-delay: -0.252s;
}
.lds-roller div:nth-child(7):after {
  top: 63px;
  left: 17px;
}
.lds-roller div:nth-child(8) {
  animation-delay: -0.288s;
}
.lds-roller div:nth-child(8):after {
  top: 56px;
  left: 12px;
}
@keyframes lds-roller {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.hide {
  display: none !important;
}
</style>
</head>

<!--=====================================
CUERPO DOCUMENTO
======================================-->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">

<div id="circulo" class="text-center">
 <!-- <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br> -->

<!-- <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div> -->
</div>


<!-- <div class="hide" id="contenido"> -->
  <?php

  if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {

    echo '<div class="wrapper">';

    /*=============================================
    CABEZOTE
    =============================================*/
    if ($_SESSION["perfil"] == "Administrador") {

      include "modulos/administrador/cabezote.php";

      /*=============================================
    MENU
    =============================================*/

      include "modulos/administrador/menu.php";

      /*=============================================
    CONTENIDO
    =============================================*/



      if (isset($_GET["ruta"])) {

        if (
          $_GET["ruta"] == "inicio" ||
          $_GET["ruta"] == "usuarios" ||
          $_GET["ruta"] == "categorias" ||
          $_GET["ruta"] == "miembros" ||
          $_GET["ruta"] == "productos" ||
          $_GET["ruta"] == "clientes" ||
          $_GET["ruta"] == "paises-del-area" ||
          $_GET["ruta"] == "consejos-de-coordinacion" ||
          $_GET["ruta"] == "medicamento" ||
          $_GET["ruta"] == "estacas" ||
          $_GET["ruta"] == "barrios" ||
          $_GET["ruta"] == "ventas" ||
          $_GET["ruta"] == "crear-venta" ||
          $_GET["ruta"] == "editar-venta" ||
          $_GET["ruta"] == "reportes" ||
          $_GET["ruta"] == "salir"
        ) {

          include "modulos/administrador/" . $_GET["ruta"] . ".php";
        } else {

          include "modulos/administrador/404.php";
        }
      } else {

        include "modulos/administrador/inicio.php";
      }
    }
















    if ($_SESSION["perfil"] == "Obispo") {

      include "modulos/obispo/cabezote.php";

      /*=============================================
    MENU
    =============================================*/

      include "modulos/obispo/menu.php";


      /*=============================================
    CONTENIDO
    =============================================*/


      if (isset($_GET["ruta"])) {

        if (
          $_GET["ruta"] == "inicio" ||
          $_GET["ruta"] == "miembros" ||
          $_GET["ruta"] == "solicitudes-en-camino" ||
          $_GET["ruta"] == "realizar-solicitud" ||
          $_GET["ruta"] == "visualizar-solicitudes-camino" ||
          $_GET["ruta"] == "entregadas" ||
          $_GET["ruta"] == "Reportes" ||
          $_GET["ruta"] == "desaprobadas" ||
          $_GET["ruta"] == "visualizar-solicitudes-entregadas" ||
          $_GET["ruta"] == "visualizar-solicitudes" ||
          $_GET["ruta"] == "visualizar-solicitudes-desaprobadas" ||
          $_GET["ruta"] == "salir"
        ) {
          include "modulos/obispo/" . $_GET["ruta"] . ".php";
        } else {

          include "modulos/obispo/404.php";
        }
      } else {

        include "modulos/obispo/inicio.php";
      }
    }













    if ($_SESSION["perfil"] == "Presidente-de-Estaca") {

      include "modulos/Presidente-de-Estaca/cabezote.php";

      /*=============================================
    MENU
    =============================================*/

      include "modulos/Presidente-de-Estaca/menu.php";


      /*=============================================
    CONTENIDO
    =============================================*/


      if (isset($_GET["ruta"])) {

        if (
          $_GET["ruta"] == "inicio" ||
          $_GET["ruta"] == "miembros" ||
          $_GET["ruta"] == "solicitud" ||
          $_GET["ruta"] == "visualizar-solicitudes" ||
          $_GET["ruta"] == "solicitudes-en-camino" ||
          $_GET["ruta"] == "desaprobadas" ||
          $_GET["ruta"] == "reporte" ||
          $_GET["ruta"] == "entregadas" ||
          $_GET["ruta"] == "visualizar-solicitudes-desaprobadas" ||
          $_GET["ruta"] == "visualizar-solicitudes-camino" ||
          $_GET["ruta"] == "visualizar-solicitudes-entregadas" ||
          $_GET["ruta"] == "salir"
        ) {

          include "modulos/Presidente-de-Estaca/" . $_GET["ruta"] . ".php";
        } else {

          include "modulos/Presidente-de-Estaca/404.php";
        }
      } else {

        include "modulos/Presidente-de-Estaca/inicio.php";
      }
    }







    if ($_SESSION["perfil"] == "Gerente") {

      include "modulos/Gerente/cabezote.php";

      /*=============================================
    MENU
    =============================================*/

      include "modulos/Gerente/menu.php";


      /*=============================================
    CONTENIDO
    =============================================*/


      if (isset($_GET["ruta"])) {

        if (
          $_GET["ruta"] == "inicio" ||
          $_GET["ruta"] == "miembros" ||
          $_GET["ruta"] == "descargar-reporte-gerente-miembros" ||
          $_GET["ruta"] == "solicitud" ||
          $_GET["ruta"] == "visualizar-solicitudes" ||
          $_GET["ruta"] == "miembros-reportes" ||
          $_GET["ruta"] == "entregar" ||
          $_GET["ruta"] == "desaprobado" ||
          $_GET["ruta"] == "visualizar-solicitudes-entregar" ||
          $_GET["ruta"] == "visualizar-solicitudes-entregadas" ||
          $_GET["ruta"] == "entregados" ||
          $_GET["ruta"] == "reportes-medicinas" ||
          $_GET["ruta"] == "visualizar-solicitudes-desaprobadas" ||
          $_GET["ruta"] == "salir"
        ) {
          include "modulos/Gerente/" . $_GET["ruta"] . ".php";
        } else {

          include "modulos/Gerente/404.php";
        }
      } else {

        include "modulos/Gerente/inicio.php";
      }
    }

















    if ($_SESSION["perfil"] == "Setenta-Consejo") {

      include "modulos/Setenta-Consejo/cabezote.php";

      /*=============================================
    MENU
    =============================================*/

      include "modulos/Setenta-Consejo/menu.php";


      /*=============================================
    CONTENIDO
    =============================================*/


      if (isset($_GET["ruta"])) {

        if (
          $_GET["ruta"] == "inicio" ||
          $_GET["ruta"] == "miembros" ||
          $_GET["ruta"] == "salir"
        ) {

          include "modulos/Setenta-Consejo/" . $_GET["ruta"] . ".php";
        } else {

          include "modulos/Setenta-Consejo/404.php";
        }
      } else {

        include "modulos/Setenta-Consejo/inicio.php";
      }
    }







    if ($_SESSION["perfil"] == "Setenta-Pais") {

      include "modulos/Setenta-Pais/cabezote.php";

      /*=============================================
    MENU
    =============================================*/

      include "modulos/Setenta-Pais/menu.php";


      /*=============================================
    CONTENIDO
    =============================================*/


      if (isset($_GET["ruta"])) {

        if (
          $_GET["ruta"] == "inicio" ||
          $_GET["ruta"] == "miembros" ||
          $_GET["ruta"] == "salir"
        ) {

          include "modulos/Setenta-Pais/" . $_GET["ruta"] . ".php";
        } else {

          include "modulos/Setenta-Pais/404.php";
        }
      } else {

        include "modulos/Setenta-Pais/inicio.php";
      }
    }








    if ($_SESSION["perfil"] == "Asesor-Medico") {

      include "modulos/Asesor-Medico/cabezote.php";

      /*=============================================
    MENU
    =============================================*/

      include "modulos/Asesor-Medico/menu.php";


      /*=============================================
    CONTENIDO
    =============================================*/


      if (isset($_GET["ruta"])) {

        if (
          $_GET["ruta"] == "inicio" ||
          $_GET["ruta"] == "solicitud" ||
          $_GET["ruta"] == "visualizar-solicitudes" ||
          $_GET["ruta"] == "salir"
        ) {

          include "modulos/Asesor-Medico/" . $_GET["ruta"] . ".php";
        } else {

          include "modulos/Asesor-Medico/404.php";
        }
      } else {

        include "modulos/Asesor-Medico/inicio.php";
      }
    }




    if ($_SESSION["perfil"] == "Finanzas") {

      include "modulos/Finanzas/cabezote.php";

      /*=============================================
    MENU
    =============================================*/

      include "modulos/Finanzas/menu.php";


      /*=============================================
    CONTENIDO
    =============================================*/


      if (isset($_GET["ruta"])) {

        if (
          $_GET["ruta"] == "inicio" ||
          $_GET["ruta"] == "solicitud" ||
          $_GET["ruta"] == "visualizar-solicitudes" ||
          $_GET["ruta"] == "salir"
        ) {

          include "modulos/Finanzas/" . $_GET["ruta"] . ".php";
        } else {

          include "modulos/Finanzas/404.php";
        }
      } else {

        include "modulos/Finanzas/inicio.php";
      }
    }






















































    /*=============================================
    FOOTER
    =============================================*/

    include "modulos/footer.php";

    echo '</div>';
  } else {

    include "modulos/login.php";
  }

  ?>
<!-- </div> -->



  <!-- MIS JS NUEVOS -->
  <script src="vistas/js/pais.js"></script>
  <script src="vistas/js/consejo.js"></script>
  <script src="vistas/js/solicitudes-obispo.js"></script>
  <script src="vistas/js/solicitudes-pdt-estaca.js"></script>
  <script src="vistas/js/solicitudes-gerente.js"></script>
  <script src="vistas/js/solicitudes-desaprobadas-gerente.js"></script>
  <script src="vistas/js/solicitudes-desaprobadas-obispo.js"></script>
  <script src="vistas/js/test.js"></script>
  <script src="vistas/js/solicitudes-asesor.js"></script>
  <script src="vistas/js/entregar-gerente.js"></script>
  <script src="vistas/js/solicitudes-finanzas.js"></script>
  <script src="vistas/js/solicitudes-entregadas-gerente.js"></script>
  <script src="vistas/js/solicitud-en-camino-obispo.js"></script>
  <script src="vistas/js/solicitudes-entregadas.js"></script>
  <script src="vistas/js/solicitudes-en-camino-estaca.js"></script>
  <script src="vistas/js/solicitudes-entregadas-estaca.js"></script>
  <script src="vistas/js/medicamento.js"></script>












  <script src="vistas/js/estaca.js"></script>
  <script src="vistas/js/barrios.js"></script>
  <script src="vistas/js/miembros.js"></script>
  <script src="vistas/js/miembros-pdt-estaca.js"></script>
  <script src="vistas/js/miembros-gerente.js"></script>
  <script src="vistas/js/miembros-setenta-pais.js"></script>
  <script src="vistas/js/miembros-admin.js"></script>













  <script>
    $('.js-example-basic-single').select2();
  </script>


<script>
    // window.addEventListener('load', ()=>{

    //     document.getElementById('contenido').className = '';

    //     document.getElementById('circulo').className = 'hide';

    // })
</script>
  <script src="vistas/js/plantilla.js"></script>
  <script src="vistas/js/usuarios.js"></script>
  <script src="vistas/js/categorias.js"></script>
  <script src="vistas/js/productos.js"></script>
  <script src="vistas/js/clientes.js"></script>
  <script src="vistas/js/ventas.js"></script>
  <script src="vistas/js/reportes.js"></script>

</body>

</html>