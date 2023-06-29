<?php
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



        switch ($_REQUEST['nyg_option']) {
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
        ?>