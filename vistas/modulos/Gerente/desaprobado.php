<script>
  $(document).ready(function() {

    $('.js-example-basic-single').select2({});
  })
</script>


<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Visualizar Solicitudes Desaprobadas

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Visualizar Solicitudes Desaprobadas</li>

    </ol>

  </section>

 


  <section class="content">

    <div class="box">

      <div class="box-header with-border">



      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablaSolicitudDesaprobadaGerente" width="100%">

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

<form id="prueba-regresar-aprobacion" role="form" method="post" enctype="multipart/form-data">

  <input type="hidden" id="codigo" name="nuevoCodigo" type="text">
  <input type="hidden" id="ncm" name="ncm" type="text">
  <input type="hidden" id="nombre" name="nombre" type="text">
  <input type="hidden" id="edad" name="edad" type="text">
  <input type="hidden" id="email" name="email" type="text">
  <input type="hidden" id="telefono" name="telefono" type="text">
  <input type="hidden" id="idb" name="idbarrio" type="text">
  <input type="hidden" id="ide" name="idestaca" type="text">
  <input type="hidden" id="idc" name="idconsejo" type="text">
  <input type="hidden" id="idp" name="idpais" type="text">
  <input type="hidden" id="enfermedad" name="nuevaEnfermedad" type="text">
  <input type="hidden" id="medicamento" name="nuevaMedicamento" type="text">
  <input type="hidden" id="dosis" name="nuevaDosis" type="text">
  <input type="hidden" id="duracion" name="nuevaDuracion" type="text">
  <input type="hidden" id="necesidad" name="nuevaNecesidad" type="text">
  <input type="hidden" id="pa1" name="pa1" type="text">
  <input type="hidden" id="pa2" name="pa2" type="text">
  <input type="hidden" id="im" name="im" type="text">
  <input type="hidden" id="rm" name="rm" type="text">
  <input type="hidden" id="ci" name="ci" type="text">








</form>

<?php
$crearentre = new ControladorDesaprobar();
$crearentre->ctrCrearActivar();
?>

</div> 
</div>
