<input class="idconsejo" type="hidden" value="<?php echo $_SESSION['idconsejo']; ?>" id="idconsejo">

<?php

$item = "id";
$valor = $_GET["idSolicitudes"];
$orden = "id";

$solicitudes = ControladorEntregar::ctrMostrarSolicitudesEntregar($item, $valor, $orden);





?>

<?php

$consejo = $solicitudes["idconsejo"];
$consejo_user = $_SESSION["idconsejo"];

if ($consejo == $consejo_user) {


    echo '';
} else {
    echo '

<script>
swal({
    type: "warning",
    title: "Esta Solicitud No Pertenece a su Consejo Si tiene alguna duda comuniquese con el Soporte Técnico",
    showConfirmButton: true,
    confirmButtonText: "Cerrar"
    }).then(function(result){
              if (result.value) {

              window.location = "entregar";

              }
          })
</script>

';
}
?>


<style>
    .boton_mover_1 {
        transform: translate(120px);
    }

    /* Shrink wrap strategy 1 */
    .easyzoom {
        float: left;
    }

    .easyzoom img {
        display: block;
    }


    /* Shrink wrap strategy 2 */
    .easyzoom {
        display: inline-block;
    }

    .easyzoom img {
        vertical-align: bottom;
    }
</style>


<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Visualizar Solicitud
        </h1>

        <ol class="breadcrumb">

            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Visualizar Solicitud</li>

        </ol>

    </section>

    <section class="content">

        <div class="row">

            <!--=====================================
      EL FORMULARIO
      ======================================-->

            <div class="col-lg-5 col-xs-12">

                <div class="box box-success">

                    <div class="box-header with-border"></div>

                    <div class="box-header with-border">
                        <p class="text-center"> <b>Datos de la Solicitud</b> </p>
                    </div>

                    <div class="box-body">

                        <div class="box">






                            <!--=====================================
                ENTRADA DEL VENDEDOR
                ======================================-->
                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-code"></i></span>

                                    <input type="text" id="codigo" class="codigo form-control" value="<?php echo  $solicitudes["codigo"]; ?>" readonly>

                                </div>

                            </div>


                            <!--=====================================
                ENTRADA DEL CLIENTE
                ======================================-->


                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                    <input type="text" class="ncm form-control" value="<?php echo $solicitudes["ncm"]; ?>" readonly>


                                </div>

                            </div>



                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-child"></i></span>

                                    <input type="text" class="nombre form-control" value="<?php echo $solicitudes["nombre"]; ?>" readonly>


                                </div>

                            </div>



                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-calendar-plus-o"></i></span>

                                    <input type="text" class="edad form-control" value="<?php echo $solicitudes["edad"]; ?>" readonly>


                                </div>

                            </div>




                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                                    <input type="text" class="email form-control" value="<?php echo $solicitudes["email"]; ?>" readonly>


                                </div>

                            </div>





                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                                    <input type="text" class="telefono form-control" value="<?php echo $solicitudes["telefono"]; ?>" readonly>


                                </div>

                            </div>




                            <input type="hidden" class="idbarrio" value="<?php echo $solicitudes["idbarrio"]; ?>">
                            <input type="hidden" class="idestaca" value="<?php echo $solicitudes["idestaca"]; ?>">
                            <input type="hidden" class="idconsejo" value="<?php echo $solicitudes["idconsejo"]; ?>">
                            <input type="hidden" class="idpais" value="<?php echo $solicitudes["idpais"]; ?>">





                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-thermometer-quarter"></i></span>

                                    <textarea class="enfermedad form-control" rows="2" readonly><?php echo $solicitudes["enfermedad"]; ?></textarea>

                                </div>

                            </div>



                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-flask"></i></span>

                                    <textarea class="medicamento form-control" rows="3" readonly><?php echo $solicitudes["medicamento"]; ?></textarea>

                                </div>

                            </div>



                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-pie-chart"></i></span>

                                    <textarea class="dosis form-control" rows="3" readonly><?php echo $solicitudes["dosis_recetada"]; ?></textarea>

                                </div>

                            </div>


                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>

                                    <input type="text" class="duracion form-control" value="<?php echo $solicitudes["duracion"]; ?>" readonly>


                                </div>

                            </div>


                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-warning"></i></span>

                                    <input type="text" class="necesidad form-control" value="<?php echo $solicitudes["necesidad"]; ?>" readonly>


                                </div>

                            </div>
                            <input type="hidden" class="pa1" value="<?php echo $solicitudes["pa1"]; ?>">
                            <input type="hidden" class="pa2" value="<?php echo $solicitudes["pa2"]; ?>">
                            <input type="hidden" class="im" value="<?php echo $solicitudes["im"]; ?>">
                            <input type="hidden" class="rm" value="<?php echo $solicitudes["rm"]; ?>">
                            <input type="hidden" class="ci" value="<?php echo $solicitudes["ci"]; ?>">
                            <input type="hidden" class="fecha_solicitud" value="<?php echo $solicitudes["fecha"]; ?>">






                            <p class="text-center hidden-lg"> <b> Documentos de la Solicitud</b> </p>
                            <button class="hidden-lg btn-block btn btn-primary" data-toggle="modal" data-target="#modalPA1" data-dismiss="modal" id="PA1">Plan de Autosuficiencia PAG.
                                1</button>
                            <button class="hidden-lg btn  btn-block btn-primary" data-toggle="modal" data-target="#modalPA2" data-dismiss="modal" id="PA2">Plan de Autosuficiencia PAG.
                                2</button>

                            <button class="hidden-lg btn btn-block btn-primary" data-toggle="modal" data-target="#modalIM" data-dismiss="modal" id="IM">Informe Médico</button>
                            <button class="hidden-lg btn btn-block btn-primary" data-toggle="modal" data-target="#modalRM" data-dismiss="modal" id="RM">Recipe Médico</button>
                            <button class="hidden-lg btn btn-block btn-primary" data-toggle="modal" data-target="#modalCI" data-dismiss="modal" id="CI">C.I del Miembro</button>



                        </div>

                    </div>

                    <div class="box-footer">


                        <p class="hidden-lg text-center"> <b>Estado de la Solicitud</b> </p>
                        <?php

                        $aprobado = $solicitudes["aprobacion_gerente"];

                        if ($aprobado == 1) {
                            echo '
    <div class="hidden-lg form-group">
    <p class="hidden-lg text-center"> Aprobación Gerente</p> 

    <div class="hidden-lg input-group">

    <span class="hidden-lg input-group-addon"><i class="fa fa-user-o"></i></span>
    <button type="hidden-lg button" class="form-control btn btn-success">Aprobado</button>

    
        
    </div>

                
    </div>
    <textarea  class="hidden-lg form-control"  rows="3" readonly>';
                            echo $solicitudes["comentarios_gerente"];
                            echo '</textarea>     

    ';
                        } else if ($aprobado == 2) {
                            echo '
    <div class=" hidden-lg form-group">
    <p class="text-center hidden-lg"> Aprobación Gerente </p> 

    <div class="input-group hidden-lg">

    <span class="input-group-addon hidden-lg"><i class="fa fa-user-o"></i></span>
    <button type="button" class="form-control hidden-lg btn btn-danger">Desaprobado</button>

    
        
    </div>
                
    </div>

    <textarea  class="hidden-lg form-control"  rows="3" readonly>';
                            echo $solicitudes["comentarios_gerente"];
                            echo '</textarea>     



    ';
                        } else {

                            echo '
                            <input type="hidden" class="id_solicitud" id="id_solicitud" name="id_solicitud" value="';
                            echo $solicitudes["id"];
                            echo '" ></input>
                            <input type="hidden" name="codigo_solicitud" value="';
                            echo $solicitudes["codigo"];
                            echo '"> </input>
                                    <div class="hidden-lg form-group">
                                    <p class="text-center"> <b>Aprobación Gerente</b> </p> 
                
                                    <div class="input-group">
                
                                    <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                                    <button type="button" id="aprobacion_gerente"  class="aprobacion_gerente form-control btn btn-info">Aun No Ha Sido Aprobado</button>
                
                                    </div>
                
                                    </div>
                                         <br>   
                

    ';
                        }
                        ?>




                        <br>


                        <?php

                        $aprobado_asesor = $solicitudes["aprobacion_asesor"];

                        if ($aprobado_asesor == 1) {
                            echo '
<div class="hidden-lg form-group">
<p class="hidden-lg text-center"> Aprobación Asesor Médico</p> 

<div class="hidden-lg input-group">

<span class="hidden-lg input-group-addon"><i class="fa fa-user-md"></i></span>
<button type="hidden-lg button" class="form-control btn btn-success">Aprobado</button>



</div>


</div>
<textarea  class="hidden-lg form-control"  rows="3" readonly>';
                            echo $solicitudes["comentarios_asesor"];
                            echo '</textarea>     

';
                        } else if ($aprobado_asesor == 2) {
                            echo '
<div class="hidden-lg form-group">
<p class="hidden-lg text-center"> Aprobación Asesor Médico </p> 

<div class="hidden-lg input-group">

<span class="hidden-lg input-group-addon"><i class="fa fa-user-md"></i></span>
<button type="button" class="hidden-lg form-control btn btn-danger">Desaprobado</button>



</div>

</div>

<textarea  class="hidden-lg form-control"  rows="3" readonly>';
                            echo $solicitudes["comentarios_asesor"];
                            echo '</textarea>     



';
                        } else {

                            echo '
<div class="hidden-lg form-group">
<p class=" hidden-lg text-center"> Aprobación Asesor Médico </p> 

<div class="hidden-lg input-group">

<span class="hidden-lg input-group-addon"><i class="fa fa-user-md"></i></span>
<button type="hidden-lg button" class="form-control btn btn-info">Aun No Ha Sido Aprobado</button>



</div>

</div>

';
                        }




                        ?>



                        <br>



                        <?php

                        $aprobado_finanzas = $solicitudes["aprobacion_finanzas"];

                        if ($aprobado_finanzas == 1) {
                            echo '
<div class="hidden-lg form-group">
<p class="text-center"> Aprobación Finanzas </p> 

<div class="input-group">

<span class="input-group-addon"><i class="fa fa-money"></i></span>
<button type="button" class="form-control btn btn-success">Aprobado</button>



</div>


</div>
<textarea  class="hidden-lg form-control"  rows="3" readonly>';
                            echo $solicitudes["comentarios_finanzas"];
                            echo '</textarea>     

';
                        } else if ($aprobado_finanzas == 2) {
                            echo '
<div class="hidden-lg form-group">
<p class="text-center"> Aprobación Finanzas </p> 

<div class="input-group">

<span class="input-group-addon"><i class="fa fa-money"></i></span>
<button type="button" class="form-control btn btn-danger">Desaprobado</button>



</div>

</div>

<textarea  class="hidden-lg form-control"  rows="3" readonly>';
                            echo $solicitudes["comentarios_finanzas"];
                            echo '</textarea>     



';
                        } else {

                            echo '
<div class="hidden-lg form-group">
<p class="text-center"> Aprobación Finanzas</p> 

<div class="input-group">

<span class="input-group-addon"><i class="fa fa-money"></i></span>
<button type="button" class="form-control btn btn-info">Aun No Ha Sido Aprobado</button>



</div>

</div>

';
                        }




                        ?>


                        <br>
                        <br>

                    </div>




                </div>

            </div>

            <!--=====================================
      LA TABLA DE PRODUCTOS
      ======================================-->

            <div class="col-lg-7 hidden-md hidden-sm hidden-xs">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <p class="text-center"> <b>Documentos de la Solicitud</b> </p>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn-block btn btn-primary" data-toggle="modal" data-target="#modalPA1" data-dismiss="modal" id="PA1">Plan de Autosuficiencia PAG. 1</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn  btn-block btn-primary" data-toggle="modal" data-target="#modalPA2" data-dismiss="modal" id="PA2">Plan de Autosuficiencia PAG. 2</button>
                            </div>

                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalIM" data-dismiss="modal" id="IM">Informe Médico</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalRM" data-dismiss="modal" id="RM">Recipe Médico</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalCI" data-dismiss="modal" id="CI">C.I del Miembro</button>
                            </div>
                        </div>



                    </div>

                </div>


            </div>






            <div class="col-lg-7 hidden-md hidden-sm hidden-xs">

                <div class="box box-warning">
                    <div class="box-header with-border">
                        <p class="text-center"> <b>Estado de la Solicitud</b> </p>
                    </div>
                    <div class="box-body">




                        <div class="row">


                            <div class="col-md-4">



                                <?php

                                $aprobado = $solicitudes["aprobacion_gerente"];
                                $id = $solicitudes["id"];


                                if ($aprobado == 1) {
                                    echo '
                    <div class="form-group">
                    <p class="text-center"> <b>Aprobación Gerente</b> </p> 

                    <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                    <button type="button" class="form-control btn btn-success">Aprobado</button>



                    </div>


                    </div>
                    <textarea  class="form-control"  rows="3" readonly>';
                                    echo $solicitudes["comentarios_gerente"];
                                    echo '</textarea>     

                    ';
                                } else if ($aprobado == 2) {
                                    echo '
                    <div class="form-group">
                    <p class="text-center"> <b>Aprobación Gerente</b> </p> 

                    <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                    <button type="button" class="form-control btn btn-danger">Desaprobado</button>



                    </div>

                    </div>

                    <textarea  class="form-control"  rows="3" readonly>';
                                    echo $solicitudes["comentarios_gerente"];
                                    echo '</textarea>     



                    ';
                                } else {

                                    echo '
            <input type="hidden" class="id_solicitud_2" id="id_solicitud_2" name="id_solicitud_2" value="';
                                    echo $solicitudes["id"];
                                    echo '" ></input>
            <input type="hidden" name="codigo_solicitud_2" value="';
                                    echo $solicitudes["codigo"];
                                    echo '"> </input>
                    <div class="form-group">
                    <p class="text-center"> <b>Aprobación Gerente</b> </p> 

                    <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                    <button type="button" id="aprobacion_gerente_2"  class="aprobacion_gerente_2 form-control btn btn-info">Aun No Ha Sido Aprobado</button>

                    </div>

                    </div>
                  
                         <br>   

                    ';
                                }






                                ?>

                            </div>

                            <div class="col-md-4">



                                <?php

                                $aprobado_asesor = $solicitudes["aprobacion_asesor"];

                                if ($aprobado_asesor == 1) {
                                    echo '
<div class="form-group">
<p class="text-center"> <b>Aprobación Asesor Médico</b> </p> 

<div class="input-group">

<span class="input-group-addon"><i class="fa fa-user-md"></i></span>
<button type="button" class="form-control btn btn-success">Aprobado</button>



</div>


</div>
<textarea  class="form-control"  rows="3" readonly>';
                                    echo $solicitudes["comentarios_asesor"];
                                    echo '</textarea>     

';
                                } else if ($aprobado_asesor == 2) {
                                    echo '
<div class="form-group">
<p class="text-center"> <b>Aprobación Asesor Médico</b> </p> 

<div class="input-group">

<span class="input-group-addon"><i class="fa fa-user-md"></i></span>
<button type="button" class="form-control btn btn-danger">Desaprobado</button>



</div>

</div>

<textarea  class="form-control"  rows="3" readonly>';
                                    echo $solicitudes["comentarios_asesor"];
                                    echo '</textarea>     



';
                                } else {

                                    echo '
<div class="form-group">
<p class="text-center"> <b>Aprobación Asesor Médico</b> </p> 

<div class="input-group">

<span class="input-group-addon"><i class="fa fa-user-md"></i></span>
<button type="button" class="form-control btn btn-info">Aun No Ha Sido Aprobado</button>



</div>

</div>

';
                                }




                                ?>

                            </div>




                            <div class="col-md-4">



                                <?php

                                $aprobado_finanzas = $solicitudes["aprobacion_finanzas"];

                                if ($aprobado_finanzas == 1) {
                                    echo '
<div class="form-group">
<p class="text-center"> <b>Aprobación Finanzas</b> </p> 

<div class="input-group">

<span class="input-group-addon"><i class="fa fa-money"></i></span>
<button type="button" class="form-control btn btn-success">Aprobado</button>



</div>


</div>
<textarea  class="form-control"  rows="3" readonly>';
                                    echo $solicitudes["comentarios_finanzas"];
                                    echo '</textarea>     

';
                                } else if ($aprobado_finanzas == 2) {
                                    echo '
<div class="form-group">
<p class="text-center"> <b>Aprobación Finanzas</b> </p> 

<div class="input-group">

<span class="input-group-addon"><i class="fa fa-money"></i></span>
<button type="button" class="form-control btn btn-danger">Desaprobado</button>



</div>

</div>

<textarea  class="form-control"  rows="3" readonly>';
                                    echo $solicitudes["comentarios_finanzas"];
                                    echo '</textarea>     



';
                                } else {

                                    echo '
<div class="form-group">
<p class="text-center"> <b>Aprobación Finanzas</b> </p> 

<div class="input-group">

<span class="input-group-addon"><i class="fa fa-money"></i></span>
<button type="button" class="form-control btn btn-info">Aun No Ha Sido Aprobado</button>



</div>

</div>

';
                                }




                                ?>
                                <br>
                                <br>
                                <br>


                            </div>













                        </div>


                        <br>





                        <br>

                    </div>




                </div>


            </div>

        </div>

    </section>

</div>































































<!-- MODAL PAGINA 1 PLAN DE AUTOSUFICIENCIA -->

<div id="modalPA1" class="modal fade" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">


            <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>


            </div>

            <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

            <div class="modal-body">

                <div class="box-body">
                    <p class="text-center"><b>Plan De Autosuficiencia PAG. 1</b> </p>

                    <div class="">
                        <a href="<?php echo $solicitudes["pa1"]; ?>">
                            <img class="img-responsive" src="<?php echo $solicitudes["pa1"]; ?>">
                        </a>

                    </div>

                </div>
                <!--=====================================
        PIE DEL MODAL
        ======================================-->

                <div class="modal-footer">


                </div>
            </div>




        </div>

    </div>

</div>






<!-- PLAN DE AUTOSUFICIENCIA PAG 2 -->
<div id="modalPA2" class="modal fade" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">


            <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>


            </div>

            <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

            <div class="modal-body">

                <div class="box-body">
                    <p class="text-center"><b>Plan De Autosuficiencia PAG. 2</b> </p>

                    <div class="">
                        <a href="<?php echo $solicitudes["pa2"]; ?>">
                            <img class="img-responsive" src="<?php echo $solicitudes["pa2"]; ?>">
                        </a>

                    </div>

                </div>
                <!--=====================================
        PIE DEL MODAL
        ======================================-->

                <div class="modal-footer">


                </div>
            </div>




        </div>

    </div>

</div>






<!-- INFORME MEDICO -->
<div id="modalIM" class="modal fade" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">


            <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>


            </div>

            <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

            <div class="modal-body">

                <div class="box-body">
                    <p class="text-center"><b>Informe Médico</b> </p>

                    <div class="">
                        <a href="<?php echo $solicitudes["im"]; ?>">
                            <img class="img-responsive" src="<?php echo $solicitudes["im"]; ?>">
                        </a>

                    </div>

                </div>
                <!--=====================================
        PIE DEL MODAL
        ======================================-->

                <div class="modal-footer">


                </div>
            </div>




        </div>

    </div>

</div>



<!-- RECIPE MEDICO -->
<div id="modalRM" class="modal fade" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">


            <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>


            </div>

            <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

            <div class="modal-body">

                <div class="box-body">
                    <p class="text-center"><b>Recipe Médico</b> </p>

                    <div class="">
                        <a href="<?php echo $solicitudes["rm"]; ?>">
                            <img class="img-responsive" src="<?php echo $solicitudes["rm"]; ?>">
                        </a>

                    </div>

                </div>
                <!--=====================================
        PIE DEL MODAL
        ======================================-->

                <div class="modal-footer">


                </div>
            </div>




        </div>

    </div>

</div>



<!-- CEDULA IDENTIDAD MIEMRBO -->
<div id="modalCI" class="modal fade" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">


            <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>


            </div>

            <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

            <div class="modal-body">

                <div class="box-body">
                    <p class="text-center"><b>C.I del Miembro</b> </p>

                    <div class="">
                        <a href="<?php echo $solicitudes["ci"]; ?>">
                            <img class="img-responsive" src="<?php echo $solicitudes["ci"]; ?>">
                        </a>

                    </div>

                </div>
                <!--=====================================
        PIE DEL MODAL
        ======================================-->

                <div class="modal-footer">


                </div>
            </div>









        </div>

    </div>

</div>







<div>
