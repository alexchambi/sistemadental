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
                          <h1 class="box-title">Persona <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opcion</th>
                            <th>Nombre</th>
                            <th>Tipo Persona</th>
                            <th>Sexo</th>
                            <th>Tipo Documento</th>
                            <th>N° Documento</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Email</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                          <th>Opcion</th>
                            <th>Nombre</th>
                            <th>Tipo Persona</th>
                            <th>Sexo</th>
                            <th>Tipo Documento</th>
                            <th>N° Documento</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Email</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                        <div class="form-group col-xs-12 col-sm-6">
                            <label>Nombre:</label>
                            <input type="hidden" name="idpersona" id="idpersona">
                            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="Nombre" required>
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                            <label>Tipo de Persona:</label>
                            <select class="form-control" name="tipopersona" id="tipopersona">
                              <option value="niño">Niño</option>
                              <option value="adolescente">Adolescente</option>
                              <option value="joven">Joven</option>
                              <option value="adulto">Adulto</option>
                              <option value="adulto mayor">Adulto Mayor</option>
                            </select>
                          </div>
                        
                          <div class="form-group col-xs-12 col-sm-6">
                            <label>Sexo:</label>
                            <select class="form-control" name="sexo" id="sexo">
                              <option value="masculino">Masculino</option>
                              <option value="femenino">Femenino</option>
                            </select>
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                            <label>Tipo de Documento: </label>
                            <select class="form-control" name="tipodocumento" id="tipodocumento">
                              <option value="dni">DNI</option>
                              <option value="carnet extranjeria">CARNET DE EXTRANJERIA</option>
                              <option value="pasaporte">PASAPORTE</option>
                            </select>
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                            <label>Numero de Documento</label>
                            <input type="text" class="form-control" name="numdocumento" id="numdocumento"  placeholder="Numero de Documento">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                            <label>Direccion</label>
                            <input type="text" class="form-control" name="direccion" id="direccion"  placeholder="Direccion">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                            <label>Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono"  placeholder="Telefono">
                          </div>

                          <div class="form-group col-xs-12 col-sm-6">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
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
<script type="text/javascript" src="scripts/persona.js"></script>