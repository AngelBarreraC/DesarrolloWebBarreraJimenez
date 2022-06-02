<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['id'])){ //Este nos sirve paera que al momento de cerrar sesion y querer regresar te mande a login
        header("location: ../index.php");
    }else{
        $nombre=$_SESSION['nombre'];
        require './header.php';
        require '../global/conexion.php';
        $pys="SELECT * FROM productoserver";
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">PRODUCTOS Y SERVICIOS</h1>
                        <tr></tr>
                        <tr></tr>
                        <div class="panel-body table-responsive">
                            <table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <th>CLAVE</th>
                                    <th>CLAVE SAT</th>
                                    <th>DESCRIPCION</th>
                                    <th>LINEA</th>
                                    <th>MODELO</th>
                                    <th>TALLA</th>
                                    <th>COLOR</th>
                                    <th>EXISTENCIA</th>
                                </thead>
                                <tbody>
                                <?php $resultado=mysqli_query($mysqli,$pys);
                                    while($row=mysqli_fetch_assoc($resultado)){?>
                                        <th><?php echo $row["clave"]?></th>
                                        <th><?php echo $row["clave_sat"]?></th>
                                        <th><?php echo $row["descripcion"]?></th>
                                        <th><?php echo $row["linea"]?></th>
                                        <th><?php echo $row["modelo"]?></th>
                                        <th><?php echo $row["talla"]?></th>
                                        <th><?php echo $row["color"]?></th>
                                        <th><?php echo $row["existencia"]?></th>
                                        <tr></tr>
                            <?php
                            } mysqli_free_result($resultado);?>

                                </tbody>
                                <tfoot>
                                    <th>CLAVE</th>
                                    <th>CLAVE SAT</th>
                                    <th>DESCRIPCION</th>
                                    <th>LINEA</th>
                                    <th>MODELO</th>
                                    <th>TALLA</th>
                                    <th>COLOR</th>
                                    <th>EXISTENCIA</th>
                                </tfoot>   
                            </table>
                        </div>
                    </div>
                </main>
<?php
   }
   require './footer.php';
   ob_end_flush();

?>