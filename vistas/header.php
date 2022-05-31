<?php
    if(strlen(session_id()<1)){
        session_start();
    }
    if(!isset($_SESSION['id'])){ //Este nos sirve paera que al momento de cerrar sesion y querer regresar te mande a login
        header("location: ..index.php");
    }
    $nombre=$_SESSION['nombre'];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistema de Inventario</title>
        <link href="https://cdn.jsdelivr.net/npm    /simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../public/css/styles.css" rel="stylesheet" />
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../public/css/font-awesome.min.css">
        <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../public/css/_all-skins.min.css">

        <!-- DATATABLES-->
        <link rel="stylesheet" href="../public/datatables/jquery.dataTables.min.css">
        <link rel="stylesheet" href="../public/datatables/buttons.dataTables.min.css">
        <link rel="stylesheet" href="../public/datatables/responsive.dataTables.min.css">
        <link rel="stylesheet" href="../public/css/bootstrap-select.min.css">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../index.php">SISTEMA TLAPALERIA</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Buscar-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Buscar.." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar icono-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" 
                    data-bs-toggle="dropdown" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuracion</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="./logout.php">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion"> <!--Seccion de opciones de menu-->
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link " href="./principal.php">
                                <div class="sb-nav-link-icon"><i class="fa  fa-dashboard (alias)"></i></div>
                                Escritorio
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Almacen
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="./articulo.php">Articulos</a>
                                    <a class="nav-link" href="../layout-sidenav-light.html">Categorias</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Compras
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="#" > Ingresos</a>
                                    <a class="nav-link" href="#" > Provedores</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePacks" aria-expanded="false" aria-controls="collapsePacks">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Ventas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePacks" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav" id="sidenavAccordionPacks">
                                    <a class="nav-link" href="#" > Ingresos</a>
                                    <a class="nav-link" href="#" > Provedores</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="../tables.html" data-bs-toggle="collapse" data-bs-target="#collapseParm" aria-expanded="false" aria-controls="collapseParm">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Acceso
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseParm" aria-labelledby="headingFour" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav" id="sidenavAccordionParm">
                                    <a class="nav-link" href="#" > Usuarios</a>
                                    <a class="nav-link" href="#" > Permisos</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Inventario:</div>
                        Inicío Acatlan 
                    </div>
                </nav>
            </div>