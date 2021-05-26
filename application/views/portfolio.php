<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Kresna Adhi Pramana</title>

    <!-- Icon -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="image/x-icon"/>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">

    <!-- Maps -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"/>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: transparent;">
            <a class="navbar-brand" href="<?= base_url() . 'welcome/' ?>">
                <img src="<?php echo base_url(); ?>assets/img/logo/logo.png" width="30" height="30" class="d-inline-block align-top" alt="logo">
                KresnaAP
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" style="z-index: 1;" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'welcome/' ?>">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'welcome/portfolio' ?>">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'welcome/contact_me' ?>">Contact Me</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container-fluid text-center text-md-left mt-5 mb-1">
        <div class="row">
            <div class="col-md-12 mt-md-0 mt-3 d-flex justify-content-center">
                <img src="<?php echo base_url(); ?>assets/img/logo/work.png" height="30px" height="30px" alt="logo">
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3 mb-3">
        <div class="row">
            <div class="col-md-12 mt-3 d-flex justify-content-center">
                <p>These are <b>projects</b> that i have created or worked on.</p> 
            </div>
        </div>

        <div class="row mb-1" id="eklenik">
            <div class="col-md-12 mt-3 d-flex justify-content-center">
                <h3>E - Klenik ITS (Wisma Klenik)</h3>
            </div>
        </div>
        <div class="row mb-1">
            <div class="col-md-12 mt-3 d-flex justify-content-center">
                <img src="<?php echo base_url(); ?>assets/img/project/eklenik.png" id="projectphoto" alt="eklenik">
            </div>
        </div>
        <div class="row mb-3 justify-content-center">
            <div class="col-md-6 mt-3">
                <p>
					E - Klenik ITS is a web-based application that can be used to monitor and divert B3 waste to a third party (Waste Manager). 
					In this web application, we can see B3 and non-B3 waste, create waste management data, divert B3 waste to the waste manager, 
					and see the transactions that are in the waste transfer process.<br><br>

					I created this web application using the Laravel 7 framework, Bootstrap, as well as the built-in CSS from ITS.
                </p>
            </div>
        </div>
		<div class="row mb-3">
            <div class="col-md-12 mt-3 d-flex justify-content-center">
                <p>Source: <a href="https://kresnaadhipramana.blogspot.com/2021/03/tugas-1-pbkk-portofolio-penggunaan.html" target="_blank">My Blog</a></p> 
            </div>
        </div>  

        <hr class="w-75">

        <div class="row mb-1" id="medify">
            <div class="col-md-12 mt-3 d-flex justify-content-center">
                <h3>Medify.id</h3>
            </div>
        </div>
        <div class="row mb-1">
            <div class="col-md-12 mt-3 d-flex justify-content-center">
                <img src="<?php echo base_url(); ?>assets/img/project/medify.png" id="projectphoto" alt="medify">
            </div>
        </div>
        <div class="row mb-3 justify-content-center">
            <div class="col-md-6 mt-3">
                <p>
					Medify.id is a web-based application that is used as a landing page for the Medify company. 
					In this web application, we can see the products offered, the careers available, and the partnerships 
					provided by Medify.<br><br>

					I created this web application using the Laravel 8 framework and Bootstrap.
                </p>
            </div>
        </div>
		<div class="row mb-3">
            <div class="col-md-12 mt-3 d-flex justify-content-center">
                <p>Source: <a href="https://kresnaadhipramana.blogspot.com/2021/03/tugas-1-pbkk-portofolio-penggunaan.html" target="_blank">My Blog</a></p> 
            </div>
        </div>  	

        <hr class="w-75">

        <div class="row mb-1" id="fteic">
            <div class="col-md-12 mt-3 d-flex justify-content-center">
                <h3>FTEIC ITS Statistics Web</h3>
            </div>
        </div>
        <div class="row mb-1">
            <div class="col-md-12 mt-3 d-flex justify-content-center">
                <img src="<?php echo base_url(); ?>assets/img/project/fteic.png" id="projectphoto" alt="fteic">
            </div>
        </div>
        <div class="row mb-3 justify-content-center">
            <div class="col-md-6 mt-3">
                <p>
				FTEIC ITS Statistics Web is a web-based application that is used as a page to display statistics 
				from FTEIC ITS. In this web application, we can see statistical diagrams such as student profiles, 
				student numbers, and still many others.<br><br>

				I created this web application using Microsoft PoweBI and Wordpress.
                </p>
            </div>
        </div>
		<div class="row mb-3">
            <div class="col-md-12 mt-3 d-flex justify-content-center">
                <p>Source: <a href="https://www.its.ac.id/id/kuliah-di-its/fakultas-dan-departemen/fakultas-teknologi-elektro-dan-informatika-cerdas/diagram-perkembangan-fteic-sarjana/" target="_blank">Website</a></p> 
            </div>
        </div>  
    </div>

    <hr>

    <!-- Footer -->
    <footer class="page-footer font-small teal pt-4">
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3 d-flex justify-content-center">
                    <div class="col-md-10">
                        <img src="<?php echo base_url(); ?>assets/img/logo/check.png" alt="store" width="30" height="30">
                        <h3>KresnaAP</h3>
                        <p>
                            A Young Software Engineer.
                        </p>
                        <p>
                            +62 812 3020 0808<br>
                            kresnaadhipramana5758@gmail.com
                        </p>

                        <form action="">
                            <div class="input-group py-3">
                                <input type="text" class="form-control col-md-5" id="emailAddress" placeholder="Email@example.com">
                                <div class="input-group-append">
                                    <a href="#" class="input-group-text bg-dark" style="text-decoration: none;"><i class="far fa-envelope" style="color: white;"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <hr class="clearfix w-100 d-md-none pb-3">

                <div class="col-md-6 mb-md-0 mb-3 d-flex justify-content-center">
                    <div id="map"></div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 mt-5 text-white" style="background-color: black;">
            © 2020 Copyright:
            <a href="<?= base_url() . 'welcome/' ?>" class="text-white"> KresnaAP</a>
        </div>
    </footer>
      
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Maps -->
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/map-settings.js"></script>
</body>
</html>
