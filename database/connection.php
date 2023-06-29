<?php
//Include file libary adodb 
include (__DIR__. "/vendor/adodb/adodb-php/adodb.inc.php");
require_once __DIR__ . '/config.php';
//call clss ADODB 'OCI8'
$conn = NewADOConnection('oci8');
$conn->setConnectionParameter('session_mode', OCI_SYSDBA);
//SET Character to support thai langauage
$conn->setCharset('utf8');
//define value to use in connection
// $dbHost = "172.16.6.80";
// //SID
// $dbName = "NYTG";
// $dbUser = "WEBCONTROL";
// $dbPass = "WEBCONTROL";
switch ($ou_code) {
	case 'LOGIN':
		$dbHost = USER_IP;
		$dbUser = USER_USERNAME;
		$dbPass = USER_PASSWORD;
		$dbName = USER_SID;
		break;
		case 'NYG0':
						$dbHost = '';
						$dbUser = '';
						$dbPass = '';
						$dbName = '';
						break;

					case 'NYG1':
						$dbHost = NYG1_IP;
						$dbUser = NYG1_USERNAME;
						$dbPass = NYG1_PASSWORD;
						$dbName = NYG1_SID;
						break;

					case 'NYG2':
						$dbHost = NYG2_IP;
						$dbUser = NYG2_USERNAME;
						$dbPass = NYG2_PASSWORD;
						$dbName = NYG2_SID;
						break;

					case 'NYG3':
						$dbHost = NYG3_IP;
						$dbUser = NYG3_USERNAME;
						$dbPass = NYG3_PASSWORD;
						$dbName = NYG3_SID;
						break;

					case 'NYG4':
						$dbHost = NYG4_IP;
						$dbUser = NYG4_USERNAME;
						$dbPass = NYG4_PASSWORD;
						$dbName = NYG4_SID;
						break;

					case 'NYG5':
						$dbHost = NYG5_IP;
						$dbUser = NYG5_USERNAME;
						$dbPass = NYG5_PASSWORD;
						$dbName = NYG5_SID;
						break;

					case 'NYG6':
						$dbHost = NYG6_IP;
						$dbUser = NYG6_USERNAME;
						$dbPass = NYG6_PASSWORD;
						$dbName = NYG6_SID;
						break;
	default:
		echo 'Not found system login.'; exit;
	break;
}
//require only on oracle
$dns = "(DESCRIPTION=
    (ADDRESS=
       (PROTOCOL=TCP)
                   (HOST=".$dbHost.")
                   (PORT=1521)
                )
                (CONNECT_DATA=
                  (SERVER=dedicated)
      (SERVICE_NAME=".$dbName.")
                )
          )
    ";

 if (!$conn->connect($dns, $dbUser, $dbPass)) {
  $message = "Connect database fail.\\n";
  $message .= $conn->ErrorMsg();
  echo "<script>alert('$message');</script>";
  exit();
 }
?>