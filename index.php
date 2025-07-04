<?php 
    include 'dashboard/config/conexion.php';
    include 'dashboard/class/global.php';
    $datosEmpresa = Globales::getDatos(1);
?>
<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
        <meta name="description" content="">
        <!-- ======== Page title ============ -->
        <title></title>
        <!--<< Favcion >>-->
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
    </head>
    <body>

        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">                
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="U" class="letters-loading">
                        U
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="M" class="letters-loading">
                        M
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="index.html">
                                    <img src="assets/img/logo/logo.svg" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-xl-block">
                            Nullam dignissim, ante scelerisque the  is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                        </p>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:info@example.com"><span class="mailto:info@example.com">info@example.com</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:tel:+51 902192976">tel:+51 902192976</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-button mt-4">
                                <a href="tel:+51 902192976" class="theme-btn text-center">
                                    <span>Get A Quote<i class="fa-solid fa-arrow-right-long"></i></span>
                                </a>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header Top Section Start -->
        <div class="header-top-section">
            <div class="header-top-shape">
                <img src="assets/img/header-top-shape.png" alt="shape-img">
            </div>
            <div class="container-fluid">
                <div class="header-top-wrapper">
                    <ul class="contact-list">
                        <li>
                            <i class="fal fa-map-marker-alt"></i>
                            <?=$datosEmpresa->direccion_contacto;?>
                        </li>
                        <li>
                            <i class="far fa-envelope"></i>
                            <a href="mailto:<?=$datosEmpresa->correo_contacto;?>" class="link"><?=$datosEmpresa->correo_contacto;?></a>
                        </li>
                    </ul>
                    <div class="social-icon d-flex align-items-center">
                        <span>Siguenos en nuestras redes:</span>
                        <a href="<?=$datosEmpresa->link_facebook;?>"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?=$datosEmpresa->link_instagram;?>"><i class="fab fa-instagram"></i></a>
                        <a href="<?=$datosEmpresa->link_linkedin;?>"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="<?=$datosEmpresa->link_otros;?>"><i class="fa-brands fa-siteweb"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Section Start -->
        <header id="header-sticky" class="header-1">
            <div class="container-fluid">
                <div class="mega-menu-wrapper">
                    <div class="header-main style-2">
                        <div class="header-left">
                            <div class="logo">
                                <a href="index.html" class="header-logo">
                                    <img src="assets/img/logo/logo_nuam.png" alt="logo-img">
                                </a>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown active menu-thumb">
                                                <a href="#">
                                                Inicio 
                                                <!-- <i class="fas fa-angle-down"></i> -->
                                                </a>
                                                
                                            </li>
                                            <li>
                                                <a href="#about">Nosotros</a>
                                            </li>
                                            <li>
                                                <a href="#programs">Programas</a>
                                            </li>
                                            <li>
                                                <a href="#team">Equipo</a>
                                            </li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a> -->
                            <div class="header-button">
                                <!-- <a href="dashboard-alumnos/login" class="theme-btn">
                                    <span>
                                        Iniciar Sesión
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </span>
                                </a> -->
                                <a href="login" class="theme-btn">
                                    <span>
                                        Plataforma Virtual
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </span>
                                </a>                                
                            </div>
                            <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Search Area Start -->
        <!-- <div class="search-wrap">
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
        </div> -->

        <!-- Hero Section Start -->
        <section class="hero-section hero-1 fix">
            <div class="bottom-shape">
                <img src="assets/img/hero/bottom.png" alt="shape-img">
            </div>
            <div class="parasuit-shape float-bob-y">
                <img src="assets/img/hero/parasuit.png" alt="shape-img">
            </div>
            <div class="left-shape">
                <img src="assets/img/hero/left.png" alt="shape-img">
            </div>
            <div class="book-shape float-bob-x">
                <img src="assets/img/hero/book.png" alt="shape-img">
            </div>
            <div class="pencil-shape">
                <img src="assets/img/hero/pencil.png" alt="shape-img">
            </div>
            <div class="bee-shape float-bob-y">
                <img src="assets/img/hero/bee.png" alt="shape-img">
            </div>
            <div class="right-shape">
                <img src="assets/img/hero/right.png" alt="shape-img">
            </div>
            <div class="star-shape">
                <img src="assets/img/hero/star.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h5 class="wow fadeInUp">Programas y Aprendizaje</h5>
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">
                                Niños prometedores, <span>Un mañana</span> por delante
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay=".5s">Creemos en su talento, su fuerza y su capacidad de transformar el mundo.</p>
                            <div class="hero-button">
                                <a href="tel:<?=$datosEmpresa->numero_contacto;?>" class="theme-btn wow fadeInUp" data-wow-delay=".7s">
                                    Contáctanos Hoy <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                                <span class="button-text wow fadeInUp" data-wow-delay=".8s">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn ripple video-popup">
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                    <span class="ms-4 d-line">Ver Video</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-image wow fadeInUp text-end" data-wow-delay=".4s">
                            <img src="assets/img/hero/01.png" alt="hero-img">
                            <div class="hero-shape">
                                <img src="assets/img/hero/hero-shape.png" alt="shape-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section Start -->
        <section class="about-section section-padding" id="about">
            <div class="bus-shape float-bob-x">
                <img src="assets/img/about/bus.png" alt="shape-img">
            </div>
            <div class="girl-shape float-bob-y">
                <img src="assets/img/about/girl.png" alt="shape-img">
            </div>
            <div class="dot-shape">
                <img src="assets/img/about/dot.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="about-wrapper mb-40">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="about-image-items">
                                <div class="about-image wow fadeInUp" data-wow-delay=".3s">
                                    <img src="assets/img/about/02.jpg" alt="about-img">
                                </div>
                                <div class="about-image-2">
                                    <img src="assets/img/about/02.png" alt="about-img">
                                </div>
                                <div class="border-shape-1">
                                    <img src="assets/img/about/border-shape-1.png" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">Sobre nosotros</span>
                                     <h2 class="wow fadeInUp" data-wow-delay=".3s">La mejor opción para el desarrollo de los niños</h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    En Nuam, creemos que cada niño tiene un enorme potencial. Nos dedicamos a guiarlos con programas integrales que combinan aprendizaje, deporte y desarrollo emocional en un entorno seguro, divertido y lleno de oportunidades.
                                </p>
                                <div class="about-list">
                                    <ul class="wow fadeInUp" data-wow-delay=".3s">
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Trabajo en equipo
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Disciplina y constancia
                                        </li>
                                    </ul>
                                    <ul class="wow fadeInUp" data-wow-delay=".5s">
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Coordinación
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Diversión activa
                                        </li>
                                    </ul>
                                </div>
                                <div class="about-author">
                                    <div class="about-button wow fadeInUp" data-wow-delay=".3s">
                                        <!-- <a href="about.html" class="theme-btn">
                                            Explorar Más <i class="fa-solid fa-arrow-right-long"></i>
                                        </a> -->
                                    </div>
                                    <div class="author-icon wow fadeInUp" data-wow-delay=".5s">
                                       <div class="icon">
                                            <i class="fa-solid fa-phone"></i>
                                       </div>
                                        <div class="content">
                                            <span>Contáctanos</span>
                                            <h5>
                                                <a href="tel:<?=$datosEmpresa->numero_contacto;?>"><?=$datosEmpresa->numero_contacto;?></a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Programs Section Start -->
        <section class="program-section section-padding section-bg-2 fix" id="programs">
            <div class="top-shape">
                <img src="assets/img/section-top-shape.png" alt="shape-img">
            </div>
            <div class="bottom-shape">
                <img src="assets/img/section-bottom-shape.png" alt="shape-img">
            </div>
            <div class="mask-shape float-bob-x">
                <img src="assets/img/program/mask.png" alt="shape-img">
            </div>
            <div class="pencil-shape">
                <img src="assets/img/program/pencil.png" alt="shape-img">
            </div>
            <div class="mask-shape-2">
                <img src="assets/img/program/mask-2.png" alt="shape-img">
            </div>
            <div class="compass-shape">
                <img src="assets/img/program/compass.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="section-title text-center mt-60">
                    <span class="wow fadeInUp">Nuestros Programas</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Conocemos a niños a su nivel. <br>
                        sin importar su edad</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="program-box-items">
                            <div class="program-bg"></div>
                             <div class="program-image">
                                <img src="assets/img/program/01.jpg" alt="img">
                            </div>
                            <div class="program-content text-center">
                                <h4>
                                    <a href="#">Nivel 1</a>
                                </h4>
                                <span>(4-5 years)</span>
                                <p>
                                    Iniciamos con juegos y ejercicios básicos que desarrollan la coordinación, el equilibrio y la socialización, en un ambiente seguro y divertido.
                                </p>
                                <a href="#" class="arrow-icon">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="program-box-items">
                            <div class="program-bg bg-2"></div>
                             <div class="program-image">
                                <img src="assets/img/program/02.jpg" alt="img">
                            </div>
                            <div class="program-content text-center">
                                <h4>
                                    <a href="#">Nivel 2</a>
                                </h4>
                                <span>(1-2 years)</span>
                                <p>
                                    Los niños empiezan a fortalecer habilidades físicas y cognitivas, incorporando dinámicas deportivas más estructuradas y trabajo en equipo.
                                </p>
                                <a href="#" class="arrow-icon color-2">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="program-box-items">
                            <div class="program-bg bg-3"></div>
                             <div class="program-image">
                                <img src="assets/img/program/03.jpg" alt="img">
                            </div>
                            <div class="program-content text-center style-2">
                                <h4>
                                    <a href="#">Nivel 3</a>
                                </h4>
                                <span>(1-2 years)</span>
                                <p>
                                    En este nivel se refuerzan la disciplina, el rendimiento físico y la técnica, preparando a los niños para asumir mayores retos con confianza y entusiasmo.
                                </p>
                                <a href="#" class="arrow-icon">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Work Process Section Start -->
        <section class="work-process-section fix section-padding fix">
            <div class="container">
                <div class="process-work-wrapper">
                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="work-process-items text-center">
                                <div class="line-shape">
                                    <img src="assets/img/process/line.png" alt="shape-img">
                                </div>
                                <div class="icon bg-cover" style="background-image: url('assets/img/process/icon-bg.png');">
                                    <i class="icon-icon-1"></i>
                                </div>
                                <div class="content">
                                    <h4>Docentes Expertos</h4>
                                    <p>
                                        Nuestros profesores están capacitados en pedagogía infantil y brindan una educación personalizada.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="work-process-items text-center style-2">
                                <div class="line-shape-2">
                                    <img src="assets/img/process/line-2.png" alt="shape-img">
                                </div>
                                <div class="icon bg-cover" style="background-image: url('assets/img/process/icon-bg.png');">
                                    <i class="icon-icon-2"></i>
                                </div>
                                <div class="content">
                                    <h4>Plataforma E-Learning</h4>
                                    <p>
                                        Contamos con recursos digitales interactivos para reforzar el aprendizaje desde casa.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="work-process-items text-center">
                                <div class="line-shape">
                                    <img src="assets/img/process/line.png" alt="shape-img">
                                </div>
                                <div class="icon bg-cover" style="background-image: url('assets/img/process/icon-bg.png');">
                                    <i class="icon-icon-3"></i>
                                </div>
                                <div class="content">
                                    <h4>Programas de Día Completo</h4>
                                    <p>
                                        Ofrecemos jornadas completas con actividades educativas y recreativas.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="work-process-items text-center">
                                <div class="content style-two">
                                    <h4>Desarrollo Creativo</h4>
                                    <p>
                                        Fomentamos la imaginación y expresión artística.
                                    </p>
                                </div>
                                <div class="icon bg-cover" style="background-image: url('assets/img/process/icon-bg.png');">
                                    <i class="icon-icon-4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Activities Section Start -->
        <section class="about-activities-section section-padding pt-0">
            <div class="pencil-shape">
                <img src="assets/img/about/pencil.png" alt="shape-img">
            </div>
            <div class="zebra-shape float-bob-y">
                <img src="assets/img/about/zebra.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="about-activities-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="activities-img-items">
                                <div class="activities-image">
                                    <img src="assets/img/about/03.jpg" alt="img">
                                </div>
                                <div class="radius-shape">
                                    <img src="assets/img/about/radius-shape-1.png" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="activities-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">Nuestras mejores actividades</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Háganos saber acerca de <br> nuestro  Lectura y cultura</h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    Descubre las experiencias que marcan la diferencia en el desarrollo de tus hijos. Promovemos el aprendizaje a través del juego, la creatividad y el descubrimiento.
                                </p>
                                <div class="row g-4 mt-4">
                                    <div class="col-xl-6 col-lg-8 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="icon-items">
                                            <div class="icon box-color-1">
                                               <i class=" icon-icon-1"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Estimulación Cognitiva</h5>
                                                <p>Actividades diseñadas.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="icon-items">
                                            <div class="icon box-color-3">
                                                <i class="icon-icon-16"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Desarrollo Sensorial</h5>
                                                <p>Talleres que exploran los sentidos.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="icon-items">
                                            <div class="icon box-color-2">
                                                <i class="icon-icon-7"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Comunicación y Lenguaje</h5>
                                                <p>Fomentamos la expresión verbal.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="icon-items">
                                            <div class="icon box-color-4">
                                                <i class="icon-icon-8"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Habilidades Sociales</h5>
                                                <p>Colaborar y resolver conflictos.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section Start -->
        <section class="team-section fix section-bg section-padding" id="team">
            <div class="top-shape">
                <img src="assets/img/section-top-shape.png" alt="shape-img">
            </div>
            <div class="love-shape float-bob-x">
                <img src="assets/img/team/love.png" alt="shape-img">
            </div>
            <div class="frame-shape">
                <img src="assets/img/team/frame.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title mt-60">
                        <span class="wow fadeInUp">Nuestros Expertos</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Nuestros instructores expertos</h2>
                    </div>
                    <div class="array-button wow fadeInUp" data-wow-delay=".5s">
                        <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                        <button class="array-next"><i class="fal fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="swiper team-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-items">
                                <div class="team-image">
                                    <div class="shape-img">
                                        <img src="assets/img/team/team-shape.png" alt="img">
                                    </div>
                                    <img src="assets/img/team/01.jpg" alt="team-img">
                                    <div class="social-profile">
                                        <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3>
                                        <a href="team-details.html">Brooklyn Simmons</a>
                                    </h3>
                                    <p>Instructors</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-items">
                                <div class="team-image">
                                    <div class="shape-img">
                                        <img src="assets/img/team/team-shape.png" alt="img">
                                    </div>
                                    <img src="assets/img/team/02.jpg" alt="team-img">
                                    <div class="social-profile">
                                        <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3>
                                        <a href="team-details.html">Leslie Alexander</a>
                                    </h3>
                                    <p>Instructors</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-items">
                                <div class="team-image">
                                    <div class="shape-img">
                                        <img src="assets/img/team/team-shape.png" alt="img">
                                    </div>
                                    <img src="assets/img/team/03.jpg" alt="team-img">
                                    <div class="social-profile">
                                        <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3>
                                        <a href="team-details.html">Ronald Richards</a>
                                    </h3>
                                    <p>Instructors</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-items">
                                <div class="team-image">
                                    <div class="shape-img">
                                        <img src="assets/img/team/team-shape.png" alt="img">
                                    </div>
                                    <img src="assets/img/team/04.jpg" alt="team-img">
                                    <div class="social-profile">
                                        <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3>
                                        <a href="team-details.html">Kristin Watson</a>
                                    </h3>
                                    <p>Instructors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section Start -->
        <section class="testimonial-section fix section-padding">
            <div class="tree-shape float-bob-y">
                <img src="assets/img/tree-shape.png" alt="shape-img">
            </div>
            <div class="right-shape">
                <img src="assets/img/testi-r-shape.png" alt="shape-img">
            </div>
            <div class="bee-shape float-bob-y">
                <img src="assets/img/testi-bee-shape.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">testimonials</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Las palabras de los padres son la clave para <br> las niños felices.</h2>
                </div>
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-items">
                                <div class="icon">
                                    <img src="assets/img/quote.png" alt="img">
                                </div>
                                <div class="testimonial-bg"></div>
                                <div class="testimonial-content">
                                    <p>
                                        Corquent per conubia nostra, per inceptos himenaeos. Suspendisse gravida vitae nisi
                                        Class aptent taciti sociosqu ad litora  
                                    </p>
                                    <h6>Esther Howard</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-items style-2">
                                <div class="icon">
                                    <img src="assets/img/quote-2.png" alt="img">
                                </div>
                                <div class="testimonial-bg bg-2"></div>
                                <div class="testimonial-content">
                                    <p>
                                        Corquent per conubia nostra, per inceptos himenaeos. Suspendisse gravida vitae nisi
                                        Class aptent taciti sociosqu ad litora  
                                    </p>
                                    <h6>Wade Warren</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-items style-3">
                                <div class="icon">
                                    <img src="assets/img/quote-3.png" alt="img">
                                </div>
                                <div class="testimonial-bg bg-3"></div>
                                <div class="testimonial-content">
                                    <p>
                                        Corquent per conubia nostra, per inceptos himenaeos. Suspendisse gravida vitae nisi
                                        Class aptent taciti sociosqu ad litora  
                                    </p>
                                    <h6>Jenny Wilson</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-dot text-center pt-5">
                        <div class="dot"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cta Section Start -->
        <section class="cta-section fix section-padding bg-cover" style="background-image: url('assets/img/cta/cta-bg.jpg');">
            <div class="plane-shape">
                <img src="assets/img/cta/plane.png" alt="img">
            </div>
            <div class="pencil-shape">
                <img src="assets/img/cta/pencil.png" alt="img">
            </div>
            <div class="container">
                <div class="cta-wrapper">
                    <div class="row justify-content-between">
                        <div class="col-lg-6">
                            <div class="section-title">
                                <span class="text-white wow fadeInUp">Consigue tu Sesión</span>
                                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                                    Ven y sé parte de <br> Nuestra sesión
                                </h2>
                            </div>
                            <div class="cta-button mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                <a href="contact.html" class="theme-btn bg-white">
                                    Apply Now <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                            <div class="cta-image">
                                <img src="assets/img/cta/cta-1.png" alt="cta-img">
                                <div class="cta-shape">
                                    <img src="assets/img/cta/cta-shape.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section Start -->
        <!-- <section class="news-section section-padding fix" id="blog">
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title">
                        <span class="wow fadeInUp">Nuestros Blogs</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Explora blogs y noticias</h2>
                    </div>
                    <a href="news.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">
                        See All Article <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
                <div class="news-wrapper">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="news-single-items">
                                <div class="news-image">
                                    <img src="assets/img/news/01.jpg" alt="news-img">
                                </div>
                                <div class="news-content">
                                    <ul>
                                        <li>
                                            <i class="fas fa-tag"></i> Cooking                       
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-calendar-days"></i> Feb 20, 2024                           
                                        </li>
                                    </ul>
                                    <h3>
                                        <a href="news-details.html">Questions to Ask Vendors Before Choosing an <br> LMS Platform</a>
                                    </h3>
                                    <p>
                                        Phasellus turpis sapien, venenatis tempus vestibulum in, cursus quis enim. Nunc mollis vitae ipsum sit amet ultrices. Duis in dapibus erat
                                    </p>
                                    <div class="post-author-items">
                                        <div class="post-items">
                                            <div class="thumb">
                                                <img src="assets/img/news/author.png" alt="img">
                                            </div>
                                            <div class="content">
                                                <span>By Admin</span>
                                                <h6>Ronald Richards</h6>
                                            </div>
                                        </div>
                                        <a href="news-details.html" class="theme-btn">
                                            Read More <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 mt-5 mt-xl-0">
                            <div class="news-right-items wow fadeInUp" data-wow-delay=".4s">
                                <div class="news-thumb">
                                    <img src="assets/img/news/02.jpg" alt="img">
                                </div>
                                <div class="news-content">
                                    <ul>
                                        <li>
                                             <i class="fas fa-tag"></i> Cooking                               
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-calendar-days"></i> Feb 20, 2024                      
                                        </li>
                                    </ul>
                                    <h3>
                                        <a href="news-details.html">
                                            That jerk Form Finance <br>
                                            really threw me
                                        </a>
                                    </h3>
                                    <div class="post-items">
                                        <div class="thumb">
                                            <img src="assets/img/news/author.png" alt="img">
                                        </div>
                                        <div class="content">
                                            <span>By Admin</span>
                                            <h6>Dianne Russell</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-right-items wow fadeInUp" data-wow-delay=".6s">
                                <div class="news-thumb">
                                    <img src="assets/img/news/03.jpg" alt="img">
                                </div>
                                <div class="news-content">
                                    <ul>
                                        <li>
                                             <i class="fas fa-tag"></i> Cooking                               
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-calendar-days"></i> Feb 20, 2024                           
                                        </li>
                                    </ul>
                                    <h3>
                                        <a href="news-details.html">
                                            From without content <br>
                                            style without 
                                        </a>
                                    </h3>
                                    <div class="post-items">
                                        <div class="thumb">
                                            <img src="assets/img/news/author-3.png" alt="img">
                                        </div>
                                        <div class="content">
                                            <span>By Admin</span>
                                            <h6>Leslie Alexander</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Main Cta Section Start -->
        <!-- <section class="main-cta-section">
            <div class="plane-shape float-bob-y">
                <img src="assets/img/plane.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="main-cta-wrapper section-padding">
                    <div class="pencil-shape">
                        <img src="assets/img/cta/pencil-2.png" alt="img">
                    </div>
                    <div class="plane-shape float-bob-y">
                        <img src="assets/img/cta/plane.png" alt="img">
                    </div>
                    <div class="cta-shape float-bob-x">
                        <img src="assets/img/cta/shape.png" alt="img">
                    </div>
                    <div class="cta-bg"></div>
                    <div class="section-title text-center">
                        <span class="text-white wow fadeInUp">Hoja informativa</span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">Suscríbete a nuestro boletín <br>
                            para actualizaciones diarias</h2>
                    </div>
                    <div class="newsletter-items">
                        <div class="form-clt wow fadeInUp" data-wow-delay=".5s">
                            <input type="text" name="email" id="email" placeholder="Email Address">
                        </div>
                        <button class="theme-btn wow fadeInUp" data-wow-delay=".7s" type="submit">
                            <span>Subscribe Now</span>
                        </button>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Instagram Banner Section Start -->
        <!-- <div class="instagram-banner fix section-padding d-none">
            <div class="instagram-wrapper">
                <h3 class="text-center wow fadeInUp" data-wow-delay=".3s">Follow Instagram</h3>
                <div class="swiper instagram-banner-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="instagram-banner-items">
                                <div class="banner-image">
                                    <img src="assets/img/instagram/01.jpg" alt="insta-img">
                                    <a href="index.html" class="icon">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram-banner-items">
                                <div class="banner-image">
                                    <img src="assets/img/instagram/02.jpg" alt="insta-img">
                                    <a href="index.html" class="icon">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram-banner-items">
                                <div class="banner-image">
                                    <img src="assets/img/instagram/03.jpg" alt="insta-img">
                                    <a href="index.html" class="icon">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram-banner-items">
                                <div class="banner-image">
                                    <img src="assets/img/instagram/04.jpg" alt="insta-img">
                                    <a href="index.html" class="icon">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram-banner-items">
                                <div class="banner-image">
                                    <img src="assets/img/instagram/05.jpg" alt="insta-img">
                                    <a href="index.html" class="icon">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram-banner-items">
                                <div class="banner-image">
                                    <img src="assets/img/instagram/06.jpg" alt="insta-img">
                                    <a href="index.html" class="icon">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!--<< Footer Section Start >>-->
        <footer class="footer-section section-bg fix">
            <div class="footer-top-shape">
                <img src="assets/img/footer-top.png" alt="shape-img">
            </div>
            <div class="frame-shape">
                <img src="assets/img/frame.png" alt="shape-img">
            </div>
            <div class="zebra-shape float-bob-y">
                <img src="assets/img/about/zebra.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="contact-info-area">
                    <div class="contact-info-items wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.7891 1.81641H16.7578C13.3658 1.81641 10.6055 4.5767 10.6055 7.96875C10.6055 11.063 12.9015 13.631 15.8789 14.0585V16.7578C15.8788 16.9317 15.9303 17.1016 16.0268 17.2462C16.1234 17.3907 16.2607 17.5033 16.4214 17.5697C16.7456 17.705 17.1258 17.6325 17.3793 17.3792L20.6374 14.1211H23.7891C27.1811 14.1211 30 11.3608 30 7.96875C30 4.5767 27.1811 1.81641 23.7891 1.81641ZM16.7578 8.84754C16.2723 8.84754 15.8789 8.45402 15.8789 7.96863C15.8789 7.48324 16.2723 7.08973 16.7578 7.08973C17.2432 7.08973 17.6367 7.48324 17.6367 7.96863C17.6367 8.45402 17.2432 8.84754 16.7578 8.84754ZM20.2734 8.84754C19.7879 8.84754 19.3945 8.45402 19.3945 7.96863C19.3945 7.48324 19.7879 7.08973 20.2734 7.08973C20.7588 7.08973 21.1523 7.48324 21.1523 7.96863C21.1523 8.45402 20.7588 8.84754 20.2734 8.84754ZM23.7891 8.84754C23.3036 8.84754 22.9102 8.45402 22.9102 7.96863C22.9102 7.48324 23.3036 7.08973 23.7891 7.08973C24.2745 7.08973 24.668 7.48324 24.668 7.96863C24.668 8.45402 24.2745 8.84754 23.7891 8.84754Z" fill="#F39F5F"/>
                                <path d="M19.7461 28.1836C21.2 28.1836 22.3828 27.0008 22.3828 25.5469V22.0312C22.3828 21.6527 22.1408 21.3171 21.782 21.1978L16.5209 19.44C16.2634 19.3533 15.9819 19.3928 15.7553 19.5421L13.5186 21.033C11.1496 19.9035 8.33871 17.0925 7.20914 14.7236L8.7 12.4868C8.77415 12.3754 8.82189 12.2485 8.83958 12.1158C8.85728 11.9831 8.84447 11.8482 8.80213 11.7212L7.04432 6.46014C6.98611 6.28516 6.87428 6.13295 6.72469 6.02512C6.5751 5.91728 6.39534 5.85929 6.21094 5.85938H2.63672C1.18277 5.85938 0 7.02979 0 8.48373C0 18.61 9.6198 28.1836 19.7461 28.1836Z" fill="#F39F5F"/>
                            </svg>                                        
                        </div>
                        <div class="content">
                            <p>Número de Contacto</p>
                            <h4>
                                <a href="tel:<?=$datosEmpresa->numero_contacto;?>"><?=$datosEmpresa->numero_contacto;?></a>
                            </h4>
                        </div>
                    </div>
                    <div class="contact-info-items wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.6493 10.8272C12.8019 10.914 12.9755 10.9569 13.1509 10.9509C13.3307 10.9344 13.5048 10.8798 13.6618 10.7906L24.9212 4.22062C24.6765 3.79416 24.324 3.43955 23.8989 3.19239C23.4739 2.94523 22.9913 2.81422 22.4996 2.8125H3.74965C3.25782 2.81406 2.77505 2.94499 2.34983 3.19216C1.92461 3.43932 1.57191 3.79402 1.32715 4.22062L12.6493 10.8272Z" fill="#F39F5F"/>
                                <path d="M25.3125 6.15918V12.6748C24.4104 12.3501 23.4587 12.1852 22.5 12.1873C20.2633 12.1908 18.1192 13.0808 16.5376 14.6624C14.956 16.244 14.066 18.3881 14.0625 20.6248C14.0623 20.9382 14.0811 21.2512 14.1188 21.5623H3.75C3.00476 21.5601 2.29069 21.263 1.76372 20.7361C1.23676 20.2091 0.939726 19.495 0.9375 18.7498V6.15918L11.7094 12.4498C12.1434 12.6872 12.6303 12.8116 13.125 12.8116C13.6197 12.8116 14.1066 12.6872 14.5406 12.4498L25.3125 6.15918Z" fill="#F39F5F"/>
                                <path d="M22.5 14.0625C20.7595 14.0625 19.0903 14.7539 17.8596 15.9846C16.6289 17.2153 15.9375 18.8845 15.9375 20.625C15.9375 22.3655 16.6289 24.0347 17.8596 25.2654C19.0903 26.4961 20.7595 27.1875 22.5 27.1875C22.7486 27.1875 22.9871 27.0887 23.1629 26.9129C23.3387 26.7371 23.4375 26.4986 23.4375 26.25C23.4375 26.0014 23.3387 25.7629 23.1629 25.5871C22.9871 25.4113 22.7486 25.3125 22.5 25.3125C21.5729 25.3125 20.6666 25.0376 19.8958 24.5225C19.1249 24.0074 18.5241 23.2754 18.1693 22.4188C17.8145 21.5623 17.7217 20.6198 17.9026 19.7105C18.0834 18.8012 18.5299 17.966 19.1854 17.3104C19.841 16.6549 20.6762 16.2084 21.5855 16.0276C22.4948 15.8467 23.4373 15.9395 24.2938 16.2943C25.1504 16.6491 25.8824 17.2499 26.3975 18.0208C26.9126 18.7916 27.1875 19.6979 27.1875 20.625V21.5625C27.1875 21.8111 27.0887 22.0496 26.9129 22.2254C26.7371 22.4012 26.4986 22.5 26.25 22.5C26.0014 22.5 25.7629 22.4012 25.5871 22.2254C25.4113 22.0496 25.3125 21.8111 25.3125 21.5625V20.625C25.3125 20.0687 25.1476 19.525 24.8385 19.0625C24.5295 18.5999 24.0902 18.2395 23.5763 18.0266C23.0624 17.8137 22.4969 17.758 21.9513 17.8665C21.4057 17.9751 20.9046 18.2429 20.5113 18.6363C20.1179 19.0296 19.8501 19.5307 19.7415 20.0763C19.633 20.6219 19.6887 21.1874 19.9016 21.7013C20.1145 22.2152 20.4749 22.6545 20.9375 22.9635C21.4 23.2726 21.9437 23.4375 22.5 23.4375C22.9843 23.4344 23.4594 23.3048 23.8781 23.0616C24.2022 23.578 24.6856 23.9748 25.2552 24.1921C25.8248 24.4094 26.4496 24.4353 27.0353 24.266C27.621 24.0967 28.1356 23.7412 28.5013 23.2535C28.867 22.7657 29.064 22.1721 29.0625 21.5625V20.625C29.0605 18.8851 28.3685 17.2171 27.1382 15.9868C25.9079 14.7565 24.2399 14.0645 22.5 14.0625ZM22.5 21.5625C22.3146 21.5625 22.1333 21.5075 21.9792 21.4045C21.825 21.3015 21.7048 21.1551 21.6339 20.9838C21.5629 20.8125 21.5443 20.624 21.5805 20.4421C21.6167 20.2602 21.706 20.0932 21.8371 19.9621C21.9682 19.831 22.1352 19.7417 22.3171 19.7055C22.499 19.6693 22.6875 19.6879 22.8588 19.7589C23.0301 19.8298 23.1765 19.95 23.2795 20.1042C23.3825 20.2583 23.4375 20.4396 23.4375 20.625C23.4375 20.8736 23.3387 21.1121 23.1629 21.2879C22.9871 21.4637 22.7486 21.5625 22.5 21.5625Z" fill="#F39F5F"/>
                            </svg>
                                                                        
                        </div>
                        <div class="content">
                            <p>Hacer una cotización</p>
                            <h4>
                                <a href="mailto:<?=$datosEmpresa->correo_contacto;?>"><?=$datosEmpresa->correo_contacto;?></a>
                            </h4>
                        </div>
                    </div>
                    <div class="contact-info-items wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 1.66699C11.036 1.66699 7 5.73899 7 10.7617C7 12.463 7.74933 14.5737 8.84 16.679C11.2413 21.315 15.2413 25.9843 15.2413 25.9843C15.3352 26.0937 15.4516 26.1814 15.5826 26.2416C15.7135 26.3017 15.8559 26.3328 16 26.3328C16.1441 26.3328 16.2865 26.3017 16.4174 26.2416C16.5484 26.1814 16.6648 26.0937 16.7587 25.9843C16.7587 25.9843 20.7587 21.315 23.16 16.679C24.2507 14.5737 25 12.463 25 10.7617C25 5.73899 20.964 1.66699 16 1.66699ZM16 7.00033C15.0447 7.02609 14.1371 7.4237 13.4705 8.10853C12.8039 8.79335 12.4309 9.7113 12.4309 10.667C12.4309 11.6227 12.8039 12.5406 13.4705 13.2255C14.1371 13.9103 15.0447 14.3079 16 14.3337C16.9553 14.3079 17.8629 13.9103 18.5295 13.2255C19.1961 12.5406 19.5691 11.6227 19.5691 10.667C19.5691 9.7113 19.1961 8.79335 18.5295 8.10853C17.8629 7.4237 16.9553 7.02609 16 7.00033Z" fill="#F39F5F"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.3783 23.1693C23.4623 23.4946 24.3557 23.8973 24.973 24.3693C25.373 24.6733 25.6663 24.9706 25.6663 25.3333C25.6663 25.5466 25.545 25.74 25.3743 25.9333C25.0917 26.252 24.6717 26.5386 24.1517 26.8053C22.3143 27.7453 19.3437 28.3333 15.9997 28.3333C12.6557 28.3333 9.68501 27.7453 7.84767 26.8053C7.32767 26.5386 6.90767 26.252 6.62501 25.9333C6.45434 25.74 6.33301 25.5466 6.33301 25.3333C6.33301 24.9706 6.62634 24.6733 7.02634 24.3693C7.64367 23.8973 8.53701 23.4946 9.62101 23.1693C9.87509 23.0929 10.0884 22.9187 10.2141 22.6851C10.3397 22.4514 10.3674 22.1774 10.291 21.9233C10.2146 21.6692 10.0404 21.4559 9.80677 21.3302C9.5731 21.2046 9.29909 21.1769 9.04501 21.2533C7.39434 21.7506 6.11167 22.432 5.34101 23.1853C4.66367 23.8453 4.33301 24.584 4.33301 25.3333C4.33301 26.2693 4.86234 27.2026 5.93834 27.9813C7.82634 29.3466 11.6183 30.3333 15.9997 30.3333C20.381 30.3333 24.173 29.3466 26.061 27.9813C27.137 27.2026 27.6663 26.2693 27.6663 25.3333C27.6663 24.584 27.3357 23.8453 26.6583 23.1853C25.8877 22.432 24.605 21.7506 22.9543 21.2533C22.8285 21.2155 22.6965 21.2028 22.5658 21.216C22.4351 21.2292 22.3083 21.268 22.1926 21.3302C22.0769 21.3925 21.9746 21.4769 21.8915 21.5786C21.8084 21.6804 21.7462 21.7975 21.7083 21.9233C21.6705 22.0491 21.6578 22.1811 21.6711 22.3118C21.6843 22.4425 21.7231 22.5694 21.7853 22.6851C21.8475 22.8008 21.9319 22.9031 22.0337 22.9862C22.1354 23.0692 22.2525 23.1315 22.3783 23.1693Z" fill="#F39F5F"/>
                            </svg>                     
                        </div>
                        <div class="content">
                            <p>Ubicación</p>
                            <h4>
                                <?=$datosEmpresa->direccion_contacto;?>
                            </h4>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="footer-widgets-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <a href="index.html">
                                        <img src="assets/img/logo/logo_nuam_negro.png" alt="logo-img">
                                    </a>
                                </div>
                                <div class="footer-content">
                                    <p>
                                        <!-- Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.  -->
                                    </p>
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="<?=$datosEmpresa->link_facebook;?>"><i class="fab fa-facebook-f"></i></a>
                                        <a href="<?=$datosEmpresa->link_instagram;?>"><i class="fab fa-instagram"></i></a>
                                        <a href="<?=$datosEmpresa->link_linkedin;?>"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="<?=$datosEmpresa->link_otros;?>"><i class="fa-brands fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".5s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h3>Nosotros</h3>
                                </div>
                                <ul class="list-area">
                                    <li>
                                        <a href="#about">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Sobre Nosotros
                                        </a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".5s">
                            <div class="single-footer-widget style-margin">
                                <div class="widget-head">
                                    <h3>Programas</h3>
                                </div>
                                <ul class="list-area">
                                    <li>
                                        <a href="#programs">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Programa 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#programs">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Programa 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#programs">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Programa 3
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#programs">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Programa 4
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp d-none" data-wow-delay=".7s">
                            <div class="single-footer-widget style-margin">
                                <div class="widget-head">
                                    <h3>Recent Posts</h3>
                                </div>
                                <div class="recent-post-area">
                                    <div class="recent-post-items">
                                        <div class="thumb">
                                            <img src="assets/img/news/pp1.jpg" alt="post-img">
                                        </div>
                                        <div class="content">
                                            <ul class="post-date">
                                                <li>
                                                    <i class="fa-solid fa-calendar-days me-2"></i>
                                                    20 Feb, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="news-details.html">
                                                    That jerk Form Finance <br>
                                                    really threw me
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="recent-post-items mb-0">
                                        <div class="thumb">
                                            <img src="assets/img/news/pp2.jpg" alt="post-img">
                                        </div>
                                        <div class="content">
                                            <ul class="post-date">
                                                <li>
                                                    <i class="fa-solid fa-calendar-days me-2"></i>
                                                    15 Dec, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="news-details.html">
                                                    From without content <br>
                                                    style without 
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="f-bottom-shape">
                    <img src="assets/img/footer-bottom.png" alt="shape-img">
                </div>
                <div class="container">
                    <div class="footer-wrapper d-flex align-items-center justify-content-between">
                        <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                            © All Copyright 2024 Desarrollado por <a href="https://diintec.com">Diintec Agency</a>
                        </p>
                        <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                            <!-- <li>
                                <a href="contact.html">
                                    Términos & Condiciones
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    Políticas de Privacidad
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <a href="#" id="scrollUp" class="scroll-icon">
                    <i class="far fa-arrow-up"></i>
                </a>
            </div>
        </footer>

        <!--<< All JS Plugins >>-->
        <script src="assets/js/jquery-3.7.1.min.js"></script>
        <!--<< Viewport Js >>-->
        <script src="assets/js/viewport.jquery.js"></script>
        <!--<< Bootstrap Js >>-->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!--<< Nice Select Js >>-->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!--<< Waypoints Js >>-->
        <script src="assets/js/jquery.waypoints.js"></script>
        <!--<< Counterup Js >>-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="assets/js/swiper-bundle.min.js"></script>
        <!--<< MeanMenu Js >>-->
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!--<< Wow Animation Js >>-->
        <script src="assets/js/wow.min.js"></script>
        <!--<< Main.js >>-->
        <script src="assets/js/main.js"></script>
    </body>
</html>