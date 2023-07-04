<?php

require_once __DIR__ . '/connect.php';
require_once __DIR__ . '/const_sys.php';

class PdaWcsPermissionUserCtrl
{

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
class PdaWcsPermissionUserCtrlCategory
{

	function index() {
		//SQL code
		$BU=$_GET['BU'];
		$connect = new Connect();
		$conn = $connect->getConnect('oci');

		$sql = 'SELECT *';
		$sql .= ' FROM HUB_LINK';
		$sql .= " WHERE BU='".$BU."'";
		// var_dump($sql);
		//prepare execute
		$stmt = $conn->prepare($sql);
		//execute
		$result = $conn->Execute($stmt);
		//get row
		$row=$result->getAll();
		return $row;
	}
}
class PdaWcsPermissionUserCtrlLink
{

	function index() {
		//SQL code
		$category=$_GET['CATEGORY'];
		$BU=$_GET['BU'];
		$connect = new Connect();
		$conn = $connect->getConnect('oci');

		$sql = 'SELECT *';
		$sql .= ' FROM HUB_LINK';
		$sql .= " WHERE CATEGORY='".$category."'";
		$sql .= " AND BU='".$BU."'";
		// var_dump($sql);
		//prepare execute
		$stmt = $conn->prepare($sql);
		//execute
		$result = $conn->Execute($stmt);
		//get row
		$row=$result->getAll();
		return $row;

	}

}

