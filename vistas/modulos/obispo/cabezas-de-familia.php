<?php

if($_SESSION["perfil"] == "Vendedor"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Cabezas de Famiia 
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Cabezas de Famiia </li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCabeza">
          
          Agregar Cabeza de Famiia 

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablaCabeza" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>NCM</th>
           <th>Nombre del Cabeza de Familia</th>
           <th>Fecha de Nacimiento</th>
           <th>Numero de Miembros de la Familia (FLRS)</th>
           <th>Acciones</th>



         </tr> 

        </thead>      

       </table>

       <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">
       <input type="hidden" id="idbarrio" name="idbarrio" value="<?php echo $_SESSION['idbarrio']; ?>" type="text">
          <input type="hidden" name="idestaca" value="<?php echo $_SESSION['idestaca']; ?>" type="text">
          <input type="hidden" name="idconsejo" value="<?php echo $_SESSION['idconsejo']; ?>" type="text">
          <input type="hidden" name="idpais" value="<?php echo $_SESSION['idpais']; ?>" type="text">



   

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR CABEZA
======================================-->

<div id="modalAgregarCabeza" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Cabeza de Familia</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">
              
         





          <div class="form-group">
            
            <div class="input-group">
            
              <span class="input-group-addon"><i class="fa fa-code"></i></span> 

              <input type="number" class="form-control input-lg" id="nuevoNCM" name="nuevoNCM" placeholder="Ingresar Numero de Cedula de Miembro" required>

            </div>

          </div>

          <!-- ENTRADA PARA LA NOMBRE -->

           <div class="form-group">
            
            <div class="input-group">
            
              <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

              <input type="text" class="form-control input-lg" name="nuevaNombre" placeholder="Ingresar Nombre Completo" required>

            </div>

          </div>


          <div class="form-group">
            
            <div class="input-group">
            
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

              <input type="date" class="form-control input-lg" name="nuevaFechaNacimiento"  required>

            </div>

          </div>


             <!-- ENTRADA PARA LA NOMBRE -->

             <div class="form-group">
            
            <div class="input-group">
            
              <span class="input-group-addon"><i class="fa fa-info"></i></span> 

              <input type="text" class="form-control input-lg" name="nuevaMiembros" placeholder="Ingresar Numero de Miembros de la Familia FLRS" required>

            </div>

          </div>

     
          <input name="idbarrio" value="<?php echo $_SESSION['idbarrio']; ?>" type="text">
          <input name="idestaca" value="<?php echo $_SESSION['idestaca']; ?>" type="text">
          <input name="idconsejo" value="<?php echo $_SESSION['idconsejo']; ?>" type="text">
          <input name="idpais" value="<?php echo $_SESSION['idpais']; ?>" type="text">



   
          






        </div>
        </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Cabeza de Familia</button>

        </div>

      </form>

        <?php

          $crearCabeza = new ControladorCabeza();
          $crearCabeza -> ctrCrearCabeza();

        ?>  

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->

<div id="modalEditarCabeza" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Cabeza de Familia</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">







          <H1>AQUI VA EL CONTENIDOO RECORDAR HACER VARIABLES</H1>







        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

        <?php

          $editarCabeza = new ControladorCabeza();
          $editarCabeza -> ctrEditarCabeza();

        ?>      

    </div>

  </div>

</div>

<?php

  $eliminarCabeza = new ControladorCabeza();
  $eliminarCabeza -> ctrEliminarCabeza();

?>      



