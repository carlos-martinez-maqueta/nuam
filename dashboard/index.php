<?php
    session_start(); // Iniciar sesión
    include 'config/conexion.php';
 
    // Verificar si el usuario tiene una sesión activa
    if (!isset($_SESSION['user_id'])) {
        // Si no hay sesión, redirigir al inicio de sesión
        header('Location: ../login');
        exit(); // Detener ejecución para evitar que se cargue el contenido
    }
    // Configurar la zona horaria a la de Perú
    date_default_timezone_set('America/Lima');

    include 'config/zonaHoraria.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="" />
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>Nuam || Plataforma Virtual</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/s.ico" />
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="assets/vendors/css/vendors.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendors/css/daterangepicker.min.css" />
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/theme.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/all.css" />
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>

    <?php include 'components/sidebar.php' ?>

    <?php include 'components/header.php' ?>

    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Inicio</h5>
                    </div>
 
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <div id="19 Mayo" class="reportrange-picker d-flex align-items-center">
                                <span class="reportrange-picker-field"><?php echo "$dia de $mes";?></span>
                            </div>
                          
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="mb-4 text-center">
                                    <div class="wd-150 ht-150 mx-auto mb-3 position-relative">
                                        <div class="avatar-image wd-150 ht-150 border border-5 border-gray-3">
                                            <img src="uploads/img-user.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="wd-10 ht-10 text-success rounded-circle position-absolute translate-middle" style="top: 76%; right: 10px">
                                            <i class="bi bi-patch-check-fill"></i>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <a href="javascript:void(0);" class="fs-14 fw-bold d-block">Carlos Smith Martinez Meneses</a>
                                        <a href="javascript:void(0);" class="fs-12 d-block">Correo: cmartinez.meneses1@gmail.com</a>  
                                        <a href="javascript:void(0);" class="fs-12 d-block">Fecha de Nacimiento: 21/10/2000</a>                                
                                    </div>
                                </div>                                
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card border-top-0">
                            <div class="card-header p-0">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs flex-wrap w-100 text-center customers-nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item flex-fill border-top" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#overviewTab" role="tab">Descripción</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active p-4" id="overviewTab" role="tabpanel">
                                    <div class="profile-details mb-3">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0">Detalles de Perfil:</h5>
                                        </div>
                                        <div class="row g-0 mb-4">
                                            <div class="col-sm-6 text-muted">Nombres:</div>
                                            <div class="col-sm-6 fw-semibold">Carlos Smith</div>
                                        </div>
                                        <div class="row g-0 mb-4">
                                            <div class="col-sm-6 text-muted">Apellidos:</div>
                                            <div class="col-sm-6 fw-semibold">Martinez Meneses</div>
                                        </div>
                                        <div class="row g-0 mb-4">
                                            <div class="col-sm-6 text-muted">Fecha de Nacimiento:</div>
                                            <div class="col-sm-6 fw-semibold">21/10/2000</div>
                                        </div>
                                        <div class="row g-0 mb-4">
                                            <div class="col-sm-6 text-muted">Número Celular:</div>
                                            <div class="col-sm-6 fw-semibold">+51 902192976</div>
                                        </div>
                                        <div class="row g-0 mb-4">
                                            <div class="col-sm-6 text-muted">Email:</div>
                                            <div class="col-sm-6 fw-semibold">cmartinez.meneses1@gmail.com</div>
                                        </div>
                                        <div class="row g-0 mb-4">
                                            <div class="col-sm-6 text-muted">Dirección:</div>
                                            <div class="col-sm-6 fw-semibold">Lima, Perú</div>
                                        </div>
                                        <div class="row g-0 mb-1">
                                            <div class="col-sm-6 text-muted">Fecha de Registro:</div>
                                            <div class="col-sm-6 fw-semibold">10/06/2025</div>
                                        </div>
                                        <div class=" parasuit-shape float-bob-y">
                                            <img src="../assets/img/hero/parasuit.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>                         
                        </div>
                    </div>

                    <div class="col-lg-12">
                       <div class="card border-top-0">
                            <div class="card-header p-0">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs flex-wrap w-100 text-center customers-nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item flex-fill border-top" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#niveles" role="tab">Avances</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active p-4" id="niveles" role="tabpanel">
                                    <div class="mb-3"></div>
                                </div>
                            </div>                         
                        </div>                        
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>

        <?php include 'components/footer.php'; ?>
    </main>

    <!--! BEGIN: Vendors JS !-->
    <script src="assets/vendors/js/vendors.min.js"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="assets/vendors/js/daterangepicker.min.js"></script>
    <script src="assets/vendors/js/apexcharts.min.js"></script>
    <script src="assets/vendors/js/circle-progress.min.js"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="assets/js/common-init.min.js"></script>
    <script src="assets/js/dashboard-init.min.js"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="assets/js/theme-customizer-init.min.js"></script>
    <!--! END: Theme Customizer !-->
</body>

</html>