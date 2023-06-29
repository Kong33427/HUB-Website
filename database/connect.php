<?php 
// namespace App;
// require_once __DIR__ . '/../setting.php';
// require_once __DIR__ . '/../lib/adodb/adodb.inc.php';
require_once __DIR__. "/vendor/adodb/adodb-php/adodb.inc.php";
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/const_sys.php';

/**
 * 
 */
class Connect
{
	private $system; // system
	private $type; // oci or pdo
	private $ou_code; // location

	private $oracle_dbHost;
	private $oracle_dbUser;
	private $oracle_dbPass;
	private $oracle_dbName;

	private $mysql_dbHost;
	private $mysql_dbUser;
	private $mysql_dbPass;
	private $mysql_dbName;

	function setConfig()
	{
						$this->oracle_dbHost = USER_IP;
						$this->oracle_dbUser = USER_USERNAME;
						$this->oracle_dbPass = USER_PASSWORD;
						$this->oracle_dbName = USER_SID;
						$this->mysql_dbHost = '';
						$this->mysql_dbUser = '';
						$this->mysql_dbPass = '';
						$this->mysql_dbName = '';
	}

	function getConnect($type)
	{
		// if (ENVIRONMENT == 'development') {
		// 	$this->ou_code = '';
		// }
		$this->type = $type;
		$this->setConfig();
		$dns = '';
		$dbUser = '';
		$dbPass = '';
		$conn = '';
		switch ($this->type) {
			case 'oci':
				$dns = "
				(DESCRIPTION =
				    (ADDRESS_LIST =
				      (ADDRESS = (PROTOCOL = TCP)(HOST = ".$this->oracle_dbHost.")(PORT = 1521))
				    )
				    (CONNECT_DATA =
				      (SID = '".$this->oracle_dbName."')
				    )
				  )
				";
				$dbUser = $this->oracle_dbUser;
				$dbPass = $this->oracle_dbPass;
				$conn = NewADOConnection('oci8');
				$conn->setConnectionParameter('session_mode', OCI_SYSDBA);
				break;

			case 'mysql':
				$dns = "mysql:host=".$this->mysql_dbHost.";dbname=".$this->mysql_dbName.";charset=utf8mb4;";
				$dbUser = $this->mysql_dbUser;
				$dbPass = $this->mysql_dbPass;
				$conn = NewADOConnection('pdo');
				break;

			default:
				echo json_encode(['status' => false, 'msg' => 'Not found type database.']); exit;
				break;
		}
		
		$conn->setCharset('utf8');
		$conn->setFetchMode(ADODB_FETCH_ASSOC);

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
			unset($dns, $dbUser, $dbPass);
		}


		return $conn;
	}
}
?>

