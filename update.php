<?php
  $editempcode= isset($_POST['editempcode']) ? $_POST['editempcode'] : 'No data';
  $editempname= isset($_POST['editempname']) ? $_POST['editempname'] : 'No data';
  $editpassword= isset($_POST['editpassword']) ? $_POST['editpassword'] : 'No data';
  $editactive= isset($_POST['editactive']) ? $_POST['editactive'] : 'N';
  $editcut= isset($_POST['editcut']) ? $_POST['editcut'] : 'N';
  $edittransfer= isset($_POST['edittransfer']) ? $_POST['edittransfer'] : 'N';
  $editload= isset($_POST['editload']) ? $_POST['editload'] : 'N';
  $editsew= isset($_POST['editsew']) ? $_POST['editsew'] : 'N';
  $editwait= isset($_POST['editwait']) ? $_POST['editwait'] : 'N';
  $editpack= isset($_POST['editpack']) ? $_POST['editpack'] : 'N';
  $editfg= isset($_POST['editfg']) ? $_POST['editfg'] : 'N';
  // $nyg_option= isset($_POST['nyg_option']) ? $_POST['nyg_option'] : 'N';
  $nyg_option= $_POST['nyg_option'];
  $oldempcode= isset($_POST['oldempcode']) ? $_POST['oldempcode'] : 'N';


  // echo $editempcode;
  // echo $editempname;
  // echo $editpassword;
  echo $editactive;
  echo $editcut;
  echo $edittransfer;
  echo $editload;
  echo $editsew;
  echo $editwait;
  echo $editpack;
  echo $editfg;
  echo $nyg_option;
  echo $oldempcode;
include (__DIR__. "/database/vendor/adodb/adodb-php/adodb.inc.php");
    if (isset($nyg_option)){
      include("include/nygcase.php");
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
            // unset($dns, $dbUser, $dbPass);
          }
          $sql = "UPDATE DB_USER SET ";
          $sql .= " EMP_CODE= '".$editempcode."'";
          $sql .= ", EMP_NAME= '".$editempname."'";
          $sql .= ", PASSWORD= '".$editpassword."'";
          $sql .= ", ACTIVE = '".$editactive."'";
          $sql .= ", TRANSFER= '".$edittransfer."'";
          $sql .= ", LOAD= '".$editload."'";
          $sql .= ", SEW= '".$editsew."'";
          $sql .= ", PACK= '".$editpack."'";
          $sql .= ", FG= '".$editfg."'";
          $sql .= ", WAIT_FN= '".$editwait."'";
          $sql .= ", CUT= '".$editcut."'";
          $sql .= " WHERE EMP_CODE= '".$oldempcode."'";
          echo $sql;
        $stmt = $conn->prepare($sql);
        //execute
        $result = $conn->Execute($stmt);
        header("location:edit.php?emp_code="."$editempcode"." && "."nyg_option=$nyg_option"."&& success=y");
  }
 ?>