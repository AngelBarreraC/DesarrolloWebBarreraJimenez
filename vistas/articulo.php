<?php
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.html");
}else{


require 'header.php';
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                    <h1 class="mt-4">Articulo
                        <button class="btn btn-success" onclick="mostrarform(true)" id="btnagregar">
                            <i class="fa fa-plus-circle"></i>Agregar</button> 
                            <a target="_blank" href="../reportes/rptarticulos.php">
                        <button class="btn btn-info">Reporte</button></a>
                        
                    </h1>
                    
                    <div class="row">
                        <table id="tbllistado" class="table table-striped table-bordered">
                            <thead>
                                <th>Opciones</th>
                                <th>Nombre</th>
                                <th>Categoria</th>
                                <th>Codigo</th>
                                <th>Stock</th>
                                <th>Imagen</th>
                                <th>Descripcion</th>
                                <th>Estado</th>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <th>Opciones</th>
                                <th>Nombre</th>
                                <th>Categoria</th>
                                <th>Codigo</th>
                                <th>Stock</th>
                                <th>Imagen</th>
                                <th>Descripcion</th>
                                <th>Estado</th>
                            </tfoot>
                        </table>

                            <div class="panel-body" id="formularioregistros">
                                <form action="" name="formulario" id="formulario" method="POST">
                                    <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                        <label for="">Nombre(*):</label>
                                        <input class="form-control" type="hidden" name="idarticulo" id="idarticulo">
                                        <input class="form-control" type="text" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <label for="">Categoria(*):</label>
                                        <select name="idcategoria" id="idcategoria" class="form-control selectpicker" data-Live-search="true" required></select>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <label for="">Stock</label>
                                        <input class="form-control" type="number" name="stock" id="stock"  required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <label for="">Descripcion</label>
                                        <input class="form-control" type="text" name="descripcion" id="descripcion" maxlength="256" placeholder="Descripcion">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <label for="">Imagen:</label>
                                            <input class="form-control" type="file" name="imagen" id="imagen">
                                            <input type="hidden" name="imagenactual" id="imagenactual">
                                            <img src="" alt="" width="150px" height="120" id="imagenmuestra">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <label for="">Codigo:</label>
                                            <input class="form-control" type="text" name="codigo" id="codigo" placeholder="codigo del prodcuto" required>
                                                <button class="btn btn-success" type="button" onclick="generarbarcode()">Generar</button>
                                                <button class="btn btn-info" type="button" onclick="imprimir()">Imprimir</button>
                                    <div id="print">
                                        <svg id="barcode"></svg>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
                                        <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                                    </div>
                                </form>
                            </div>
                            <!--fin centro-->
                        </div>
                    </div>
                </div>
                <!-- /.box -->

                </section>
                <!-- /.content -->
            </div>
        </main>
    </div>
    <?php    
}

require 'footer.php';

?>
 <script src="../public/js/JsBarcode.all.min.js"></script>
 <script src="../public/js/jquery.PrintArea.js"></script>
 <script src="./scripts/articulo.js"></script>

 <?php
ob_end_flush();
?>