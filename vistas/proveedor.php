<?php
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: ../index.php");
}else{


require 'header.php';
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Proveedor <button class="btn btn-success" onclick="mostrarform(true)"><i class="fa fa-plus-circle">

                    </i>Agregar</button>
                </h1>
            
                <div class="panel-body table-responsive" id="listadoregistros">
                    <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                            <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Numero</th>
                            <th>Telefono</th>
                            <th>Email</th>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Numero</th>
                            <th>Telefono</th>
                            <th>Email</th>
                        </tfoot>   
                    </table>
                </div>
                <div class="panel-body" style="height: 400px;" id="formularioregistros">
                    <form action="" name="formulario" id="formulario" method="POST">
                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <label for="">Nombre</label>
                            <input class="form-control" type="hidden" name="idpersona" id="idpersona">
                            <input class="form-control" type="hidden" name="tipo_persona" id="tipo_persona" value="Proveedor">
                            <input class="form-control" type="text" name="nombre" id="nombre" maxlength="100" placeholder="Nombre del proveedor" required>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <label for="">Tipo Dcumento</label>
                            <select class="form-control select-picker" name="tipo_documento" id="tipo_documento" required>
                                <option value="DNI">DNI</option>
                                <option value="RUC">RUC</option>
                                <option value="CEDULA">CEDULA</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <label for="">Número Documento</label>
                            <input class="form-control" type="text" name="num_documento" id="num_documento" maxlength="20" placeholder="Número de Documento">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <label for="">Direccion</label>
                            <input class="form-control" type="text" name="direccion" id="direccion" maxlength="70" placeholder="Direccion">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <label for="">Telefono</label>
                            <input class="form-control" type="text" name="telefono" id="telefono" maxlength="20" placeholder="Número de Telefono">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <label for="">Email</label>
                            <input class="form-control" type="email" name="email" id="email" maxlength="50" placeholder="Email">
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
<?php    
}
require 'footer.php';

?>
  <script src="./scripts/categoria.js"></script>
<?php
ob_end_flush();
?>