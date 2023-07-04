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
    $cate_icon[$value["CATEGORY"]][] = $value["BU_ICON"];
}
// echo '<pre>';
// var_dump($cate_icon);
// echo '</pre>';
foreach($department as $keys => $values){
    echo $values.'-'.count($link[$values])."<br>";
    foreach($link[$values] as $row => $data){
        echo $data.'-'.$name[$values][$row]."<br>";
    }
}
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Business Frontpage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">HUB website</h1>
                            <p class="lead text-white-50 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5 border-bottom" id="features">
            <div class="my-2 mx-5">
                <div class="row gx-5">
                    <?php
                foreach($department as $keys => $values){
                    echo '<div class="col-lg-3  my-3 rounded border-primary">';
                    echo '<a href="link.php?CATEGORY='.$values.'">';
                    echo '<div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">'.$cate_icon[$values][0].'</div>';
                    echo '<h2 class="h4 fw-bolder">'.$values.'</h2>';
                    echo '</a>';
                    echo '</div>';
                }
                    ?>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
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
