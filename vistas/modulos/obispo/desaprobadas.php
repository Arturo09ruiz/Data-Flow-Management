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

        <table class="table table-bordered table-striped dt-responsive tablaSolicitudDesaprobadaObispo" width="100%">

          <thead>

            <tr>

              <th style="width:10px">#</th>
              <th>Código</th>
              <th>Necesidad</th>
              <th>Aprobación Gerente</th>
              <th>Aprobación Asesor Médico</th>
              <th>Aprobación Finanzas</th>
              <th>Fecha</th>
              <th>Acciones</th>

            </tr>

          </thead>

       


        
        </table>
     

        <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">
        <input class="idbarrio" type="" value="<?php echo $_SESSION['idbarrio']; ?>" id="idbarrio">
       <input class="idestaca" type="hidden" value="<?php echo $_SESSION['idestaca']; ?>" id="idestaca">
       <input  class="idconsejo" type="hidden" value="<?php echo $_SESSION['idconsejo']; ?>" id="idconsejo">
       <input type="hidden" value="<?php echo $_SESSION['idpais']; ?>" id="idpais">

      </div>

    </div>

  </section>

</div>
