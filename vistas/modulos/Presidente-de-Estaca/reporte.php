<div class="content-wrapper">

  <section class="content-header">
    
    
    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Reporte Programa De Médicinas</li>
    
    </ol>

  </section>
  <h4 class="text-center">Reporte Programa De Médicinas</h4>

  <section class="content">
    <div class="row">
      
    <?php

    if($_SESSION["perfil"] =="Presidente-de-Estaca"){

      include "inicio/cajas-superiores-medicinas.php";

    }

    ?>

    </div> 

     <div class="row">
       
      

        <div class="col-lg-6">

          <?php

          if($_SESSION["perfil"] =="Presidente-de-Estaca"){
          
           include "reportes/productos-mas-vendidos.php";

         }

          ?>

        </div>

         <div class="col-lg-6">

          <?php

          if($_SESSION["perfil"] =="Presidente-de-Estaca"){
          
           include "inicio/productos-recientes.php";

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
