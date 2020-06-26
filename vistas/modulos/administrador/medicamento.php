
<div class="content-wrapper">

<section class="content-header">
  
  <h1>
    
    Administrar Medicamentos
  
  </h1>

  <ol class="breadcrumb">
    
    <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
    
    <li class="active">Administrar Medicamentos</li>
  
  </ol>

</section>

<section class="content">

  <div class="box">

    <div class="box-header with-border">

      <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarMedicamento">
        
        Agregar Medicamento

      </button>

    </div>

    <div class="box-body">
      
     <table class="table table-bordered table-striped dt-responsive tablaMedicamento" width="100%">
       
      <thead>
       
       <tr>
         
         <th style="width:10px">#</th>
         <th>Código</th>
         <th>Nombre</th>
         <th>Agregado</th>
         <th>Acciones</th>
         
       </tr> 

      </thead>      

     </table>

     <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

    </div>

  </div>

</section>

</div>

<!--=====================================
MODAL AGREGAR Medicamento
======================================-->

<div id="modalAgregarMedicamento" class="modal fade" role="dialog">

<div class="modal-dialog">

  <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data">

      <!--=====================================
      CABEZA DEL MODAL
      ======================================-->

      <div class="modal-header" style="background:#3c8dbc; color:white">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Agregar Medicamento</h4>

      </div>

      <!--=====================================
      CUERPO DEL MODAL
      ======================================-->

      <div class="modal-body">

        <div class="box-body">


          <!-- ENTRADA PARA EL CÓDIGO -->
          
          <div class="form-group">
            
            <div class="input-group">
            
              <span class="input-group-addon"><i class="fa fa-code"></i></span> 


              
              <?php

$item = null;
$valor = null;
$orden = "id";

$ventas = ControladorMedicamento::ctrMostrarMedicamento($item, $valor,$orden);

if(!$ventas){

  echo '<input type="text" class="form-control input-lg" id="nuevoCodigo" name="nuevoCodigo" value="10001" readonly>';


}else{

  foreach ($ventas as $key => $value) {
    
    
  
  }

  $codigo = $value["codigo"] + 1;



  echo '<input type="text" class="form-control input-lg" id="nuevoCodigo" name="nuevoCodigo" value="'.$codigo.'" readonly>';


}

?>

            </div>

          </div>

          <!-- ENTRADA PARA LA DESCRIPCIÓN -->

           <div class="form-group">
            
            <div class="input-group">
            
              <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

              <input type="text" class="form-control input-lg" name="nuevaNombre" placeholder="Ingresar Nombre" required>

            </div>

          </div>

        </div>

      </div>

      <!--=====================================
      PIE DEL MODAL
      ======================================-->

      <div class="modal-footer">

        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

        <button type="submit" class="btn btn-primary">Guardar Medicamento</button>

      </div>

    </form>

      <?php

        $crearMedicamento = new ControladorMedicamento();
        $crearMedicamento -> ctrCrearMedicamento();

      ?>  

  </div>

</div>

</div>


<?php

$eliminarMedicamento = new ControladorMedicamento();
$eliminarMedicamento -> ctrEliminarMedicamento();

?>      



