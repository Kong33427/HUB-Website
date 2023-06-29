<?php

require_once __DIR__ . '/connect.php';
require_once __DIR__ . '/const_sys.php';

class PdaWcsPermissionUserCtrl
{
	// function index (Request $request, Response $response)
	// {
	// 	$response = $response->withJson([
	//     	'status' => true,
	//     	'msg' => 'Check PdaWcsPermissionUserCtrl.',
	//     	'data' => []
	//     ]);
	//     return $response;
	// }

	function index() {
		//SQL code
		$connect = new Connect();
		$conn = $connect->getConnect('oci');

		$sql = 'SELECT *';
		$sql .= ' FROM HUB_LINK';
		//prepare execute
		$stmt = $conn->prepare($sql);
		//execute
		$result = $conn->Execute($stmt);
		//get row
		$row=$result->getAll();
		return $row;

	}

}


?>