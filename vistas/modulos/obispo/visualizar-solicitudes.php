<style>
    .boton_mover_1 {
        transform: translate(120px);
    }
    .zoom{
        /* Aumentamos la anchura y altura durante 2 segundos */
        transition: width 2s, height 2s, transform 2s;
        -moz-transition: width 2s, height 2s, -moz-transform 2s;
        -webkit-transition: width 2s, height 2s, -webkit-transform 2s;
        -o-transition: width 2s, height 2s,-o-transform 2s;
    }
    .zoom:hover{
        /* tranformamos el elemento al pasar el mouse por encima al doble de
           su tamaño con scale(2). */
        transform : scale(2);
        -moz-transform : scale(2);      /* Firefox */
        -webkit-transform : scale(2);   /* Chrome - Safari */
        -o-transform : scale(2);        /* Opera */
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

                <div class="box box-warning">
                    <div class="box-header with-border">
                        <p class="text-center"> <b>Documentos de la Solicitud</b> </p>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <button class="boton_mover_1 btn btn-primary" data-toggle="modal" data-target="#modalPA1" data-dismiss="modal" id="PA1">Plan de Autosuficiencia PAG. 1</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-primary">Plan de Autosuficiencia PAG. 2</button>
                            </div>

                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-primary">Informe Médico</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary">Recipe Médico</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary">C.I del Miembro</button>
                            </div>
                        </div>



                        <!-- <p class="text-center"> Plan De Autosuficiencia PAG. 1</p>
                <img class="img-thumbnail" src="<?php echo $solicitudes["Plan_Autosuficiencia_1"]; ?>" alt="">
<hr>

                <p class="text-center"> Plan De Autosuficiencia PAG. 2</p>
                <img class="img-thumbnail" src="<?php echo $solicitudes["Plan_Autosuficiencia_2"]; ?>" alt="">

<hr>
                <p class="text-center"> Informe Médico</p>
                <img class="img-thumbnail" src="<?php echo $solicitudes["Informe_Medico"]; ?>" alt="">
<hr>
               <p class="text-center"> Recipe Médico</p>
                <img class="img-thumbnail" src="<?php echo $solicitudes["Recipe_Medico"]; ?>" alt="">
<hr>
                <p class="text-center"> Cedula de Identidad Del Beneficiario</p>
                <img class="img-thumbnail" src="<?php echo $solicitudes["CI"]; ?>" alt="">
<hr> -->

                    </div>

                </div>


            </div>

        </div>

    </section>

</div>

<!--=====================================
MODAL AGREGAR CLIENTE
======================================-->

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
                        <p class="text-center" >  <b>Plan De Autosuficiencia</b> </p>
                        <div class="zoom">Efecto de zoom con CSS3</div>

                     <img class="zoom img-responsive" src="<?php echo $solicitudes["Plan_Autosuficiencia_1"]; ?>" alt="">

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