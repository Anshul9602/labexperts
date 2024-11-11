<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Lab Experts</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/lab-fav.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">


<style>
  @media only screen and (max-width: 992px) {
   .Services
   {
    padding-left: 21px;
    color: #2c4964;
    line-height:42px;
   }
   .font-size
   {
    font-size:14px !important;
    color:#2c4964;
   }
}
.font-size
   {
    font-size:14px !important;
    color:#2c4964  !important;
   }
  .dropbtn {
 
  color: black;
  background:white;
  font-size: 13px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

/* .dropdown:hover .dropbtn {background-color: #3e8e41;} */
</style>
<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top ">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto: info@labexperts.ae"> info@labexperts.ae</a>
        <i class="bi bi-phone"></i> +97126270056
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> -->
        <a href=" https://www.facebook.com/profile.php?id=100091852252424" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> -->
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="mt-4">
    <div class="container d-flex align-items-center">

      <div class="row">
        <div class="col-6">
          <a href="<?php echo base_url() ?>">
            <img src="assets/img/lab-logo.png" alt="" style="max-width:60%">
          </a>
        </div>
      </div>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0 ">
        <ul>
          <li><a class="nav-link mt-1 " href="<?php echo base_url() ?>">Home</a></li>
          <li><a class="nav-link mt-1 " href="<?php echo base_url('Services') ?>">Scope of Services</a></li>
          <li><a class="nav-link mt-1 " href="<?php echo base_url('Aboutus') ?>">About</a></li>
          <!-- <li><a class="nav-link " href="<?php echo base_url('Resources') ?>">Resource</a></li> -->
 
<li>
<div class="Services " href="<?php echo base_url('') ?>">
  <div class="dropdown">
  <button class="dropbtn nav-link font-size" style="color: var(--bs-nav-link-hover-color);">E-Services</button>
  <div class="dropdown-content">
  <a class="nav-link " href="http://anglepro.prosoft.org.in:8877/ords/f?p=2024">E-Registration</a>
  <a class="nav-link " href="http://anglepro.prosoft.org.in:8877/ords/f?p=2024">E-Reporting</a>
  </div>
</div>


</div>
 
</li>


           
          <li><a class="nav-link mt-1 " href="<?php echo base_url('News') ?>">News</a></li>
          <li><a class="nav-link mt-1" href="<?php echo base_url('Careers') ?>">Careers</a></li>
          <li><a class="nav-link mt-1 " href="<?php echo base_url('Contactus') ?>">Contact Us</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="<?php echo base_url('Contactus') ?>" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
    <script>
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        //>=, not <=
        if (scroll >= 150) {
          //clearHeader, not clearheader - caps H
          $("#header").addClass("fixed-top");
          $("#header").removeClass("mt-4");
        } else {
          $("#header").removeClass("fixed-top");
          $("#header").addClass("mt-4");
         
        }
      })
    </script>
  </header><!-- End Header -->