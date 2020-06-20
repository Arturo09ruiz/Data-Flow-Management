<div class="content-wrapper">

  <section class="content-header">
    
 
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Reporte Miembros</li>
    
    </ol>

  </section>
  <h4 class="text-center">Reporte Miembros</h4>

  <section class="content">
    

     <div class="row">
       
      

        <div class="col-lg-6">

          <?php

          if($_SESSION["perfil"] =="Gerente"){
          
           include "reportes/productos-mas-vendidos-gerente.php";

         }

          ?>

        </div>

         <div class="col-lg-6">

          <?php

          if($_SESSION["perfil"] =="Gerente"){
          
           include "inicio/productos-recientes-gerente.php";

         }

          ?>

        </div>

         <div class="col-lg-12">
           
          <?php

          if($_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Vendedor"){

             echo '<div class="box box-success">

             <div class="box-header">

             <h1>Bienvenid@ ' .$_SESSION["nombre"].'</h1>

             </div>

             </div>';

          }

          ?>

         </div>

     </div>

  </section>
 
</div>
