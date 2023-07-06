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
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top" style="background-image: url('assets/img/background.jpg'); background-repeat: no-repeat;  background-size: cover;">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead my-3" style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,255,255,1),rgba(255,0,0,0));">
        <div class="container text-center my-2">
                    <h2 class="section-heading text-uppercase text-mt-5"><u><b>HUB website</b></u></h2>
                    <h3 class="section-subheading text-muted mb-3">Nanyang Hub center</h3>
                </div>
        </header>    
    <!-- Services-->
        <section class="page-section" id="services" style="background-color:white; opacity: 0.8;">
            <div class="container mt-3">
                <div class="row text-center">
                    <?php
                foreach($department as $keys => $values){
                    echo '<div class="col-md-4 mt-3">';
                    echo '<a href="category.php?BU='.$values.'">';
                    echo  '<span class="fa-stack fa-4x">';
                    echo '<i class="fas fa-circle fa-stack-2x text-primary"></i>';
                    echo '<i class="fas '.$bu_icon[$values][0].' fa-stack-1x fa-inverse"></i>';
                    echo '</span>';
                    echo  '<h4 class="my-3">'.$values.'</h4>';
                    echo '</a>';
                    echo '</div>';
                }
                ?>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4" style="background-image: linear-gradient(to right, rgba(0,0,0,1), rgba(0,0,0,1),rgba(0,0,0,0));">
            <div class="container">
                    <div class="col-lg-4 text-lg-end align-center">
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>