
<div class="content-wrapper">

<section class="content-header">
  
  <h1>
    
    Administrar Consejos de Coordinacion
  
  </h1>

  <ol class="breadcrumb">
    
    <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
    
    <li class="active">Administrar Consejos de Coordinacion</li>
  
  </ol>

</section>

<section class="content">

  <div class="box">

    <div class="box-header with-border">

      <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarConsejo">
        
        Agregar Consejo de coordinacion

      </button>

    </div>

    <div class="box-body">
      
     <table class="table table-bordered table-striped dt-responsive tablaConsejo" width="100%">
       
      <thead>
       
       <tr>
         
         <th style="width:10px">#</th>
         <th>Código</th>
         <th>Nombre</th>
         <th>Pais</th>
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
MODAL AGREGAR Consejo
======================================-->

<div id="modalAgregarConsejo" class="modal fade" role="dialog">

<div class="modal-dialog">

  <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data">

      <!--=====================================
      CABEZA DEL MODAL
      ======================================-->

      <div class="modal-header" style="background:#3c8dbc; color:white">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Agregar Consejo</h4>

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

              <input type="text" class="form-control input-lg" id="nuevoCodigo" name="nuevoCodigo" placeholder="Ingresar código" required>

            </div>

          </div>

          <!-- ENTRADA PARA LA NOMBRE -->

           <div class="form-group">
            
            <div class="input-group">
            
              <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

              <input type="text" class="form-control input-lg" name="nuevaNombre" placeholder="Ingresar Nombre" required>

            </div>

          </div>
          <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg" id="nuevaPais" name="nuevaPais" required>
                  
                  <option value="">Selecionar Pais</option>

                  <?php

                  $item = null;
                  $valor = null;
                  $orden = "id";


                  $pais = ControladorPais::ctrMostrarPais($item, $valor, $orden);

                  foreach ($pais as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                  }

                  ?>
  
                </select>

              </div>

            </div>






              </div>



    



      <!--=====================================
      PIE DEL MODAL
      ======================================-->

      <div class="modal-footer">

        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

        <button type="submit" class="btn btn-primary">Guardar Consejo</button>

      </div>


    </form>

      <?php

        $crearConsejo = new ControladorConsejo();
        $crearConsejo -> ctrCrearConsejo();

      ?>  

  </div>
  </div>
  </div>
  </div>







<?php

$eliminarConsejo = new ControladorConsejo();
$eliminarConsejo -> ctrEliminarConsejo();

?>      



