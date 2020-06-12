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


<script>
    // Instantiate EasyZoom instances
    var $easyzoom = $('.easyzoom').easyZoom();

    // Get an instance API
    var api = $easyzoom.data('easyZoom');
</script>

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

                            <input class="idbarrio" type="hidden" value="<?php echo $_SESSION['idbarrio']; ?>" id="idbarrio">

                            <?php

                            $item = "id";
                            $valor = $_GET["idSolicitudes"];
                            $orden = "id";
                            $barrio = $_SESSION['idbarrio'];

                            $solicitudes = ControladorSolicitudes::ctrMostrarSolicitudesConformeBarrioObispoID($item, $valor, $orden, $barrio);




                            ?>

                            <!--=====================================
                ENTRADA DEL VENDEDOR
                ======================================-->
                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-code"></i></span>

                                    <input type="text" class="form-control" value="<?php echo  $solicitudes["codigo"]; ?>" readonly>

                                </div>

                            </div>


                            <!--=====================================
                ENTRADA DEL CLIENTE
                ======================================-->


                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                    <input type="text" class="form-control" value="<?php echo $solicitudes["ncm_miembro"]; ?>" readonly>


                                </div>

                            </div>


                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-child"></i></span>

                                    <input type="text" class="form-control" value="<?php echo $solicitudes["nombre_miembro"]; ?>" readonly>


                                </div>

                            </div>



                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-calendar-plus-o"></i></span>

                                    <input type="text" class="form-control" value="<?php echo $solicitudes["edad"]; ?>" readonly>


                                </div>

                            </div>




                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                                    <input type="text" class="form-control" value="<?php echo $solicitudes["email"]; ?>" readonly>


                                </div>

                            </div>





                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                                    <input type="text" class="form-control" value="<?php echo $solicitudes["telefono"]; ?>" readonly>


                                </div>

                            </div>







                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-thermometer-quarter"></i></span>

                                    <textarea class="form-control" rows="2" readonly><?php echo $solicitudes["enfermedad"]; ?></textarea>

                                </div>

                            </div>



                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-flask"></i></span>

                                    <textarea class="form-control" rows="3" readonly><?php echo $solicitudes["medicamento"]; ?></textarea>

                                </div>

                            </div>



                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-pie-chart"></i></span>

                                    <textarea class="form-control" rows="3" readonly><?php echo $solicitudes["dosis_recetada"]; ?></textarea>

                                </div>

                            </div>


                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>

                                    <input type="text" class="form-control" value="<?php echo $solicitudes["duracion"]; ?>" readonly>


                                </div>

                            </div>


                            <div class="form-group">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-warning"></i></span>

                                    <input type="text" class="form-control" value="<?php echo $solicitudes["necesidad"]; ?>" readonly>


                                </div>

                            </div>


                            <button data-toggle="modal" data-target="#modalPA1" data-dismiss="modal" id="PA1" class="hidden-lg">shghsggs</button>
                            <br>

                        </div>

                    </div>

                    <div class="box-footer">












                        <?php

                        $aprobado = $solicitudes["aprobacion_gerente"];

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
    <div class="form-group">
    <p class="text-center"> <b>Aprobación Gerente</b> </p> 

    <div class="input-group">

    <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
    <button type="button" class="form-control btn btn-info">Aun No Ha Sido Aprobado</button>

    
        
    </div>
                
    </div>

    ';
                        }




                        ?>
















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
                    <div class="form-group">
                    <p class="text-center"> <b>Aprobación Gerente</b> </p> 

                    <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                    <button type="button" class="form-control btn btn-info">Aun No Ha Sido Aprobado</button>



                    </div>

                    </div>

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

</div>













                        </div>
                   








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
                        <a href="<?php echo $solicitudes["Plan_Autosuficiencia_1"]; ?>">
                            <img class="img-responsive" src="<?php echo $solicitudes["Plan_Autosuficiencia_1"]; ?>">
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
                        <a href="<?php echo $solicitudes["Plan_Autosuficiencia_2"]; ?>">
                            <img class="img-responsive" src="<?php echo $solicitudes["Plan_Autosuficiencia_2"]; ?>">
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
                        <a href="<?php echo $solicitudes["Informe_Medico"]; ?>">
                            <img class="img-responsive" src="<?php echo $solicitudes["Informe_Medico"]; ?>">
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
                        <a href="<?php echo $solicitudes["Recipe_Medico"]; ?>">
                            <img class="img-responsive" src="<?php echo $solicitudes["Recipe_Medico"]; ?>">
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
                        <a href="<?php echo $solicitudes["CI"]; ?>">
                            <img class="img-responsive" src="<?php echo $solicitudes["CI"]; ?>">
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