<?php
session_start();
?>

<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Phantom - Bootstrap Portfolio Template</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Portfolio HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Html5 Portfolio Template v1.0">

  <!-- Essential Stylesheets -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Open+Sans:400,600,700,800">
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/animate.css">
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <link rel="stylesheet" href="plugins/themefisher-fonts/css/themefisher-fonts.min.css">  

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  
  <!-- Theme Stylesheet -->
  <link rel="stylesheet" href="#" id="color-changer">
  
  <!--Favicon-->
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>
<body><!-- set class="dark" on body tag for DARK-THEME -->

  <div class="preloader">
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
  </div>

  <div class="preview-wrapper">
    <div class="switcher-head">
      <span>Style Switcher</span>
      <div class="switcher-trigger tf-tools"></div>
    </div>

    <div class="switcher-body">
      <h4>Choose Color:</h4>
      <ul class="color-options list-none">
        <li class="c0" data-color="red" title="Default">Default</li>
        <li class="c1" data-color="blue" title="Red">Red</li>
        <li class="c2" data-color="green" title="Green">Green</li>
        <li class="c3" data-color="yellow" title="Blue">Blue</li>
      </ul>
    </div>
  </div>

  <main class="site-wrapper">
    <div class="pt-table">
      <div class="pt-tablecell page-contact relative">
        <!-- .close -->
        <a href="./" class="page-close"><i class="tf-ion-close"></i></a>
        <!-- /.close -->

        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
              <div class="page-title text-center">
                <h2>Get in <span class="primary">touch</span> <span class="title-bg">Contact</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                  laoreet dolore magna aliquam erat volutpat.</p>
              </div>
            </div>
          </div> <!-- /.row -->

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="section-title clear">
                <h3>Register new link</h3>
                <span class="bar-dark"></span>
                <span class="bar-primary"></span>
              </div>

              <form class="row contact-form no-gutter" action="loginback.php" method="post">
              <div class="col-xs-12 col-sm-12">
                  <div class="input-field">
                    <span class="input-icon" id="subject"><i class="tf-pricetags"></i></span>
                    <input type="text" class="form-control" id="username" name="username" placeholder="USERNAME" required="">
                  </div>
                </div> <!-- ./col- -->
                <div class="col-xs-12 col-sm-12">
                  <div class="input-field name">
                    <span class="input-icon" id="name"><i class="tf-profile-male"></i></span>
                    <input type="password" class="form-control" id="password" name="password" placeholder="PASSWORD" required="">
                  </div>
                </div> <!-- ./col- -->
                <div class="col-xs-12 col-sm-12">
                  <div class="input-field">
                    <span class="btn-border">
                      <button type="submit" class="btn btn-primary btn-custom-border text-uppercase">Login</button>
                    </span>
                  </div>
                  <div class="msg-success">Your Message was sent successfully</div>
                  <div class="msg-failed">Something went wrong, please try again later</div>
                </div> <!-- ./col- -->
              </form> <!-- /.row -->
            </div> <!-- /.col- -->
          </div> <!-- /.row -->
        </div> <!-- /.container -->

        <nav class="page-nav clear">
          <div class="container">
            <div class="flex flex-middle space-between">
            </div>
          </div>
          <!-- /.page-nav -->
        </nav>
        
        <!-- /.container -->

      </div> <!-- /.pt-tablecell -->
    </div> <!-- /.pt-table -->
  </main> <!-- /.site-wrapper -->
  
<!-- 
Essential Scripts
=====================================-->
<script src="plugins/jquery-2.2.4.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/jquery.nicescroll.min.js"></script>
<script src="plugins/isotope/isotope.pkgd.min.js"></script>
<script src="plugins/slick/slick.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>