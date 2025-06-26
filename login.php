<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ingreso Plataforma Virtual Nuam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    
    <link rel="shortcut icon" href="assets/img/favicon.svg">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.css">
    <style>
        .section_login h3{
            color: #f39f5f;
            font-weight: 800;
        }
        .header_empresa img{
            width: 250px;
            margin: auto;
        }
        .btn_ingreso{
            text-align: center;
        }
        .btn_ingreso button{
            display: inline-block;
            vertical-align: middle;
            border: none;
            outline: none !important;
            background-color: #3c2259;
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
            padding: 22px 40px;
            transition: all 0.4s ease-in-out;
            letter-spacing: 0;
            border-radius: 22px;
            position: relative;
            overflow: hidden;
            text-align: center;
            line-height: 1;
            z-index: 9;
            text-transform: capitalize;
        }
    </style>
  </head>
  <body> 
    <main class="mb-5">
        <section class="section_login py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 d-lg-block d-none">
                        <div class="imagen_login text-center">
                            <img src="assets/img/hero/01.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="header_empresa">
                            <div class="text-center"><a href="./"><img src="assets/img/logo/logo_nuam.png" class="img-fluid" alt=""></a></div>
                        </div>
                        <div>
                            <h3>Bienvenido</h3>
                        </div>
                        <div class="mt-5">
                            <form class="" id="registerForm">
                                <div class="mb-3">
                                    <label for="" class="form-label"><b>Correo</b></label>
                                    <input type="email" name="correo" class="form-control" id="correo" placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"><b>Contraseña</b></label>
                                    <input type="password" name="contrasena" class="form-control" id="contrasena" placeholder="************">
                                </div>  
                                <div class="btn_ingreso">
                                    <button type="submit" class="btn btn-primary">Ingresar <i class="fa-solid fa-arrow-right-long"></i></button>
                                </div>                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div><img src="assets/img/footer-bottom.png" class="img-fluid" alt=""></div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.js"></script>  
    <script>
    $(document).ready(function() {
        $('#registerForm').submit(function(e) {
            e.preventDefault(); // Evitar que el formulario se envíe de forma convencional
            
            // Obtener los valores de los campos
            var correo = $('#correo').val();
            var contrasena = $('#contrasena').val();


            // Verificar que los campos no estén vacíos
            if (correo == "" || contrasena == "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Campos vacíos',
                    text: 'Por favor, ingresa tu correo y contraseña.',
                });
                return;
            }

            // Enviar la petición AJAX
            $.ajax({
                url: 'login-ingreso.php', // Archivo PHP que procesa el login
                type: 'POST',
                data: {
                    correo: correo,
                    contrasena: contrasena
                },
                success: function(response) {
                    var data = JSON.parse(response);

                    if (data.status == 'success') {
                        // Si el login es exitoso
                        Swal.fire({
                            icon: 'success',
                            title: 'Bienvenido',
                            text: data.message,
                        }).then(function() {
                            // Redirigir a otra página (por ejemplo, a la página principal)
                            window.location.href = 'dashboard';
                        });
                    } else {
                        // Si el login falla
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: data.message,
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Ocurrió un error al procesar la solicitud. Inténtalo nuevamente.',
                    });
                }
            });
        });
    });
    </script>       
  </body>
</html>