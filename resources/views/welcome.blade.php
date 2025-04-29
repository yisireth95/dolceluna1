<!DOCTYPE html>
<html lang="en">

@extends('layouts.app')

@section('title', 'Dolce Luna')

@section('content')

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">

                <a href="#" class="logo d-flex align-items-center me-auto me-lg-0">

                    <h1>Dolce Luna <span><img src="assets/img/logo1.png" alt="Logo" class="logo"></span></h1>
                </a>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="{{ route('inicio') }}">Inicio</a></li>
                        <li><a href="{{ route('menu') }}">Productos</a></li>
                        <li><a href="{{ route('about') }}">Nosotros</a></li>
                        <li><a href="{{ route('gallery') }}">Galeria</a></li>
                        <li><a href="{{ route('contact') }}">Contacto</a></li>
                    </ul>
                </nav><!-- .navbar -->

                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            </div>
        </header><!-- End Header -->
        <!-- ======= Hero Section ======= -->
        <section id="inicio" class="hero d-flex align-items-center section-bg">
            <div class="container">

                <div class="row justify-content-between gy-5">
                    <div
                        class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                        <h2 data-aos="fade-up">Disfruta de unos Deliciosos Postres<br>Deleitate con Nostros</h2>
                        <p data-aos="fade-up" data-aos-delay="100"></p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="assets/img/video1.mp4" class="glightbox btn-watch-video d-flex align-items-center"><i
                                    class="bi bi-play-circle"></i><span>Mira Nuetro Video Promocional</span></a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel"
                            data-bs-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/foto4.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/foto2.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/foto5.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Hero Section -->
        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu">
            <div class="container" data-aos="fade-up">

                <div class="section-header">

                    <p>Nuestros <span> Productos</span></p>
                </div>

                <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                            <h4>Tortas</h4>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                            <h4>Cientos</h4>
                        </a>


                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                            <h4>Antojitos</h4>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                            <h4>Detalles Personalizados</h4>
                        </a>
                    </li>

                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="menu-starters">

                        <div class="tab-header text-center">
                            <p>Menu</p>

                            <h3>Tortas</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/foto2.png" class="glightbox"><img src="assets/img/foto2.png"
                                        class="menu-img img-fluid" alt=""></a>
                                <h4>Pastel de bodas</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $40000
                                </p>
                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/foto4.png" class="glightbox"><img src="assets/img/foto4.png"
                                        class="menu-img img-fluid" alt=""></a>
                                <h4>Pastel para Bautizos</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $50000
                                </p>
                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/foto5.png" class="glightbox"><img src="assets/img/foto5.png"
                                        class="menu-img img-fluid" alt=""></a>
                                <h4>Pastel para niño</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $45000
                                </p>
                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/foto1.png" class="glightbox"><img src="assets/img/foto1.png"
                                        class="menu-img img-fluid" alt=""></a>
                                <h4>pastel Rosa Mujer</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $45000
                                </p>
                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/foto6.png" class="glightbox"><img src="assets/img/foto6.png"
                                        class="menu-img img-fluid" alt=""></a>
                                <h4>pastel para Ellos</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $50000
                                </p>
                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/foto7.png" class="glightbox"><img src="assets/img/foto7.png"
                                        class="menu-img img-fluid" alt=""></a>
                                <h4>Pastel para niños</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $40000
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="menu-breakfast">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Cientos Dulces y salados </h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/productos/cientos/Ciento-Dulce1.png" class="glightbox"><img
                                        src="assets/img/productos/cientos/Ciento-Dulce1.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Ciento Dulce (100/u)</h4>
                                <p class="ingredients">
                                    Maicenitos-alfajores chocolate- cachitos-pie de limon
                                    -tartaleta de frutas-Merengitos-profiteroles-brownie-banoffe.
                                </p>
                                <p class="price">
                                    $30.000
                                </p>
                            </div>
                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/productos/cientos/Ciento-Dulce-5.png" class="glightbox"><img
                                        src="assets/img/productos/cientos/Ciento-Dulce-5.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Ciento Dulce (100/u)</h4>
                                <p class="ingredients">
                                    Maicenitos-alfajores chocolate- cachitos-pie de limon
                                    -tartaleta de frutas-Merengitos-profiteroles-brownie-banoffe
                                </p>
                                <p class="price">
                                    $30.000
                                </p>
                            </div>
                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/productos/cientos/Ciento-Dulce3.png" class="glightbox"><img
                                        src="assets/img/productos/cientos/Ciento-Dulce3.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Ciento Dulce (100/u)</h4>
                                <p class="ingredients">
                                    Maicenitos-alfajores chocolate- cachitos-pie de limon
                                    -tartaleta de frutas-Merengitos-profiteroles-brownie-banoffe
                                </p>
                                <p class="price">
                                    $ 30.000
                                </p>
                            </div>
                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/productos/cientos/Ciento-Salado3.png" class="glightbox"><img
                                        src="assets/img/productos/cientos/Ciento-Salado3.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Ciento Salado</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $30.000
                                </p>
                            </div>
                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/productos/cientos/Ciento-Salado2.png" class="glightbox"><img
                                        src="assets/img/productos/cientos/Ciento-Salado2.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Ciento Salado</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $30.000
                                </p>
                            </div>
                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/productos/cientos/Ciento-Salado1.png" class="glightbox"><img
                                        src="assets/img/productos/cientos/Ciento-Salado1.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Ciento Salado</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $30.000
                                </p>
                            </div>
                        </div>
                    </div><!-- End postres -->

                    <div class="tab-pane fade" id="menu-lunch">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Antojitos</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/nidos-de-merengue.jpg" class="glightbox"><img
                                        src="assets/img/nidos-de-merengue.jpg" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Nidos de Merengue</h4>
                                <p class="ingredients">
                                    Disfruta de estos ricos Nidos de Merengue Rellenos con Manjar y Crema de Lúcuma
                                </p>
                                <p class="price">
                                    $5000
                                </p>
                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/Cachitos-con-manjar.jpg" class="glightbox"><img
                                        src="assets/img/Cachitos-con-manjar.jpg" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Cachitos de Chocolate</h4>
                                <p class="ingredients">
                                    Disfruta de unos deleciosos Cachitos de chocalte
                                </p>
                                <p class="price">
                                    $5000
                                </p>
                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/Chaparrita-Napolitana.jpg" class="glightbox"><img
                                        src="assets/img/Chaparrita-Napolitana.jpg" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Chaparritas Napolitanas</h4>
                                <p class="ingredients">
                                    Disfruta de unas deliciosas Chaparritas Napolitanas con los mejores ingredientes.
                                </p>
                                <p class="price">
                                    $5000
                                </p>
                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/Chaparrita-Napolitana.jpg" class="glightbox"><img
                                        src="assets/img/Chaparrita-Napolitana.jpg" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Chaparritas Napolitanas</h4>
                                <p class="ingredients">
                                    Disfruta de unas deliciosas Chaparritas Napolitanas con los mejores ingredientes.
                                </p>
                                <p class="price">
                                    $5000
                                </p>
                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/Cachitos-con-manjar.jpg" class="glightbox"><img
                                        src="assets/img/Cachitos-con-manjar.jpg" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Cachitos de Chocolate</h4>
                                <p class="ingredients">
                                    Disfruta de unos deleciosos Cachitos de chocalte
                                </p>
                                <p class="price">
                                    $5000
                                </p>
                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/nidos-de-merengue.jpg" class="glightbox"><img
                                        src="assets/img/nidos-de-merengue.jpg" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Nidos de Merengue</h4>
                                <p class="ingredients">
                                    Disfruta de estos ricos Nidos de Merengue Rellenos con Manjar y Crema de Lúcuma
                                </p>
                                <p class="price">
                                    $5000
                                </p>
                            </div>

                        </div>
                    </div><!-- End  ocaciones -->

                    <div class="tab-pane fade" id="menu-dinner">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Personalizados</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/detalles-rosas.jpg" class="glightbox"><img
                                        src="assets/img/detalles-rosas.jpg" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Corazon de Rosas</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $ 30000
                                </p>
                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/corazon.jpg" class="glightbox"><img src="assets/img/corazon.jpg"
                                        class="menu-img img-fluid" alt=""></a>
                                <h4>Corazon de Rozas</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $ 30000
                                </p>
                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/gobos.jpg" class="glightbox"><img src="assets/img/gobos.jpg"
                                        class="menu-img img-fluid" alt=""></a>
                                <h4>Globo Perzonalizado</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $30000
                                </p>
                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/globosrojo.jpg" class="glightbox"><img
                                        src="assets/img/globosrojo.jpg" class="menu-img img-fluid" alt=""></a>
                                <h4>Ramos de Globos Rojos</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $40000
                                </p>
                            </div>
                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/diapadre.jpg" class="glightbox"><img src="assets/img/diapadre.jpg"
                                        class="menu-img img-fluid" alt=""></a>
                                <h4>Dia Del Padre</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $25000
                                </p>
                            </div>

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/diamadre.jpg" class="glightbox"><img src="assets/img/diamadre.jpg"
                                        class="menu-img img-fluid" alt=""></a>
                                <h4>Dia De las Madres</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $ 40000
                                </p>
                            </div>
                        </div>
                    </div><!-- End Personalizados Menu Content -->
                </div>
        </section><!-- End Menu Section -->
        <!-- ======= Nosotros ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <p>Sobre <span>Nosotros</span></p>
                </div>
                <div class="row gy-4">
                    <div class="video-container" style="width: 600px; height: 450px;">
                        <video controls>
                            <h2 style="display: block; font-size: 18px; font-weight: bold; color: #333;">Nuestras
                                instalaciones</h2>
                            <source src="assets/img/videoabout.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore
                                magna aliqua.
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit.
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident.
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore
                                magna aliqua.
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit.
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident.
                            </p>
                            </p>


                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->



        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Galeria</h2>
                    <p>Mira <span>Nuestras Publicaciones</span></p>
                </div>

                <div class="gallery-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/cake1.png"><img src="assets/img/cake1.png" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/foto1.jpg"><img src="assets/img/foto1.jpg" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/foto3.jpg"><img src="assets/img/foto3.jpg" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/foto4.jpg"><img src="assets/img/foto4.jpg" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/foto5.jpg"><img src="assets/img/foto5.jpg" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/foto6.jpg"><img src="assets/img/foto6.jpg" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/foto12.jpg"><img src="assets/img/foto12.jpg" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/foto7.jpg"><img src="assets/img/foto7.jpg" class="img-fluid"
                                    alt=""></a></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contactenos</h2>
                    <p>No Sabes como llegar? <span></span></p>
                </div>

                <div class="mb-3">
                    <iframe style="border:0; width: 100%; height: 350px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.7099962542447!2d-71.33887572434361!3d-29.987763328650427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9691c8d7ca8de815%3A0xf265f0cf30598b79!2sC.%20Los%20Alamos%20553%2C%201791752%20Coquimbo%2C%20Chile!5e0!3m2!1ses-419!2sco!4v1716584554456!5m2!1ses-419!2sco"
                        frameborder="0" allowfullscreen></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-map flex-shrink-0"></i>
                            <div>
                                <h3>Nuestra Direccion</h3>
                                <p>Los Alamos #553, Sindempart</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center">
                            <i class="icon bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email</h3>
                                <p>contact@example.com</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Llamanos</h3>
                                <p>+56992300905</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-share flex-shrink-0"></i>
                            <div>
                                <h3>Nuestros Horarios</h3>
                                <div><strong>Lunes-Sabados:</strong>🕣 10:30AM - 20:00 PM;
                                    <strong>Domingos:</strong> 10:30 a 18:00
                                </div>
                            </div>
                        </div>
                    </div><!-- End Info Item -->
                </div>

                <div>
                    <h2>Envianos un mensaje</h2>
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
                        <div class="row">
                            <div class="col-xl-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Nombre" required>
                            </div>
                            <div class="col-xl-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form><!--End Contact Form -->
                </div>
            </div>
        </section><!-- End Contact Section -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-lg-12 text-center">
                        <h4>Siguenos en Nuestra redes Sociales.</h4>
                        <div class="social-links d-flex justify-content-center mb-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="@dolceluna.cl" class="instagram"><i class="bi bi-instagram"></i></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Dolce Luna</span></strong>. All Rights Reserved
                </div>

            </div>

        </footer><!-- End Footer -->
        <!-- End Footer -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>
    </html>
