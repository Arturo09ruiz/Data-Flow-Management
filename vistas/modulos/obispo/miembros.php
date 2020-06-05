
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Miembros
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Miembros</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarMiembros">
          
          Agregar Miembro

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablaMiembros" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>NCM</th>
           <th>Nombre Completo</th>
           <th>Edad</th>
           <th>Email</th>
           <th>N° De Telf</th>
           <th>Acciones</th>

           
         </tr> 

        </thead>      

       </table>

       <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">
       <input class="idbarrio" type="hidden" value="<?php echo $_SESSION['idbarrio']; ?>" id="idbarrio">
       <input type="hidden" value="<?php echo $_SESSION['idestaca']; ?>" id="idestaca">
       <input type="hidden" value="<?php echo $_SESSION['idconsejo']; ?>" id="idconsejo">
       <input type="hidden" value="<?php echo $_SESSION['idpais']; ?>" id="idpais">





      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->

<div id="modalAgregarMiembros" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Miembro</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">



            <!-- ENTRADA PARA EL NCM -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoNCM" name="nuevoNCM" placeholder="Ingresar Numero de Cedula de Miembro" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA NOMBRE -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg nuevaNombre" id="nuevaNombre" name="nuevaNombre" placeholder="Ingresar Nombre Completo" required>

              </div>

            </div>

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar-plus-o"></i></span> 

                <input type="number" class="form-control input-lg nuevaEdad" id="nuevaEdad" name="nuevaEdad" placeholder="Ingresar Edad" required>

              </div>

            </div>

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" >

              </div>

            </div>


            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar N° de Telf" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>


            <input type="hidden" name="idbarrio" value="<?php echo $_SESSION['idbarrio']; ?>" type="text">
            <input type="hidden" name="idestaca" value="<?php echo $_SESSION['idestaca']; ?>" type="text">
            <input type="hidden" name="idconsejo" value="<?php echo $_SESSION['idconsejo']; ?>" type="text">
            <input type="hidden" name="idpais" value="<?php echo $_SESSION['idpais']; ?>" type="text">
            
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Miembro</button>

        </div>

      </form>

        <?php

          $crearMiembros = new ControladorMiembros();
          $crearMiembros -> ctrCrearMiembros();

        ?>  

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR Miembros
======================================-->

<div id="modalEditarMiembros" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Miembro</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">



         
              <!-- ENTRADA PARA EL NCM -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                <input  type="text" class="form-control input-lg editarNCM" id="editarNCM" name="editarNCM" placeholder="Ingresar Numero de Cedula de Miembro" readonly required>

              </div>

            </div>

            <!-- ENTRADA PARA LA NOMBRE -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg editarNombre" id="editarNombre" name="editarNombre" placeholder="Ingresar Nombre Completo" required>

              </div>

            </div>


           

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg editarEmail" id="editarEmail" name="editarEmail" placeholder="Ingresar email" >

              </div>

            </div>


            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg editarTelefono" id="editarTelefono" name="editarTelefono" placeholder="Ingresar N° de Telf" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>



          </div>

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

          $editarMiembros = new ControladorMiembros();
          $editarMiembros -> ctrEditarMiembros();

        ?>      

    </div>

  </div>

</div>

<?php

  $eliminarMiembros = new ControladorMiembros();
  $eliminarMiembros -> ctrEliminarMiembros();

?>      


