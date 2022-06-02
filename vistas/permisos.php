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
                <h1 class="mt-4">Permisos
                </h1>
                <div class="panel-body table-responsive" id="listadoregistros">
                    <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                            <th>Nombre</th>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <th>Nombre</th>
                        </tfoot>   
                    </table>
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