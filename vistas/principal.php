<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['id'])){ //Este nos sirve paera que al momento de cerrar sesion y querer regresar te mande a login
        header("location: ../index.php");
    }else{
        $nombre=$_SESSION['nombre'];
        require './header.php';
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Escritorio</h1>
                        <tr></tr>
                        <tr></tr>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                        <h4> <strong>$</strong></h4>
                                        <p>Compras</p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Compras</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><h4> <strong>$</strong></h4>
                                        <p>Ventas</p></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Ventas</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Compras los ultimos 10 dias
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Ventas los ultimos 10 dias
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php
   }
   require './footer.php';
   ob_end_flush();

?>