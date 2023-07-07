<?php
session_start();
        if(isset($_REQUEST['username'])){
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

          
          $username = $_POST['username'];
          $password = $_POST['password'];

          //prepare execute
          $sql = "SELECT EMP_ID, IS_ADMIN FROM HUB_USER";
          $sql .= " WHERE USERNAME = '".$username."'";
          $sql .= " AND PASSWORD_HUB ='".$password."'";
          $stmt = $conn->prepare($sql);
          //execute
          $result = $conn->Execute($stmt);
          if (!$result) {
            echo "string";
            var_dump($conn->errorMsg());
          }

          // //get row
          $row = $result->FetchRow();
          // var_dump($row);
          
          $conn->close();
          if (isset($row)){
            if($row !=''){
            echo "correct";
            echo "<pre>";
            var_dump($row);
            echo "</pre>";
            $_SESSION["username"] = $row['EMP_ID'];
            $_SESSION["is_admin"] = $row['IS_ADMIN'];
            header ("Location:index.php");
          }else{
            echo "wrong username or password";
            header ("Location: login.php");
            };
          }else{};

        };
?>