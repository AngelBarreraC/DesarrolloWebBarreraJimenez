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
                <h1 class="box-title">Ingresos 
                    <button class="btn btn-success" onclick="mostrarform(true)">
                    <i class="fa fa-plus-circle"></i>Agregar</button>
                </h1>
                <div class="panel-body table-responsive" id="listadoregistros">
                    <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                            <th>Opciones</th>
                            <th>Fecha</th>
                            <th>Proveedor</th>
                            <th>Usuario</th>
                            <th>Documento</th>
                            <th>Número</th>
                            <th>Total Compra</th>
                            <th>Estado</th>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <th>Opciones</th>
                            <th>Fecha</th>
                            <th>Proveedor</th>
                            <th>Usuario</th>
                            <th>Documento</th>
                            <th>Número</th>
                            <th>Total Compra</th>
                            <th>Estado</th>
                        </tfoot>   
                    </table>
                </div>
                <div class="panel-body" style="height: 400px;" id="formularioregistros">
                    <form action="" name="formulario" id="formulario" method="POST">
                        <div class="form-group col-lg-8 col-md-8 col-xs-12">
                            <label for="">Proveedor(*):</label>
                            <input class="form-control" type="hidden" name="idingreso" id="idingreso">
                            <select name="idproveedor" id="idproveedor" class="form-control selectpicker" data-live-search="true" required></select>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-xs-12">
                            <label for="">Fecha(*): </label>
                            <input class="form-control" type="date" name="fecha_hora" id="fecha_hora" required>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <label for="">Tipo Comprobante(*): </label>
                            <select name="tipo_comprobante" id="tipo_comprobante" class="form-control selectpicker" required>
                                <option value="Boleta">Boleta</option>
                                <option value="Factura">Factura</option>
                                <option value="Ticket">Ticket</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-2 col-md-2 col-xs-6">
                            <label for="">Serie: </label>
                            <input class="form-control" type="text" name="serie_comprobante" id="serie_comprobante" maxlength="7" placeholder="Serie">
                        </div>
                        <div class="form-group col-lg-2 col-md-2 col-xs-6">
                            <label for="">Número: </label>
                            <input class="form-control" type="text" name="num_comprobante" id="num_comprobante" maxlength="10" placeholder="Número" required>
                        </div>
                        <div class="form-group col-lg-2 col-md-2 col-xs-6">
                            <label for="">Impuesto: </label>
                            <input class="form-control" type="text" name="impuesto" id="impuesto">
                        </div>
                        <div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a data-toggle="modal" href="#myModal">
                                <button id="btnAgregarArt" type="button" class="btn btn-primary"><span class="fa fa-plus"></span>Agregar Articulos</button>
                            </a>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-xs-12">
                            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                                <thead style="background-color:#A9D0F5">
                                    <th>Opciones</th>
                                    <th>Articulo</th>
                                    <th>Cantidad</th>
                                    <th>Precio Compra</th>
                                    <th>Precio Venta</th>
                                    <th>Subtotal</th>
                                </thead>
                                <tfoot>
                                    <th>TOTAL</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th><h4 id="total">S/. 0.00</h4><input type="hidden" name="total_compra" id="total_compra"></th>
                                </tfoot>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
                            <button class="btn btn-danger" onclick="cancelarform()" type="button" id="btnCancelar"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                        </div>
                    </form>
                    
                </div>
                <br><br><br><br><br><br>
            </div>
        </main>

<?php    
}

require 'footer.php';

?>
<script src="./scripts/ingreso.js"></script>
 <?php
ob_end_flush();
?>