<?php
session_start();
require_once __DIR__ . '/database/index_controller.php';
$conn = new PdaWcsPermissionUserCtrl();

$row=array();
$row=$conn->index();
// echo '<pre>';
// var_dump($row);
// echo '</pre>';
// echo $row[0]["CATEGORY"];
foreach($row as $key => $value){
    $department[$value["BU"]] = $value["BU"];
    $bu_icon[$value["BU"]][] = $value["BU_ICON"];
}
// echo '<pre>';
// var_dump($cate_icon);
// echo '</pre>';
// foreach($department as $keys => $values){
//     echo $values."<br>";
//     foreach($bu_icon[$values] as $row => $data){
//         echo $bu_icon[$values][$row]."<br>";
//     }
// }
?>

<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Phantom - Bootstrap Portfolio Template</title>
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Portfolio HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Html5 Portfolio Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="phantom" />

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
<body id="page-top" style="background-image: url('assets/img/background.jpg'); background-repeat: no-repeat;  background-size: cover;">
</div>
  <div class="preloader">
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
  </div>
  <div class="row">
<?php
if ($_SESSION["is_admin"] == 'Y'){
echo '<a href="add.php"><div type="button" class="btn btn-primary btn-custom-border text-uppercase col-md-3" >Create new link</div></a>';
echo '<a href="logout.php"><button class="btn btn-primary btn-custom-border text-uppercase col-md-2 col-md-offset-7" >logout</button></a>';
}else{
  echo '<a href="logout.php"><button class="btn btn-primary btn-custom-border text-uppercase col-md-2 col-md-offset-10" >logout</button></a>';
}

?>
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
    <div class="pt-tablecell page-home relative" style="background-image: url('assets/img/background.jpg'); background-repeat: no-repeat;  background-size: cover;">
      <div class="overlay"></div>

      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
            <div class="page-title home text-center">
            <h2>Nanyang <span class="primary">Textile</span> <span class="title-bg" style="left: -85px;">Nanyang</span></h2>
              <p>HUB center</p>
            </div>

            <div class="container clear">
            <div class="row gx-5">
            <?php
                foreach($department as $keys => $values){
            echo  '<div class="hexagon-item col-lg-3">';
            echo    '<div class="hex-item">';
            echo  '<div></div>';
            echo  '<div></div>';
            echo  '<div></div>';
            echo '</div>';
            echo '<div class="hex-item">';
            echo     ' <div></div>';
            echo      '<div></div>';
            echo      '<div></div>';
            echo    '</div>';
            echo    '<a href="category.php?BU='.$values.'" class="hex-content">';
            echo       '<span class="hex-content-inner">';
            echo        '<span class="icon" style="margin-top:-40px;" >';
            // echo        '<span class="'.$bu_icon[$values][0].'"></span>';
            echo '<img src="assets/img/bu/'.$bu_icon[$values][0].'.jpg" alt="" style="width: 80px; height: 80px;border-radius: 50%;  margin-top: 50px;">';
            echo        '</span>';
            echo        '<span class="title pt-3">'.$values.'</span>';
            echo     ' </span>';
            echo      '<svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"';
            echo        'xmlns="http://www.w3.org/2000/svg">';
            echo        '<path
                      d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z"
                      fill="#1e2530"></path>';
            echo      '</svg>';
            echo    '</a>';
            echo  '</div>';
        }
        ?>
        </div>

            </div> <!-- /.hexagon-menu -->

          </div> <!-- /.col-xs-12 -->

        </div> <!-- /.row -->
      </div> <!-- /.container -->

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
