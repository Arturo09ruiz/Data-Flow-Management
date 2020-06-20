<?php

$item = null;
$valor = null;
$orden = "id";

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

 ?>


<div class="box box-primary">

  <div class="box-header with-border">

    <h3 class="box-title">Miembros Agregados Recientemente</h3>

    <div class="box-tools pull-right">

      <button type="button" class="btn btn-box-tool" data-widget="collapse">

        <i class="fa fa-minus"></i>

      </button>

      <button type="button" class="btn btn-box-tool" data-widget="remove">

        <i class="fa fa-times"></i>

      </button>

    </div>

  </div>
  
  <div class="box-body">

  <script>
  $(document).ready(function() {

    $('.js-example-basic-single').select2({});
  })
</script>


 







<table class="table table-bordered table-striped dt-responsive tablaMiembrosGerente" width="100%">
       
      <thead>
       
       <tr>
         
         <th style="width:10px">#</th>
         <th>NCM</th>
         <th>Nombre Completo</th>
         <th>Edad</th>
         <th>Email</th>
         <th>N° De Telf</th>
         <th>SM</th>
         <th>Barrio</th>
         <th>Estaca</th>



         
       </tr> 

      </thead>      

     </table>

        <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">
        <input class="idbarrio" type="hidden" value="<?php echo $_SESSION['idbarrio']; ?>" id="idbarrio">
        <input class="idestaca" type="hidden" value="<?php echo $_SESSION['idestaca']; ?>" id="idestaca">
        <input class="idconsejo" type="hidden" value="<?php echo $_SESSION['idconsejo']; ?>" id="idconsejo">
        <input type="hidden" value="<?php echo $_SESSION['idpais']; ?>" id="idpais">


  </div>

  <div class="box-footer text-center">

    <a href="entregados" class="uppercase">Ver todas las Solicitudes Entregadas</a>
  
  </div>

</div>
