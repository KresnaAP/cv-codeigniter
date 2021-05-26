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
                <img src="<?php echo base_url(); ?>assets/img/logo/user.png" height="30px" height="30px" alt="logo">
            </div>
        </div>
    </div>

    <!-- Profile -->
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="row mb-5">
                    <div class="col">
                        <img src="<?php echo base_url(); ?>assets/img/pasphoto.png" alt="pasphoto" class="rounded-lg" style="width: 40%;">
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <h3><span class="text-warning">Kresna</span> Adhi Pramana</h3>
                <h4>Institut Teknologi Sepuluh Nopember Student</h4>

                <hr class="mr-5">

                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <b>Address</b> : Kejawan Putih Mutiara 6 / C3 - 350 <br>
                            <b>Age</b> : 20 <br>
                            <b>Gender</b> : Male <br>
                            <b>Birthday</b> : March 17, 2000 <br>
                        </p>
                    </div>
                </div>

                <hr class="mr-5">

                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <b>LinkedIn</b> : <a href="https://www.linkedin.com/in/kresna-adhi-pramana-b171521ab" target="_blank">Kresna Adhi Pramana</a> <br>
                            <b>Github</b> : <a href="https://github.com/KresnaAP" target="_blank">KresnaAP</a> <br>
                        </p>
                    </div>
                </div>

                <hr class="mr-5">

                <div class="row">
                    <div class="col">
                        Hello, my name is Kresna Adhi Pramana and I am a informatics student at Institut Teknologi Sepuluh Nopember.
                        My focus is to go deep into web development and data processing so that I can become a reliable programmer who 
                        are ready to enter the world of IT in the future.
                    </div>
                </div>
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
