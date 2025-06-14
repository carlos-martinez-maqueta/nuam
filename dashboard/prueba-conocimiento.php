
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
                        <li class="breadcrumb-item"><a href="#">Pruebas de Conocimiento</a></li>
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
                    <div class="card card_pruebas_conocimiento p-3 col-lg-4">
                        <h2>Pruebas de Conocimiento</h2>
                        <p>Hola, Carlos Martinez</p>

                        <div class="py-4 d-flex align-items-center">
                            Nivel actual: <strong>Nivel 2</strong>  
                            <progress value="1" class="mx-3" max="4"></progress>
                        </div>

                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link mb-3 completado" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">NIVEL 1 (✅ Completada)</button>
                            <button class="nav-link mb-3 pendiente active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">NIVEL 2 (🕓 Pendiente)</button>
                            <button class="nav-link mb-3" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>NIVEL 3 (🔒 Bloqueada)</button>
                            <button class="nav-link mb-3" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>NIVEL 4 (🔒 Bloqueada)</button>
                        </div>
                    </div>  
                    <div class="col-lg-8">
                        <div class="card p-3">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                                    <h3>Nivel 1</h3>
                                    <hr>
                                </div>
                                <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                                    <h3>Nivel 2</h3>
                                    <hr>
                                </div>
                                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                            </div> 
                        </div>                       
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>

        <?php include 'components/footer.php'; ?>
       
    </main>
        <!-- Modal -->
        <div class="modal fade" id="ModalConocimiento1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div> 
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