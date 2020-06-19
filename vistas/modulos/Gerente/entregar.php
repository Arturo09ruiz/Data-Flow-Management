<script>
  $(document).ready(function() {

    $('.js-example-basic-single').select2({});
  })
</script>


<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Visualizar Solicitudes Por Entregar

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Visualizar Solicitudes Por Entregar</li>

    </ol>

  </section>

 


  <section class="content">

    <div class="box">

      <div class="box-header with-border">



      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablaSolicitudPorEntregarGerente" width="100%">

          <thead>

            <tr>

              <th style="width:10px">#</th>
              <th>Código</th>
              <th>Necesidad</th>
              <th>Barrio</th>
              <th>Estaca</th>
              <th>Fecha</th>
              <th>Acciones</th>

            </tr>

          </thead>





        </table>


        <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">
        <input class="idbarrio" type="hidden" value="<?php echo $_SESSION['idbarrio']; ?>" id="idbarrio">
        <input class="idestaca" type="hidden" value="<?php echo $_SESSION['idestaca']; ?>" id="idestaca">
        <input class="idconsejo" type="hidden" value="<?php echo $_SESSION['idconsejo']; ?>" id="idconsejo">
        <input type="hidden" value="<?php echo $_SESSION['idpais']; ?>" id="idpais">

      </div>

    </div>

  </section>

  <div>

<form id="prueba-entregado" role="form" method="post" enctype="multipart/form-data">

  <input type="" id="codigo" name="nuevoCodigo" type="text">
  <input type="" id="ncm" name="ncm" type="text">
  <input type="" id="nombre" name="nombre" type="text">
  <input type="" id="edad" name="edad" type="text">
  <input type="" id="email" name="email" type="text">
  <input type="" id="telefono" name="telefono" type="text">
  <input type="" id="idb" name="idbarrio" type="text">
  <input type="" id="ide" name="idestaca" type="text">
  <input type="" id="idc" name="idconsejo" type="text">
  <input type="" id="idp" name="idpais" type="text">
  <input type="" id="enfermedad" name="nuevaEnfermedad" type="text">
  <input type="" id="medi" name="nuevaMedicamento" type="text">
  <input type="" id="dosis" name="nuevaDosis" type="text">
  <input type="" id="duracion" name="nuevaDuracion" type="text">
  <input type="" id="necesidad" name="nuevaNecesidad" type="text">
  <input type="" id="pa1" name="pa1" type="text">
  <input type="" id="pa2" name="pa2" type="text">
  <input type="" id="im" name="im" type="text">
  <input type="" id="rm" name="rm" type="text">
  <input type="" id="ci" name="ci" type="text">
  <input type="" id="aprobacion_gerente" name="aprobacion_gerente" type="text">
  <input type="" id="comentarios_gerente" name="comentarios_gerente" type="text">
  <input type="" id="aprobacion_asesor" name="aprobacion_asesor" type="text">
  <input type="" id="comentarios_asesor" name="comentarios_asesor" type="text">
  <input type="" id="aprobacion_finanzas" name="aprobacion_finanzas" type="text">
  <input type="" id="comentarios_finanzas" name="comentarios_finanzas" type="text">
  <input type="" id="fecha_solicitud" name="fecha_solicitud" type="text">







</form>

<?php
$crearentregados = new ControladorEntregados();
$crearentregados->ctrCrearEntregado();
?>

</div> 
</div>
