<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "header.php"; ?>    
    <title>Buscador</title>
</head>
<body>
    <?php include "barranav.php"; ?>
    <div class="container" style="margin-top:50px">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <center><h2>Formulario Único de Comisiones</h2></center><br><br>
                <form id="contact-form" method="post" action="#" role="form">
                    <div class="messages"></div>
                    <div class="controls">
                        <center><div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >De Estudios</label>
                                    <input name= "#" type="radio">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >De Servicios</label>
                                    <input name= "#" type="radio">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >Cometido</label>
                                    <input name= "#" type="radio">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div></center>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Nombre</label>
                                    <input id="" type="text" name="" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Rut</label>
                                    <input id="" type="text" name="" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Cargo</label>
                                    <input id="" type="text" name="" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Departamento</label>
                                    <input id="" type="text" name="" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="motivocancela">Motivo</label>
                            <textarea id="" name="" cols="80" rows="3" class="form-control" ></textarea>
                        </div>

                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Fecha</label>
                                    <input id="" type="text" name="" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Lugar de Comision</label>
                                    <input id="" type="text" name="" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >Duracion</label>
                                    <input id="" type="text" name="" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >Desde</label>
                                    <input id="" type="text" name="" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >Hasta</label>
                                    <input id="" type="text" name="" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>





                        <table class="table table-bordered">
                            <tr class="filaasistente">
                                <th colspan="4">Su objetivo es</th>
                                <th colspan="4">Su origen es</th>
                            </tr>
                                
                                <td width="70" colspan="2">
                                    <table class="tabledia table-hover small agenda agenda-hover ">
                                        <tr class="morning"><td>Especializacion en su area</td>
                                            <td><input type="checkbox"></td></tr>
                                        <tr class="morning"><td>Investigacion y desarrollo de trabajos</td>
                                            <td><input type="checkbox"></td></tr>
                                        <tr class="morning"><td>Representar a la UMCE</td>
                                            <td><input type="checkbox"></td></tr>
                                        <tr class="morning"><td>Integracion y/o intercooperacion</td>
                                            <td><input type="checkbox"></td></tr>
                                        <tr class="morning"><td>Otro</td>
                                            <td><input type="checkbox"></td></tr>
                                 </td>



                        </table>








                    </div>
                </form>
            </div><!-- /.8 -->
        </div> <!-- /.row-->
    </div> <!-- /.container-->
</body>
</html>
