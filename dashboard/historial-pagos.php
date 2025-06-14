
<!DOCTYPE html>
<html lang="es">

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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
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
                        <h5 class="m-b-10"><a href="index">Inicio</a></h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Historial Pagos</a></li>
                    </ul>
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
                                <span class="reportrange-picker-field">19 MAYO</span>
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
                    <div class="col-12 mb-3">
                        <h4>Historial de Pagos</h4>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="card m-0">
                            <div class="card-body p-0">
                                <div class="table-responsive table-light shadow small-table p-3">
                                    <table class="table table-sm p-lg-4" id="historial-pagos">
                                        <thead>
                                            <tr>
                                                <th class="text-center" scope="col">ID</th>
                                                <th class="text-center" scope="col">FECHA DE PAGO</th>
                                                <th class="text-center" scope="col">MONTO PAGADO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
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
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="get/historialPagos.js"></script>
</body>

</html>