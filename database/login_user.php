<?php
$ou_code = 'LOGIN';
require_once __DIR__ . '/connection.php';
// include ('/connection.php');
// $connect = new Connect();
// $conn = $connect->loginConnect(SYSTEM, 'NYG', 'oci');

// ============================================================================================
session_start();

$username = $_POST['username'];
$password = $_POST['password'];


if ($username ==''){
	echo '3';
}
if ($password ==''){
	echo '4';
}else{
//SQL code
$_sql = "SELECT EMP_CODE";
$_sql .= " FROM WEB_USER";
$_sql .= " WHERE USERNAME = '".$username."'";
$_sql .= " AND PASSWORD='".$password."'";
//prepare execute
$stmt = $conn->prepare($_sql);
//execute
$result = $conn->Execute($stmt);
//get row
$row=$result->FetchRow();

if($row == 0){
echo '2';
exit;
}else{
echo '1';

$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
$_SESSION["EMP_CODE"]=$row["EMP_CODE"];

}
}

?>
