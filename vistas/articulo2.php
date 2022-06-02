<?php
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: ../index.php");
}else{

require '../global/conexion.php';
$bodega="SELECT * FROM producto where id_almacen=3";
require 'header.php';
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Articulo TLANEPANTLA
                <?php if($usuario==1){?>
                    <button class="btn btn-success" onclick="mostrarform(true)" id="btnagregar">
                        <i class="fa fa-plus-circle"></i>   Agregar</button> <?php } ?>
                    <button class="btn btn-info">Reporte</button></a> 
                </h1>
                    
                <div class="panel-body table-responsive" id="listadoregistros">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <th>DESCRIPCION</th>
                            <th>CLAVE</th>
                            <th>ESTATUS</th>
                            <th>LINEA</th>
                            <th>EXISTENCIA</th>
                        </thead>
                        <tbody>
                        <?php $resultado=mysqli_query($mysqli,$bodega);
                                    while($row=mysqli_fetch_assoc($resultado)){?>
                                        <th><?php echo $row["descripcion"]?></th>
                                        <th><?php echo $row["clave_producto"]?></th>
                                        <th><?php echo $row["estatus"]?></th>
                                        <th><?php echo $row["linea"]?></th>
                                        <th><?php echo $row["existencia"]?></th>
                                        <tr></tr>
                            <?php
                            } mysqli_free_result($resultado);?>
                            
                        </tbody>
                        <tfoot>
                            <th>DESCRIPCION</th>
                            <th>CLAVE</th>
                            <th>ESTATUS</th>
                            <th>LINEA</th>
                            <th>EXISTENCIA</th>
                        </tfoot>
                    </table>
                </div>
                <div class="panel-body" id="formularioregistros">
                    <form action="" name="formulario" id="formulario" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="">Descripcion(*):</label>
                                <input class="form-control" type="hidden" name="idarticulo" id="idarticulo">
                                <input class="form-control" type="text" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="">Clave(*):</label>
                                <input class="form-control" type="hidden" name="idarticulo" id="idarticulo">
                                <input class="form-control" type="text" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="">Estatus</label>
                                <select name="estatus" id="estatus" class="form-control">
                                    <option>Activo</option>
                                    <option>Inactivo</option>
                                    <option>Otro</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="">Linea(*)</label>
                                <input class="form-control" type="text" name="descripcion" id="descripcion" maxlength="256" placeholder="Descripcion">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="">Existencia(*)</label>
                                <input class="form-control" type="integer" name="descripcion" id="descripcion" maxlength="256" placeholder="Descripcion">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
                                <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                            </div>
                        </div>
                                    
                    </form>
                </div>
              
            </div>
       
        </main>

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