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
				<img src="<?php echo base_url(); ?>assets/img/logo/check.png" alt="store" width="30" height="30">
            </div>
        </div>
    </div>

    <!-- Contact Me -->
    <div class="container-fluid text-center text-md-left my-5">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3 d-flex justify-content-center">
                <div class="col-md-10">
					<h3>Contact Me - <span class="text-warning">Kresna</span> Adhi Pramana</h3>
					<p>
						A Young Software Engineer.
					</p>
					<p>
						<b>Phone :</b> +62 812 3020 0808<br>
						<b>E-mail :</b> kresnaadhipramana5758@gmail.com
					</p>
                    <p>
                        If you have any question, please let me know.<br>
						I would love to hear any word from you.
                    </p>
                </div>
            </div>

            <hr class="clearfix w-100 d-md-none pb-3">

            <div class="col-md-6 mb-md-0 mb-3 d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <form action="" method="POST">
                                <input type="text" name="inputName" class="form-control my-4" id="inputName" placeholder="Your Name" required>
                                <input type="email" name="inputEmail" class="form-control my-4" id="inputEmail" placeholder="Your Email" required>
                                <input type="text" name="inputSubject" class="form-control my-4" id="inputSubject" placeholder="Subject" required>
                                <textarea name="inputMessage" class="form-control my-4" rows="5" id="inputMessage" placeholder="Write A Message" required></textarea>
                                <button type="submit" name="email_submit" class="btn btn-warning mb-2 col">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	<!-- Footer -->
    <footer class="page-footer font-small teal pt-4">
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
