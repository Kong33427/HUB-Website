

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
                <h2>Create new link</span></h2>
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

              <form id="contact-form" class="row contact-form no-gutter" action="#" method="post">
              <div class="col-xs-12 col-sm-12">
                  <div class="input-field">
                    <span class="input-icon" id="subject"><i class="tf-linegraph"></i></span>
                    <input type="text" style="background-color:whitesmoke; color:black;" class="form-control" name="bu" placeholder="BU" required>
                  </div>
                </div> <!-- ./col- -->
                <div class="col-xs-12 col-sm-12">
                  <div class="input-field name">
                    <span class="input-icon" id="name"><i class="tf-megaphone"></i></span>
                    <input type="text" class="form-control"  style="background-color:whitesmoke; color:black;" name="category" placeholder="Category" required>
                  </div>
                </div> <!-- ./col- -->
                <div class="col-xs-12 col-sm-6">
                  <div class="input-field name">
                    <span class="input-icon" id="name"><i class="tf-ion-wifi"></i></span>
                    <input type="text" class="form-control" style="background-color:whitesmoke; color:black;"style="background-color:aqua;" name="name" placeholder="Link name" required>
                  </div>
                </div> <!-- ./col- -->
                <div class="col-xs-12 col-sm-6">
                  <div class="input-field email">
                    <span class="input-icon" id="email"><i class="tf-document3"></i></span>
                    <input type="text" class="form-control"  style="background-color:whitesmoke; color:black;" name="link" placeholder="Link" required>
                  </div>
                </div> <!-- ./col- -->
                <div class="col-xs-12 col-sm-12">
                  <div class="input-field message">
                    <span class="input-icon"><i class="tf-pencil2"></i></span>
                    <input id="message" class="form-control"
                    name="description" placeholder="Description"  style="background-color:whitesmoke; color:black;" required></textarea>
                  </div>
                </div> <!-- ./col- -->
                <div class="col-xs-12 col-sm-12">
                  <div class="input-field">
                    <span class="btn-border">
                      <button type="submit" class="btn btn-primary btn-custom-border text-uppercase">Create new link</button>
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
              <span class="prev-page"><a href="testimonials.html" class="link">&larr; Prev Page</a></span>
              <span class="copyright">Copyright &copy; 2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a>.</span>
            </div>
          </div>
          <!-- /.page-nav -->
        </nav>
        
        <!-- /.container -->

      </div> <!-- /.pt-tablecell -->
    </div> <!-- /.pt-table -->
  </main> <!-- /.site-wrapper -->
  
  <?php
var_dump($_POST['bu']);
var_dump($_POST['category']);
var_dump($_POST['name']);
var_dump($_POST['link']);
var_dump($_POST['description']);
var_dump($_POST['location']);
$bu=$_POST['bu'];
$category=strtoupper($_POST['category']);
$link=$_POST['link'];
$link_name=$_POST['name'];
$description=$_POST['description'];
if($bu != ''){
include (__DIR__. "/database/vendor/adodb/adodb-php/adodb.inc.php");
          $dns = "(DESCRIPTION=
            (ADDRESS=
               (PROTOCOL=TCP)
                           (HOST=172.16.7.36)
                           (PORT=1521)
                        )
                        (CONNECT_DATA=
                          (SERVER=dedicated)
              (SERVICE_NAME=NYTG)
                        )
                  )
            ";

          $dbUser = "WEBCONTROL";
          $dbPass = "test";

          $conn = NewADOConnection('oci8');
          $conn->setCharset('utf8');
          $conn->setConnectionParameter('session_mode', OCI_SYSDBA);

          try {
            if (!$conn->connect($dns, $dbUser, $dbPass)) {
              echo json_encode([
                  'status' => false,
                  'msg' => 'Connect database fail.',
                  'data' => []
                ]); exit;
            }
          } catch (Exception $e) {
            echo json_encode([
                'status' => false,
                'msg' => $e->getMessage(),
                'data' => []
              ]); exit;
          } finally {
            // unset($dns, $dbUser, $dbPass);
          }

          //prepare execute
          $sql = "INSERT INTO HUB_LINK(BU, CATEGORY, LINK, NAME, DETAIL)";
          $sql .= " VALUES ('".$bu."','".$category."','".$link."','".$link_name."','".$description."')";
          $stmt = $conn->prepare($sql);
          //execute
          $result = $conn->Execute($stmt);
          if (!$result) {
            var_dump($conn->errorMsg());
          }
          // //get row
          $row = $result->FetchRow();
          // var_dump($row);
          
          $conn->close();
        }
?>
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