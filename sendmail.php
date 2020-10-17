<!DOCTYPE HTML>
<html lang="en">
    <head>
    <!--Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!--Favicons-->
    <link rel="shortcut icon" href="img/favicon.png">
    <!--Page Title-->
    <title>Raghib Mirza</title>

  <!-- Stylesheets -->

  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <!-- Awesome Fonts-->
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <!-- Magnific Popup-->
  <link rel="stylesheet" href="css/magnific-popup.css"/>
  <!--Main Styles Css-->
  <link rel="stylesheet" href="css/style.css"/>

  </head>
  <body>

  <!-- Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>
  <!-- Εnd Preloader -->
  
  <!-- header section start -->
  <header class="header-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-3">
          <!-- logo -->
          <div class="logo">
            <h2 class="site-logo">Raghib</h2>
          </div>
        </div>
        <div class="col-lg-8 col-md-9">
          <a href="docs/CV.pdf" class="btn header-btn"><span>CV</span></a>
          <!-- main-menu -->
          <nav class="main-menu" id="main-menu">
            <ul>
              <li><a class="selected" href="index.html">Home</a></li>
              <li><a href="index.html#about">About</a></li>
              <!-- <li><a href="#services">Services</a></li> -->
              <li><a href="index.html#works">Work</a></li>
              <!-- <li><a href="#blog">Blog</a></li> -->
              <li><a href="index.html#contact">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="nav-switch">
      <i class="fa fa-bars"></i>
    </div>
  </header>
  <!-- header section end -->

  <!-- intro section start -->
  <section class="intro-section bg-img text-center" id="home">
    <div class="bg-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="hero-content text-left">
              <h1 class="header-title mb-3">Email sent!</h1>
              <button href="index.html">Click here to return home</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- intro section end -->
  <!-- contact section end -->

  <!-- footer section start -->
  <footer class="footer-section text-center">
    <div class="container">
      <div class="social-links">
        <a href="https://www.linkedin.com/in/raghib-mirza-193894136"><span class="fa fa-linkedin"></span></a>
        <a href="https://www.instagram.com/raghib.mirza/"><span class="fa fa-instagram"></span></a>
        <a href="https://www.facebook.com/raghib.mirza.37"><span class="fa fa-facebook"></span></a>
        <a href="https://twitter.com/RaghibMrzFake"><span class="fa fa-twitter"></span></a>
        <a href="https://github.com/RaghibMrz"><span class="fa fa-github"></span></a>
      </div>
      <!-- Copyright -->
      <div class="copyright">Copyright 2020. All rights reserved</div>
    </div>
  </footer>
  <!-- footer section end -->

  <!-- Back to top button -->
    <a id="back-to-top" href="#"><i class="fa fa-chevron-up"></i></a>

  <!-- jQuery -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Mixitup js -->
  <script src="js/mixitup.min.js"></script>
  <!-- Magnific Popup js -->
  <script src="js/magnific-popup.min.js"></script>
  <!-- Typed js -->
  <script src="js/typed.min.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script>
</body>
</html>

<?php
  header('Content-Type: text/plain; charset=utf-8');

  if (isset($_POST['name']) && isset($_POST['email'])){
    $to      = 'raghib@hotmail.co.uk';
    $message =  $_POST('message');
    $email   =  $_POST['email'];
    $subject =  $_POST('subject');
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
  }
?>


    