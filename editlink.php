<!DOCTYPE html>
<?php
require_once __DIR__ . '/database/index_controller.php';
$conn = new PdaWcsPermissionUserCtrl();

$row=array();
$row=$conn->index();
// echo '<pre>';
// var_dump($row);
// echo '</pre>';
// echo $row[0]["CATEGORY"];
foreach($row as $key => $value){
  $department[$value["CATEGORY"]] = $value["CATEGORY"];
  $link[$value["CATEGORY"]][] = $value["LINK"];
  $name[$value["CATEGORY"]][] = $value["NAME"];
}
echo '<pre>';
var_dump($name);
echo '</pre>';
foreach($department as $keys => $values){
    echo $values.'-'.count($link[$values])."<br>";
    foreach($link[$values] as $row => $data){
        echo $data.'-'.$name[$values][$row]."<br>";
    }
}
?>
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
    <div class="pt-tablecell page-home relative"  style="background-image: url('assets/img/background.jpg'); background-repeat: no-repeat;  background-size: cover;">
    <div class="overlay"></div>
    <!-- .close -->
      <a href="./" class="page-close"><i class="tf-ion-close"></i></a>
      <!-- /.close -->

      <div class="container">
        <div class="row">
          <div class="col-xs-12  ">
            <div class="page-title text-center">
            <?php
            echo '<h2>'.$_GET['CATEGORY'].'<span class="title-bg" style="font-size:100px;">Department</span></h2>';
            ?>
            </div>
          </div>
        </div> <!-- /.row -->

        <div class="row">
          <div class="col-xs-12">
            <div class="history-block">
              <div class="section-title light clear">
                <h3>Links</h3>
              </div>
              <!-- /.section-title -->
              <div class="history-scroller">
              <?php
              foreach($department as $keys => $values){
                foreach($link[$values] as $row => $data){
                  echo '<a class="text-decoration-none" href="'.$data.'">';
                  echo  '<div class="history-item">';
                  echo  '<div class="history-icon">';
                  echo    '<span class="history-hex"></span>';
                  echo    '<i class="tf-documents5"></i>';
                  echo  '</div>';
                  echo ' <div class="history-text">';
                  echo    '<h5>'.$name[$values][$row].'</h5>';
                  echo    '<span>'.$detail[$values][$row].'</span>';
                  echo  '</div>';
                  echo '</div>';
                  echo '</a>';
                }
              }
              ?>
                <!-- /.history-item -->
              </div>
            </div> <!-- /.history-block -->
          </div> <!-- /.col -->
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