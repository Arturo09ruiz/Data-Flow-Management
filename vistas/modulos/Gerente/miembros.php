
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




     <div class="box-tools pull-right">


   
   <button class="btn btnExcel btn-success" style="margin-top:5px">Descargar reporte en Excel</button>

  </a>

</div>
    </div>

  </div>

<script>


$(".btnExcel").click(function(){
  var consejo = $("#idconsejo").val();

  window.location = "vistas/modulos/Gerente/descargar-reporte-gerente-miembros.php?consejo="+consejo;


})



</script>
</section>

</div>


