<?php  $user_session = session ();    ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>S</title>
        <link href="<?php echo base_url(); ?>/css/styles.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
        <script src="<?php echo base_url(); ?>/js/all.min.js" ></script>
        <script src="<?php echo base_url(); ?>/js/jquery-ui/external/jquery/jquery.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery-ui/jquery-ui.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo base_url(); ?>/inicio">POS</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

            <ul class="navbar-nav ml-auto mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $user_session->nombre; ?><i class="fas fa-user fa-fw"></i></a>
                
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?php echo base_url();?>/usuarios/cambia_password">Cambiar Contraseña</a>
                    <a class="dropdown-item" href="#!">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url();?>/usuarios/logout">Cerrar Sesion</a>
                </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-basket"></i></div>
                                Productos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url();?>/productos">Productos</a>
                                    <a class="nav-link" href="<?php echo base_url();?>/unidades">Unidades</a>
                                    <a class="nav-link" href="<?php echo base_url();?>/categorias">Categorias</a>
                                </nav>
                            </div>

                            <a class="nav-link" href="<?php echo base_url();?>/clientes"><div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>Clientes</a>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuCompras" aria-expanded="false" aria-controls="menuCompras">
                                <div class="sb-nav-link-icon"><i class="fas fa-truck"></i></div>
                                Compras
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="menuCompras" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url();?>/compras/nuevo">Nueva Compra</a>
                                    <a class="nav-link" href="<?php echo base_url();?>/compras">Compras</a>

                                </nav>
                            </div>
                            <a class="nav-link" href="<?php echo base_url();?>/ventas/venta"><div class="sb-nav-link-icon"><i class="fas fa-cash-register"></i></div>Caja</a>

                            <a class="nav-link" href="<?php echo base_url();?>/ventas"><div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>Ventas</a>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuReportes" aria-expanded="false" aria-controls="menuReportes">
                                <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                                Reportes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="menuReportes" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url();?>/productos/mostrarMinimos">Reportes Minimos</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#subAdministracion" aria-expanded="false" aria-controls="subAdministracion">
                                <div class="sb-nav-link-icon"><i class="fas fa-tools"></i></div>
                                Administracion
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="subAdministracion" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url();?>/configuracion">Configuracion</a>
                                    <a class="nav-link" href="<?php echo base_url();?>/usuarios">Usuarios</a>

                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
