<?php

    if(isset($_POST['check_list'])){
        foreach($_POST['check_list'] as $check) {
        echo $check;
    }}else{
        echo "error";
    };
// print_r($_POST["check_list"]);
// $checklist=implode(' , ', $_POST["check_list"]);
// echo $checklist;
// var_dump($_POST["check_list"])
$nyg_option=$_POST['nygoption'];
echo $nyg_option;
?>

<?php
// echo $_POST['cutcheck'];
// echo $_POST['transfercheck'];
// echo $_POST['loadcheck'];
// echo $_POST['sewcheck'];
// echo $_POST['waitcheck'];
// echo $_POST['packcheck'];
// echo $_POST['fgcheck'];
if(isset($_POST['check_list'])){
    include (__DIR__. "/database/vendor/adodb/adodb-php/adodb.inc.php");
        if (isset($nyg_option)){
            switch ($nyg_option) {
                case 'NYG1':
                    $ip='172.16.6.82';
                    $sid='NYTG';
                    $nytguser='nyg1';
                    $nytgpass='nyg1';
                    break;
                case 'NYG2':
                    $ip='172.16.6.84';
                    $sid='NYTG';
                    $nytguser='nyg_pho';
                    $nytgpass='nyg_pho';
                    break;
                case 'NYG3':
                    $ip='172.16.6.82';
                    $sid='NYTG';
                    $nytguser='nyg3';
                    $nytgpass='nyg3';
                    break;
                case 'NYG4':
                    $ip='172.16.6.86';
                    $sid='NYTG';
                    $nytguser='nyg4';
                    $nytgpass='nyg4';
                    break;
                case 'NYG5':
                    $ip='192.168.110.6';
                    $sid='ORCL';
                    $nytguser='nyg1';
                    $nytgpass='nyg1';
                    break;
                case 'NYG6':
                    $ip='192.168.101.34';
                    $sid='VN';
                    $nytguser='nyg1';
                    $nytgpass='nyg1';
                    break;            
                
                default:
                    # code...
                    break;
            }
            // echo $ip;
            // echo $sid;
            // echo $nytguser;
            // echo $nytgpass;

            $dns = "(DESCRIPTION=
                (ADDRESS=
                (PROTOCOL=TCP)
                            (HOST=$ip)
                            (PORT=1521)
                            )
                            (CONNECT_DATA=
                            (SERVER=dedicated)
                (SERVICE_NAME=$sid)
                            )
                    )
                ";

            $dbUser = $nytguser;
            $dbPass = $nytgpass;

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
                echo "done";
            }
        //     foreach($_POST['check_list'] as $check) {
	       //      if(isset($_POST['check_list'])){
	       //      $sql= "UPDATE DB_USER SET ";
	       //          if(isset($_POST['cutcheck']))
	       //          {
	       //          $sqlactive = " ACTIVE = '".$_POST['cutcheck']."'";
	       //          $array[]= $sqlactive;
	       //          }
	       //          if(isset($_POST['transfercheck']))
	       //          {
	       //          $sqltransfer = " TRANSFER= '".$_POST['transfercheck']."'";
	       //          $array[]= $sqltransfer;
	       //          }
	       //          if(isset($_POST['loadcheck']))
	       //          {
	       //          $sqlload = " LOAD= '".$_POST['loadcheck']."'";
	       //          $array[]= $sqlload;
	       //          }
	       //          if(isset($_POST['sewcheck']))
	       //          {
	       //          $sqlsew = " SEW= '".$_POST['sewcheck']."'";
	       //          $array[]= $sqlsew;
	       //          }
	       //          if(isset($_POST['packcheck']))
	       //          {
	       //          $sqlpack = " PACK= '".$_POST['packcheck']."'";
	       //          $array[]= $sqlpack;
	       //          }
	       //          if(isset($_POST['fgcheck']))
	       //          {
	       //          $sqlfg = " FG= '".$_POST['fgcheck']."'";
	       //          $array[]= $sqlfg;
	       //          }
	       //          if(isset($_POST['waitcheck']))
	       //          {
	       //          $sqlwait = " WAIT_FN= '".$_POST['waitcheck']."'";
	       //          $array[]= $sqlwait;
	       //          }
	       //          if(isset($_POST['cutcheck']))
	       //          {
	       //          $sqlcut = " CUT= '".$_POST['cutcheck']."'";
	       //          $array[]= $sqlcut;
	       //          }else{}
	       //          $sql .=implode(",",$array);
	       //          $sql .= " WHERE EMP_CODE= '".$check."'";

	       //          echo $sql;
	       //          // $stmt = $conn->prepare($sql);
	       //          // //execute
	       //          // $result = $conn->Execute($stmt);
	                
        //     };
        // }


	            if(isset($_POST['check_list'])){
	       
	                if(isset($_POST['cutcheck']))
	                {
	                $sqlcut = " CUT = '".$_POST['cutcheck']."'";
	                $array[]= $sqlcut;
	                }
	                if(isset($_POST['transfercheck']))
	                {
	                $sqltransfer = " TRANSFER= '".$_POST['transfercheck']."'";
	                $array[]= $sqltransfer;
	                }
	                if(isset($_POST['loadcheck']))
	                {
	                $sqlload = " LOAD= '".$_POST['loadcheck']."'";
	                $array[]= $sqlload;
	                }
	                if(isset($_POST['sewcheck']))
	                {
	                $sqlsew = " SEW= '".$_POST['sewcheck']."'";
	                $array[]= $sqlsew;
	                }
	                if(isset($_POST['packcheck']))
	                {
	                $sqlpack = " PACK= '".$_POST['packcheck']."'";
	                $array[]= $sqlpack;
	                }
	                if(isset($_POST['fgcheck']))
	                {
	                $sqlfg = " FG= '".$_POST['fgcheck']."'";
	                $array[]= $sqlfg;
	                }
	                if(isset($_POST['waitcheck']))
	                {
	                $sqlwait = " WAIT_FN= '".$_POST['waitcheck']."'";
	                $array[]= $sqlwait;
	                }
	                $sql="UPDATE DB_USER SET ";
	                $sql .=implode(",",$array);


	                foreach($_POST['check_list'] as $check) {
	                
	                $xsql = $sql. " WHERE EMP_CODE= '".$check."'";
	                echo $xsql;
	                echo "<br>";
	                $stmt = $conn->prepare($xsql);
	                //execute
	                $result = $conn->Execute($stmt);
	            }
	                
            };
        }
        header("location:index.php?nyg_option="."$nyg_option"."&&checkbox=y");
    }else{
        header("location:index.php?nyg_option="."$nyg_option"."&&checkbox=n");
    }
 ?>