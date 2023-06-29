<?php
$method = $_POST['method'];
$ou_code = $_POST['NYTG_OPTION'];
// require_once __DIR__ . '/index_controller.php';
require_once __DIR__ . '/connection.php';
// $conn = new PdaWcsPermissionUserCtrl();



if($method=="list_data"){
		$sql = 'SELECT ROWIDTOCHAR(ROWID) AS ID';
		$sql .= ', EMP_CODE';
		$sql .= ', EMP_NAME';
		$sql .= ', PASSWORD';
		$sql .= ", NVL(ACTIVE, 'N') as ACTIVE";
		$sql .= ", NVL(TRANSFER, 'N') as TRANSFER";
		$sql .= ", NVL(LOAD, 'N') as LOAD";
		$sql .= ", NVL(SEW, 'N') as SEW";
		$sql .= ", NVL(PACK, 'N') as PACK";
		$sql .= ", NVL(FG, 'N') as FG";
		$sql .= ", NVL(WAIT_FN, 'N') as WAIT_FN";
		$sql .= ", NVL(CUT, 'N') as CUT";
		$sql .= ' FROM DB_USER';
		//prepare execute
		$stmt = $conn->prepare($sql);
		//execute
		$result = $conn->Execute($stmt);
		//get row
		$data=$result->getAll();
		$rowdetect=$result->FetchRow();
	// $data= $conn->NYTG_GET_TABLE($NYTG_OPTION);
 	// print_r($data);
  ?> 
  <table id="NYTG_NUM" class="table table-bordered table-striped">
                    <tr>
                    <th>select</th>	
                    <th>ID</th>
                    <th>Emp code</th>
                    <th>Emp name(s)</th>
                    <th>Password</th>
                    <th>Active</th>
                    <th>Cut</th>
                    <th>Transfer</th>
                    <th>Load</th>
                    <th>Sew</th>
                    <th>Wait fn</th>
                    <th>Pack</th>
                    <th>Fg</th>
                    <th>Edit user</th>
                  </tr>

<?php
 	foreach ($data as $key => $value) {
 ?> 
 	<tr>
 		<td><input class="form-check-input" type="checkbox"><label class="form-check-label float-right">Checkbox</label></td>
        <td><?php echo $value['ID']; ?></td>
        <td><?php echo $value['EMP_CODE']; ?></td>
        <td><?php echo $value['EMP_NAME']; ?></td>
        <td><?php echo $value['PASSWORD']; ?></td>
        <td><?php echo $value['ACTIVE']; ?></td>
        <td><?php echo $value['CUT']; ?></td>
        <td><?php echo $value['TRANSFER']; ?></td>
        <td><?php echo $value['LOAD']; ?></td>
        <td><?php echo $value['SEW']; ?></td>
        <td><?php echo $value['WAIT_FN']; ?></td>
        <td><?php echo $value['PACK']; ?></td>
        <td><?php echo $value['FG']; ?></td>
        <td><button type="submit" class="btn btn-default">edit</button></td>

    </tr>
<?php
    }
?>
</table>
 <?php		
 	}
?>
<script>  
$(document).ready(function(){
    $('#NYTG_NUM').dataTable();
});
</script>