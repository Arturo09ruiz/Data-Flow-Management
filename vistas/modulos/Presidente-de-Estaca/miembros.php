
<div class="content-wrapper">

<section class="content-header">
  
  <h1>
    
    Visualizar Miembros
  
  </h1>

  <ol class="breadcrumb">
    
    <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
    
    <li class="active">Visualizar Miembros</li>
  
  </ol>

</section>

<section class="content">

  <div class="box">


    <div class="box-body">
      
     <table class="table table-bordered table-striped dt-responsive tablaMiembrosPdtEstaca" width="100%">
       
      <thead>
       
       <tr>
         
         <th style="width:10px">#</th>
         <th>NCM</th>
         <th>Nombre Completo</th>
         <th>Edad</th>
         <th>Email</th>
         <th>N° De Telf</th>
         <th>Barrio</th>


         
       </tr> 

      </thead>      

     </table>

     <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">
     <input class="idbarrio" type="hidden" value="<?php echo $_SESSION['idbarrio']; ?>" id="idbarrio">
     <input class="idestaca" type="hidden" value="<?php echo $_SESSION['idestaca']; ?>" id="idestaca">
     <input type="hidden" value="<?php echo $_SESSION['idconsejo']; ?>" id="idconsejo">
     <input type="hidden" value="<?php echo $_SESSION['idpais']; ?>" id="idpais">





    </div>

  </div>

</section>

</div>


