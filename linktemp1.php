<!DOCTYPE html>
<?php
require_once __DIR__ . '/database/index_controller.php';
$conn = new PdaWcsPermissionUserCtrlLink();

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
    $detail[$value["CATEGORY"]][] = $value["DETAIL"];
}
// echo '<pre>';
// var_dump($name);
// echo '</pre>';
// foreach($department as $keys => $values){
//     echo $values.'-'.count($link[$values])."<br>";
//     foreach($link[$values] as $row => $data){
//         echo $data.'-'.$name[$values][$row]."<br>";
//     }
// }
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
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
                    echo '<div class="col-lg-3  my-3 rounded">';
                    echo '<div class="card py-4 h-100 px-3">';
                    echo '<h2 class="h4 fw-bolder"><u>'.$values.'</u></h2>';
                    foreach($link[$values] as $row => $data){
                        echo '<a class="text-decoration-none" href="'.$data.'"><i class="bi bi-arrow-right">'.$name[$values][$row].'</i></a><br>';
                    }
                    echo '</div>';
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
