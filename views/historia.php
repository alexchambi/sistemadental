<?php
require 'header.php';
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h1 class="box-title">Historias Clinicas <i class="fa fa-book"></i></h1>
                <div class="box-tools pull-right">
              </div>
            </div>
          
            <div class="panel-body table-responsive" id="listadoregistros">

              <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                  <th>Opciones</th>
                  <th>Nombre</th>
                </thead>
                <tbody>                            
                </tbody>
                <tfoot>
                  <th>Opciones</th>
                  <th>Nombre</th>
                </tfoot>
              </table>
            </div>

            <div class="panel-body" id="formularioregistros">
              <h4 class="text-primary">Datos Personales:</h4>
              <form class="form" name="formulario" id="formulario" method="POST">         
                <div class="form-group col-xs-12 col-sm-3">
                  <label>Paciente:</label>
                  <input type="hidden" name="idpersona" id="idpersona">
                  <input type="text" class="form-control" name="nombre" id="nombre" disabled>
                </div>

                <div class="form-group col-xs-12 col-sm-3">
                  <label>Tipo de Persona: </label>
                  <input type="text" class="form-control" name="tipopersona" id="tipopersona" disabled>
                </div>
                        
                <div class="form-group col-xs-12 col-sm-3">
                  <label>Sexo:</label>
                  <input type="text" class="form-control" name="sexo" id="sexo" disabled>
                </div>

                <div class="form-group col-xs-12 col-sm-3">
                  <label>Tipo de Documento: </label>
                  <input type="text" class="form-control" name="tipodocumento" id="tipodocumento" disabled>
                </div>

                <div class="form-group col-xs-12 col-sm-3">
                  <label>N° Documento</label>
                  <input type="text" class="form-control" name="numdocumento" id="numdocumento" disabled>
                </div>

                <div class="form-group col-xs-12 col-sm-3">
                  <label>Direccion</label>
                  <input type="text" class="form-control" name="direccion" id="direccion" disabled>
                </div>

                <div class="form-group col-xs-12 col-sm-3">
                  <label>Telefono</label>
                  <input type="text" class="form-control" name="telefono" id="telefono" disabled>
                </div>

                <div class="form-group col-xs-12 col-sm-3">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email" id="email" disabled>
                </div>
              </form>
              
              
            </div>
            
            <div class="panel-body" id="formularioregistros">
                      <h4 class="text-primary">Antecedentes:</h4>
                        <form class="form" name="formularioantecedentes" id="formularioregistros" method="POST">
                        <div class="container">
                          <h5 class="text-danger">Antecedentes Familiares:</h5>
                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Diabetes:</label><br>
                              <input type="radio" name="diabetes" id="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" id="diabetes" value="no"> No
                              <input type="text" class="form-control" name="diabetesdetalle" id="diabetesedetalle" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Hipertension Arterial:</label><br>
                              <input type="radio" name="hipertension" id="hipertension" value="si" checked> Si
                              <input type="radio" name="hipertension" id="hipertension" value="no"> No
                              <input type="text" class="form-control" name="hipertensiondetalle" id="hipertensiondetalle" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Tuberculosis:</label><br>
                              <input type="radio" name="tuberculosis" id="tuberculosis" value="si" checked> Si
                              <input type="radio" name="tuberculosis" id="tuberculosis" value="no"> No
                              <input type="text" class="form-control" name="tuberculosisdetalle" id="tuberculosisdetalle" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Otros:</label><br>
                              <input type="radio" name="otros" id="otros" value="si" checked> Si
                              <input type="radio" name="otros" id="otros" value="no"> No
                              <textarea type="text" class="form-control" name="otrosdetalle" id="otrosdetalle" placeholder="Detalles">
                              </textarea>
                          </div>

                          <h5 class="text-danger"> Antecedentes Personales:</h5>
                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Tratamiento Medico:</label><br>
                              <input type="radio" name="tratamientomedico" id="tratamientomedico" value="si" checked> Si
                              <input type="radio" name="tratamientomedico" id="tratamientomedico" value="no"> No
                              <input type="text" class="form-control" name="tratamientomedicodetalle" id="tratamientomedicodetalle" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Reacciones Alergicas:</label><br>
                              <input type="radio" name="reaccionalergica" id="reaccionalergica" value="si" checked> Si
                              <input type="radio" name="reaccionalergica" id="reaccionalergica" value="no"> No
                              <input type="text" class="form-control" name="reaccionalergicadetalle" id="reaccionalergicadetalle" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Cardiopatias:</label><br>
                              <input type="radio" name="cardiopatias" id="cardiopatias" value="si" checked> Si
                              <input type="radio" name="cardiopatias" id="cardiopatias" value="no"> No
                              <input type="text" class="form-control" name="cardiopatiasdetalle" id="cardiopatiasdetalle" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Diabetes</label><br>
                              <input type="radio" name="diabetescliente" id="diabetescliente" value="si" checked> Si
                              <input type="radio" name="diabetescliente" id="diabetescliente" value="no"> No
                              <input type="text" class="form-control" name="diabetesclienteedetalles" id="diabetesclienteedetalles" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Osteoporosis</label><br>
                              <input type="radio" name="osteoporosis" id="osteoporosis" value="si" checked> Si
                              <input type="radio" name="osteoporosis" id="osteoporosis" value="no"> No
                              <input type="text" class="form-control" name="osteoporosisdetalle" id="osteoporosisdetalle" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Hemorragia</label><br>
                              <input type="radio" name="hemorragia" id="hemorragia" value="si" checked> Si
                              <input type="radio" name="hemorragia" id="hemorragia" value="no"> No
                              <input type="text" class="form-control" name="hemorragiadetalle" id="hemorragiadetalle" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Uso de Medicamentos</label><br>
                              <input type="radio" name="usomedicamento" id="usomedicamento" value="si" checked> Si
                              <input type="radio" name="usomedicamento" id="usomedicamento" value="no"> No
                              <input type="text" class="form-control" name="usomedicamentodetalle" id="usomedicamentodetalle" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Otros Enfermedad</label><br>
                              <input type="radio" name="otrosenfermedad" id="otrosenfermedad" value="si" checked> Si
                              <input type="radio" name="otrosenfermedad" id="otrosenfermedad" value="no"> No
                              <textarea type="text" class="form-control" name="otrosenfermedaddetalle" id="otrosenfermedaddetalle" placeholder="Especifica">
                              </textarea>
                          </div>
                        </div>
                      
              </div>

              <div class="panel-body" id="formularioregistros">
                      <h4 class="text-primary">Odontograma:</h4>
                        <form class="form" name="formularioantecedentes" id="formularioregistros" method="POST">
                        <div class="container">
                        <h5 class="text-danger">Disposiciones Especifica:</h5>
                          <div class="row">
                          <div class="container form-group col-lg-6">
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="18">18
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="17">17
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="16">16
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="15">15
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="14">14
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="13">13
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="12">12
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="11">11
                          </div>

                          <div class="container form-group col-lg-6">
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="21">21
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="22">22
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="23">23
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="24">24
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="25">25
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="26">26
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="27">27
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="28">28
                          </div>
                          </div>
                          <div class="row">
                          <div class="container form-group col-lg-6">
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="48">48
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="47">47
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="46">46
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="45">45
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="44">44
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="43">43
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="42">42
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="41">41
                          </div>

                          <div class="container form-group col-lg-6">
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="31">31
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="32">32
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="33">33
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="34">34
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="35">35
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="36">36
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="37">37
                            <input style="width:30px;height:30px" type="checkbox" id="diente" name="diente" value="38">38
                          </div>
                          </div>
                          <div class="row">
                          <div class="container form-group col-lg-2">
                          </div>
                          <div class="container form-group col-lg-3">
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="55">55
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="54">54
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="53">53
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="52">52
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="51">51
                          </div>

                          <div class=" form-group col-lg-6">
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="61">61
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="62">62
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="63">63
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="64">64
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="65">65
                          </div>
                          <div class="container form-group col-lg-1">
                          </div>
                          </div>
                          <div class="row">
                          <div class="container form-group col-lg-2">
                          </div>
                          <div class="container form-group col-lg-3">
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="85">85
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="84">84
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="83">83
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="82">82
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="81">81
                          </div>

                          <div class=" form-group col-lg-6">
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="71">71
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="72">72
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="73">73
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="74">74
                            <input style="width:28px;height:28px" type="checkbox" id="diente" name="diente" value="75">75
                          </div>
                          <div class="container form-group col-lg-1">
                          </div>
                          </div>
                      
                          <br>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" id="btnGuardar" class="btn btn-primary" ><i class="fa fa-save"></i> Guardar</button>
                            <button onclick="cancelarform()" type="button" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Cancelar</buttowidth:28px;height:28px
                        </form>
              </div>

              
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
  
        
            </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
require 'footer.php';
?>
<script type="text/javascript" src="scripts/historia.js"></script>