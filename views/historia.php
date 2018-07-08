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
                              <input type="radio" name="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" value="no"> No
                              <input type="text" class="form-control" name="" id="diabetesedetalles" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Hipertension Arterial:</label><br>
                              <input type="radio" name="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" value="no"> No
                              <input type="text" class="form-control" name="" id="diabetesedetalles" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Tuberculosis:</label><br>
                              <input type="radio" name="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" value="no"> No
                              <input type="text" class="form-control" name="" id="diabetesedetalles" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Otros:</label><br>
                              <input type="radio" name="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" value="no"> No
                              <textarea type="text" class="form-control" name="" id="diabetesedetalles" placeholder="Detalles">
                              </textarea>
                          </div>

                          <h5 class="text-danger"> Antecedentes Personales:</h5>
                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Tratamiento Medico:</label><br>
                              <input type="radio" name="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" value="no"> No
                              <input type="text" class="form-control" name="" id="diabetesedetalles" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Reacciones Alergicas:</label><br>
                              <input type="radio" name="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" value="no"> No
                              <input type="text" class="form-control" name="" id="diabetesedetalles" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Sinusitis:</label><br>
                              <input type="radio" name="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" value="no"> No
                              <input type="text" class="form-control" name="" id="diabetesedetalles" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Enfermedades Respiratorias:</label><br>
                              <input type="radio" name="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" value="no"> No
                              <input type="text" class="form-control" name="" id="diabetesedetalles" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Cardiopatias:</label><br>
                              <input type="radio" name="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" value="no"> No
                              <input type="text" class="form-control" name="" id="diabetesedetalles" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Diabetes</label><br>
                              <input type="radio" name="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" value="no"> No
                              <input type="text" class="form-control" name="" id="diabetesedetalles" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Hipertension</label><br>
                              <input type="radio" name="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" value="no"> No
                              <input type="text" class="form-control" name="" id="diabetesedetalles" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Tuberculosis</label><br>
                              <input type="radio" name="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" value="no"> No
                              <input type="text" class="form-control" name="" id="diabetesedetalles" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Convulsiones</label><br>
                              <input type="radio" name="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" value="no"> No
                              <input type="text" class="form-control" name="" id="diabetesedetalles" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Osteoporosis</label><br>
                              <input type="radio" name="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" value="no"> No
                              <input type="text" class="form-control" name="" id="diabetesedetalles" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Hemorragia</label><br>
                              <input type="radio" name="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" value="no"> No
                              <input type="text" class="form-control" name="" id="diabetesedetalles" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Uso de Medicamentos</label><br>
                              <input type="radio" name="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" value="no"> No
                              <input type="text" class="form-control" name="" id="diabetesedetalles" placeholder="Detalles">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                              <label>Otros Enfermedad</label><br>
                              <input type="radio" name="diabetes" value="si" checked> Si
                              <input type="radio" name="diabetes" value="no"> No
                              <textarea type="text" class="form-control" name="" id="diabetesedetalles" placeholder="Especifica">
                              </textarea>
                          </div>
                        </div>
                      
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" id="btnGuardar" class="btn btn-primary" ><i class="fa fa-save"></i> Guardar</button>
                            <button onclick="cancelarform()" type="button" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
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