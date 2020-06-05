<script>
  $(document).ready(function() {
    
    $('.js-example-basic-single').select2({
});})
</script>
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Pedidos
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Pedidos</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPedidos">
          
          Agregar Pedidos

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablaPedidos" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Código</th>
           <th>NCM</th>
           <th>Nombre del Miembro</th>
           <th>Edad</th>
           <th>Email</th>
           <th>Telf</th>
           <th>Enfermedad</th>
           <th>Medicamento</th>
           <th>Dosis Recetada</th>
           <th>Duracion</th>
           <th>Necesidad</th>
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
MODAL AGREGAR PRODUCTO
======================================-->

<div id="modalAgregarPedidos" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Pedido</h4>

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

                <input type="text" class="form-control input-lg" id="nuevoCodigo" name="nuevoCodigo" placeholder="Ingresar código"  required>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-child"></i></span> 

                <select class="js-example-basic-single form-control input-lg nuevaNombre" id="nuevaNombre" name="nuevaNombre" required>
                  
                  <option value="">Selecionar Miembro</option>

                  <?php

                  $item = null;
                  $valor = null;
                  $orden = null;
                  $barrio = $_SESSION['idbarrio'];
                  $miembros = ControladorMiembros::ctrMostrarMiembrosConformeBarrioObispo($item, $valor,$orden,$barrio);

                  foreach ($miembros as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                  }

                  ?>
  
                </select>

              </div>

            </div>





<input type="hidden"  class="ncm" name="ncm" id="ncm">
<input type="hidden" class="nombre" name="nombre" id="nombre">
<input type="hidden" class="edad" name="edad" id="edad">
<input type="hidden" class="email" name="email" id="email">
<input type="hidden" class="telefono" name="telefono" id="telefono">

      <input name="idbarrio" class="idbarrio" type="hidden" value="<?php echo $_SESSION['idbarrio']; ?>" id="idbarrio">
       <input name="idestaca" type="hidden" value="<?php echo $_SESSION['idestaca']; ?>" id="idestaca">
       <input  name="idconsejo" type="hidden" value="<?php echo $_SESSION['idconsejo']; ?>" id="idconsejo">
       <input  name="idpais" type="hidden" value="<?php echo $_SESSION['idpais']; ?>" id="idpais">





        

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-thermometer-quarter"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaEnfermedad" placeholder="Ingresar enfermedad" required>

              </div>

            </div>
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-flask"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaMedicamento" placeholder="Ingresar Medicamento" required>

              </div>

            </div>

           
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-pie-chart"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDosis" placeholder="Ingresar Dosis Recetada" required>

              </div>

            </div>

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDuracion" placeholder="Ingresar Duracion" required>

              </div>

            </div>

           

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-bicycle"></i></span> 

                  <select class="js-example-basic-single form-control input-lg" name="nuevaNecesidad">
                  <option value="Normal">Normal</option>
                  <option value="Urgente">Urgente</option>
                  <option value="Emergencia">Emergencia</option>

                  </select>

              </div>

            </div>

           




        
            
            <div class="form-group">
              
              <div class="panel">SUBIR PLAN DE AUTOSUFICIENCIA</div>

              <input type="file" class="nuevaImagen" name="nuevaImagen">

            </div>



            <!-- ENTRADA PARA SUBIR FOTO -->

          <div class="form-group"> 
              
              <div class="panel">SUBIR INFORME MEDICO</div>

              <input type="file" class=" nuevaImagen" name="nuevaImagen">



            </div>


            <div class="form-group">
              
              <div class="panel">SUBIR RECIPE MEDICO</div>

              <input type="file" class="nuevaRecipe" name="nuevaRecipe">



            </div>

            <div class="form-group">
              
              <div class="panel">SUBIR CEDULA DE IDENTIDAD DEL MIEMBRO</div>

              <input type="file" class="nuevaCedula" name="nuevaCedula">



            </div>


          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Enviar Solicitud</button>

        </div>

      </form>

        <?php

          $crearSolicitudes = new ControladorSolicitudes();
          $crearSolicitudes -> ctrCrearSolicitudes();

        ?>  

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->

<div id="modalEditarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg"  name="editarCategoria" readonly required>
                  
                  <option id="editarCategoria"></option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL CÓDIGO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                <input type="text" class="form-control input-lg" id="editarCodigo" name="editarCodigo" readonly required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DESCRIPCIÓN -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="editarDescripcion" name="editarDescripcion" required>

              </div>

            </div>

             <!-- ENTRADA PARA STOCK -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" id="editarStock" name="editarStock" min="0" required>

              </div>

            </div>

             <!-- ENTRADA PARA PRECIO COMPRA -->

             <div class="form-group row">

                <div class="col-xs-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                    <input type="number" class="form-control input-lg" id="editarPrecioCompra" name="editarPrecioCompra" step="any" min="0" required>

                  </div>

                </div>

                <!-- ENTRADA PARA PRECIO VENTA -->

                <div class="col-xs-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" id="editarPrecioVenta" name="editarPrecioVenta" step="any" min="0" readonly required>

                  </div>
                
                  <br>

                  <!-- CHECKBOX PARA PORCENTAJE -->

                  <div class="col-xs-6">
                    
                    <div class="form-group">
                      
                      <label>
                        
                        <input type="checkbox" class="minimal porcentaje" checked>
                        Utilizar procentaje
                      </label>

                    </div>

                  </div>

                  <!-- ENTRADA PARA PORCENTAJE -->

                  <div class="col-xs-6" style="padding:0">
                    
                    <div class="input-group">
                      
                      <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>

                      <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                    </div>

                  </div>

                </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR IMAGEN</div>

              <input type="file" class="nuevaImagen" name="editarImagen">

              <p class="help-block">Peso máximo de la imagen 2MB</p>

              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

              <input type="hidden" name="imagenActual" id="imagenActual">

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

          $editarProducto = new ControladorProductos();
          $editarProducto -> ctrEditarProducto();

        ?>      

    </div>

  </div>

</div>

<?php

  $eliminarProducto = new ControladorProductos();
  $eliminarProducto -> ctrEliminarProducto();

?>      



