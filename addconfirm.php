<?php
$editempcode=isset($_POST['editempcode']) ? $_POST['editempcode'] : 'N';
$editempname=isset($_POST['editempname']) ? $_POST['editempname'] : 'N';
$editpassword=isset($_POST['editpassword']) ? $_POST['editpassword'] : 'N';
$editactive=isset($_POST['editactive']) ? $_POST['editactive'] : 'N';
$editcut=isset($_POST['editcut']) ? $_POST['editcut'] : 'N';
$edittransfer=isset($_POST['edittransfer']) ? $_POST['edittransfer'] : 'N';
$editload=isset($_POST['editload']) ? $_POST['editload'] : 'N';
$editsew=isset($_POST['editsew']) ? $_POST['editsew'] : 'N';
$editwait=isset($_POST['editwait']) ? $_POST['editwait'] : 'N';
$editpack=isset($_POST['editpack']) ? $_POST['editpack'] : 'N';
$editfg=isset($_POST['editfg']) ? $_POST['editfg'] : 'N';
$nyp='NYP';
$nyg_option=$_POST['nyg_option'];

// echo $_POST['nyg_option'];
    include (__DIR__. "/database/vendor/adodb/adodb-php/adodb.inc.php");
    if (isset($nyg_option)){
        include("include/nygcase.php");
        // echo $ip;
        // echo $sid;
        // echo $nytguser;
        // echo $nytgpass;
          $sqlcheck = "SELECT EMP_CODE FROM DB_USER";
          $sqlcheck .= " WHERE EMP_CODE = '".$editempcode."'";
          $stmtcheck = $conn->prepare($sqlcheck);
          //execute
          $resultcheck = $conn->Execute($stmtcheck);
          $row = $resultcheck->FetchRow();
          if($row ==''){
          $sql = "INSERT INTO DB_USER  ";
          $sql .= "(OU_CODE,EMP_CODE,EMP_NAME,PASSWORD,ACTIVE,TRANSFER,LOAD,SEW,PACK,FG,WAIT_FN,CUT)";
          $sql .= " VALUES ('".$nyp."','".$editempcode."','".$editempname."','".$editpassword."','".$editactive."','".$edittransfer."','".$editload."','".$editsew."','".$editpack."','".$editfg."','".$editwait."','".$editcut."')";
          // echo $sql;

        $stmt = $conn->prepare($sql);
        //execute
        $result = $conn->Execute($stmt);
    
          header("location:index.php?nyg_option="."$nyg_option"."&&add=y");
          }else{

          header("location:add.php?nygoption="."$nyg_option"."&&add=n");

          }
  }
?>
