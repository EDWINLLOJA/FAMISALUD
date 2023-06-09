<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="<?= base_url('/public/admin/assets/img/icon/icon.ico'); ?>">
    <title>Famisalud</title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url('/public/admin/assets/css/nucleo-icons.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('/public/admin/assets/css/fontawesome.css'); ?>" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('/public/admin/assets/css/argon-dashboard.css'); ?>" rel="stylesheet" />
    <link id="pagestyle" href="<?= base_url('/public/admin/assets/css/style.css'); ?>" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100 prt">
    <div class="min-height-300 bg-primary position-absolute w-100 prt"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
        <div class="sidenav-scrollbar">
            <div class="sidenav-header">
                <a class="navbar-brand m-0" href="<?= base_url('admingeneral'); ?>">
                    <img src="<?= base_url('/public/admin/assets/img/icon/icon.png'); ?>" class="navbar-brand-img h-100">
                    <span class="ms-1 font-weight-bold">Administrador</span>
                </a>
            </div>
            <hr class="horizontal dark mt-0">
            <div class="collapse navbar-collapse w-auto h-auto ps" id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admingeneral'); ?>" :class="dashboardClass">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-chart-pie text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#store" class="nav-link" aria-expanded="false">
                            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-box text-dark text-sm"></i>
                            </div>
                            <span class="nav-link-text ms-2">Almacen</span>
                        </a>
                        <div class="collapse" id="store">
                            <ul class="nav ms-4">
                                <li class="nav-item"><a class="nav-link" href="<?= base_url('admin_cat'); ?>"><span class="sidenav-normal">Categorias</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="<?= base_url('admingeneral'); ?>"><span class="sidenav-normal">Productos</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="<?= base_url('admin_subcat'); ?>"><span class="sidenav-normal">Sub Categorias</span></a></li>
                            
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                    
                    <a class="nav-link" href="<?= base_url('lista_estado_cita'); ?>">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-seedling text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text">PRODUCTO</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    
                    <a class="nav-link" href="<?= base_url('listaCita'); ?>">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-calendar-alt text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text">CITAS RESERVADAS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('calendar'); ?>">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-clone text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text">Calendario</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a style="background: #EF9F9F ;" class="nav-link" href="<?= base_url('/'); ?>">
                            <div  class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-angle-double-left text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text">Regresar Menu</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="sidenav-footer mx-3 ">
                <div class="card card-plain shadow-none" id="sidenavCard">
                    <img class="w-50 mx-auto" src="<?= base_url('/public/admin/assets/img/icon/icon.png'); ?>">
                    <div class="card-body text-center p-3 w-100 pt-0">
                        <div class="docs-info">
                            <h6 class="mb-0">NEW START</h6>
                            <p class="text-xs font-weight-bold mb-0">Jovenes programadores</p>
                        </div>
                    </div>
                </div>
                <a class="btn btn-dark btn-sm mb-0 w-100" href="">Ver template</a>
            </div>
        </div>
    </aside>
    