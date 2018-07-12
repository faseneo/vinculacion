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
                <center><h3>Formulario Único de Comisiones</h3></center><br><br>
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
                                <th colspan="2">Su objetivo es</th>
                                <th colspan="2">Su origen es</th>
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
                                    </table>                               
                                </td>
                                <td width="70" colspan="2">
                                    <table class="tabledia table-hover small agenda agenda-hover ">
                                        <tr class="morning"><td>Invitacion</td>
                                            <td><input type="checkbox"></td></tr>
                                        <tr class="morning"><td>Disposicion del departamento</td>
                                            <td><input type="checkbox"></td></tr>
                                        <tr class="morning"><td>Proposicion del funcionario</td>
                                            <td><input type="checkbox"></td></tr>
                                        <tr class="morning"><td>Concurrencia regular</td>
                                            <td><input type="checkbox"></td></tr>
                                        <tr class="morning"><td>Otro</td>
                                            <td><input type="checkbox"></td></tr>
                                     </table>
                                </td>
                        </table>

                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label >Su ausencia requerira un reemplazante</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label >Si</label>
                                    <input name= "#" type="radio">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label >No</label>
                                    <input name= "#" type="radio">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>


                        <table class="table table-bordered">
                            <tr class="filaasistente">
                                <th colspan="2">Comision con gastos de:</th>
                                <th colspan="2"></th>
                                <th colspan="2">Valor</th>
                            </tr>  
                                <td width="30" colspan="2">
                                    <table class="tabledia table-hover small agenda agenda-hover ">
                                        <tr class="morning"><td>Viaticos (*)</td></tr>
                                        <tr class="morning"><td>Pasajes</td></tr>
                                        <tr class="morning"><td>Inscripcion</td></tr>
                                        <tr class="morning"><td>Otros(Indicar)</td></tr>  
                                    </table>                               
                                </td>
                                <td width="30" colspan="2">
                                    <table class="tabledia table-hover small agenda agenda-hover ">
                                        <tr class="morning"><td>Si</td>
                                            <td><input type="checkbox"></td>
                                            <td>No</td><td><input type="checkbox"></td></tr>
                                        <tr class="morning"><td>Si</td>
                                            <td><input type="checkbox"></td>
                                            <td>No</td><td><input type="checkbox"></td></tr>
                                        <tr class="morning"><td>Si</td>
                                            <td><input type="checkbox"></td>
                                            <td>No</td><td><input type="checkbox"></td></tr>
                                        <tr class="morning"><td>Si</td>
                                            <td><input type="checkbox"></td>
                                            <td>No</td><td><input type="checkbox"></td></tr>
                                     </table>
                                </td>
                                <td width="30" colspan="2">
                                    <table class="tabledia table-hover small agenda agenda-hover ">
                                        <tr class="morning"><td></td>
                                            <td><input type="text"></td></tr>
                                        <tr class="morning"><td></td>
                                            <td><input type="text"></td></tr>
                                        <tr class="morning"><td></td>
                                            <td><input type="text"></td></tr>
                                        <tr class="morning"><td></td>
                                            <td><input type="text"></td></tr>
                                     </table>
                                </td>
                            <tr class="filaasistente">
                                <th colspan="2"></th>
                                <th colspan="2">Gasto Total:</th>
                                <th colspan="2"><input type="text"></th>
                            </tr>     
                        </table>

                        <p>NOTA: Los comprobantes de gastos, en original, deben entregarse en el Dpto. de Personal en un plazo máximo de 30 días.</p>
                        <p>(*) Los viaticos cubren gastos de alojamiento y alimentación y no se rinden.</p><br>


                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label >Solicita anticipo:</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label >Viaticos</label>
                                    <input name= "#" type="radio">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label >Pasajes</label>
                                    <input name= "#" type="radio">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label >Inscripcion</label>
                                    <input name= "#" type="radio">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label >Arancel</label>
                                    <input name= "#" type="radio">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <center><h3>Informe Presupuestario</h3></center>

                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <tr>
                                        <th><label>Items</label></th>
                                        <th><label>Presupuesto al</label></th>
                                        <th><label>Solicitado</label></th>
                                        <th><label>Saldo</label></th>
                                    </tr>
                                    <tr>
                                        <tr class="morning"><td>Viaticos (*)</td>
                                        <th><input name= "#" type="text"></th>
                                        <th><input name= "#" type="text"></th>
                                        <th><input name= "#" type="text"></th>
                                        </tr>
                                        <tr class="morning"><td>Pasajes</td>
                                        <th><input name= "#" type="text"></th>
                                        <th><input name= "#" type="text"></th>
                                        <th><input name= "#" type="text"></th>
                                        </tr>
                                        <tr class="morning"><td>Perfeccionamiento</td>
                                        <th><input name= "#" type="text"></th>
                                        <th><input name= "#" type="text"></th>
                                        <th><input name= "#" type="text"></th>
                                        </tr>
                                        <tr class="morning"><td>Extension</td>
                                        <th><input name= "#" type="text"></th>
                                        <th><input name= "#" type="text"></th>
                                        <th><input name= "#" type="text"></th>
                                        </tr>
                                    </tr>
                                    <tr>
                                        <th><label>Total</label></th>
                                        <th><input name= "#" type="text"></th>
                                        <th><input name= "#" type="text"></th>
                                        <th><input name= "#" type="text"></th>
                                    </tr>
                                </table>
                            </div>



                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <tr>
                                        <th colspan="3"><center><label>Comision de Servicio - Estudio autorizado por:</label></center></th>
                                    </tr>
                                    <tr>
                                        <th><label>Jefe Directo</label></th>
                                        <th><input name= "#" type="text"></th>
                                        <th><label>Fecha:</label><input name= "#" type="text"></th>
                                    </tr>
                                    <tr>
                                        <th><label>Encargado Centro de Costo</label></th>
                                        <th><input name= "#" type="text"></th>
                                        <th><label>Fecha:</label><input name= "#" type="text"></th>
                                    </tr>
                                    <tr>
                                        <th><label>Vicerrector Academico</label></th>
                                        <th><input name= "#" type="text"></th>
                                        <th><label>Fecha:</label><input name= "#" type="text"></th>
                                    </tr>
                                    <tr>
                                        <th><label>Director Administracion y Finanzas</label></th>
                                        <th><input name= "#" type="text"></th>
                                        <th><label>Fecha:</label><input name= "#" type="text"></th>
                                    </tr>
                                    <tr>
                                        <th><label>Rector</label></th>
                                        <th><input name= "#" type="text"></th>
                                        <th><label>Fecha:</label><input name= "#" type="text"></th>
                                    </tr>
                                </table>
                            </div>

                        <div class="form-group">
                            <label for="motivocancela">Observaciones</label>
                            <textarea id="" name="" cols="80" rows="3" class="form-control" ></textarea>
                        </div>





                    </div>
                </form>
            </div><!-- /.8 -->
        </div> <!-- /.row-->
    </div> <!-- /.container-->
</body>
</html>
