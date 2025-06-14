<?php 
session_start(); // Iniciar sesión

?>
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
                        <li class="breadcrumb-item"><a href="#">Reservar Cita</a></li>
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
                        <h4>Reservar Cita</h4>
                    </div>
                    <div class="col-lg-12">
                        <div class="card p-4">
                            

                            <div class="">
                                <form id="formReservar" class="row">
                                    <input type="hidden" class="form-control" id="id_cliente" name="id_cliente" value="1">
                                    <div class="col-lg-4 mb-3">
                                        <label for="" class="form-label">Fecha</label>
                                        <input type="date" class="form-control" id="fecha" name="fecha" placeholder="" required>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="" class="form-label">Horario</label>
                                        <select class="form-select" aria-label="Default select example" id="horario" name="horario" required>
                                            <option selected>Seleccionar Horario</option>
                                            <?php
                                            foreach ($horarios as $horario) {?>
                                                <option value="<?= $horario->horario?>"><?= $horario->horario ?></option>
                                            <?php }
                                            ?> 
                                        </select>
                                    </div>     
                                    <div class="col-lg-4 mb-3">
                                        <label for="" class="form-label">Modalidad</label>
                                        <select class="form-select" aria-label="Default select example" id="modalidad" name="modalidad" required>
                                                <option selected>Seleccionar Modalidad</option>
                                            <?php
                                            foreach ($modalidadReserva as $modalidad) {?>
                                                <option value="<?= $modalidad->titulo?>"><?= $modalidad->titulo ?></option>
                                            <?php }
                                            ?> 
                                        </select>
                                    </div>                                      
                                    <div class="col-lg-12 mb-3">
                                        <label for="" class="form-label">Mensaje</label>
                                        <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
                                    </div>  
                                    
                                    <div class="text-center">
                                        <button class="btn btn_nuam" type="submit">
                                            RESERVAR
                                        </button>
                                    </div>
                                </form>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const fechaInput = document.getElementById('fecha');
            const horarioSelect = document.getElementById('horario');
            const modalidadSelect = document.getElementById('modalidad');
            let reservas = [];

            async function cargarReservas() {
                const fecha = fechaInput.value;
                if (!fecha) return;

                const response = await fetch(`get_reservas.php?fecha=${fecha}`);
                reservas = await response.json();

                // Restaurar select (habilitar todo)
                Array.from(horarioSelect.options).forEach(opt => {
                    opt.disabled = false;
                    opt.textContent = opt.value;
                });

                Array.from(modalidadSelect.options).forEach(opt => {
                    opt.disabled = false;
                    opt.textContent = opt.value;
                });
            }

            function validarCombinacion() {
                const horario = horarioSelect.value;
                const modalidad = modalidadSelect.value;

                const existe = reservas.some(r =>
                    r.horario === horario && r.modalidad === modalidad
                );

                if (existe) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Reserva no disponible',
                        text: 'Esta combinación de fecha, horario y modalidad ya está reservada.',
                        confirmButtonText: 'Entendido'
                    });
                    // Opcional: reiniciar los campos
                    horarioSelect.value = "Seleccionar Horario";
                    modalidadSelect.value = "Seleccionar Modalidad";
                }
            }

            // Cargar reservas cuando se seleccione una fecha
            fechaInput.addEventListener('change', cargarReservas);

            // Validar la combinación cuando cambien horario o modalidad
            horarioSelect.addEventListener('change', validarCombinacion);
            modalidadSelect.addEventListener('change', validarCombinacion);
        });

    </script>
    <script src="add/reservarCita.js"></script>

</body>

</html>