 <?php
 require_once __DIR__ . '/database/index_controller.php';
 include("include/header.php");
echo $_REQUEST['nygoption'];
$editactive="N";
$editcut="N";
$edittransfer="N";
$editload="N";
$editsew="N";
$editwait="N";
$editpack="N";
$editfg="N";
$nygoption=$_REQUEST['nygoption'];
// echo $sql;
 session_start();
 include("include/menu.php");
 include("include/top.php");

 if(isset($_REQUEST['add'])){
	if($_REQUEST['add']=='n'){
		?>
		<script>
		Swal.fire({
		position: 'top-end',
		icon: 'error',
		title: 'employee code cannot be the same',
		showConfirmButton: false,
		timer: 1500
		})
		</script>
		<?php
	}
}
 ?>
<section class="content">
	<div class="container-fluid">
		<div class="card card-success">
			<div class="card-header">
				<h3 class="card-title">Adding user to <?php echo $nygoption; ?></h3>
			</div>
			<div class="card-body">
					<h3>Employee Code</h3>
					<form method="POST" action="addconfirm.php">
						<input class="form-control " type="text" placeholder="Emp code"name="editempcode" id="edit_emp_code" value="" required>
						<br>
						<h3>Employee Name</h3>
						<input class="form-control" type="text" placeholder="Emp name" name="editempname" id="edit_emp_name" value="" required>
						<br>
						<h3>Employee Password</h3>
						<input class="form-control " type="text" placeholder="Password" name="editpassword" id="edit_password" value="" required>
						<div class="container">
							<div class="row">
								<div class="custom-control custom-checkbox col-1">
									<input class="custom-control-input custom-control-input-danger" type="checkbox" name="editactive" id="active" value="Y">
									<label for="active" class="custom-control-label">Active</label>
								</div>
								<div class="custom-control custom-checkbox col-1">
									<input class="custom-control-input" type="checkbox" name="editcut" id="cut" value="Y">
									<label for="cut" class="custom-control-label">Cut</label>
								</div>
								<div class="custom-control custom-checkbox col-1">
									<input class="custom-control-input" type="checkbox" name="edittransfer" id="transfer" value="Y">
									<label for="transfer" class="custom-control-label">Transfer</label>
								</div>
								<div class="custom-control custom-checkbox col-1">
									<input class="custom-control-input" type="checkbox" name="editload" id="load" value="Y">
									<label for="load" class="custom-control-label">Load</label>
								</div>
								<div class="custom-control custom-checkbox col-1">
									<input class="custom-control-input" type="checkbox" name="editsew" id="sew" value="Y">
									<label for="sew" class="custom-control-label">Sew</label>
								</div>
								<div class="custom-control custom-checkbox col-1">
									<input class="custom-control-input" type="checkbox" name="editwait" id="wait" value="Y">
									<label for="wait" class="custom-control-label">Wait</label>
								</div>
								<div class="custom-control custom-checkbox col-1">
									<input class="custom-control-input" type="checkbox" name="editpack" id="pack" value="Y">
									<label for="pack" class="custom-control-label">Pack</label>
								</div>
								<div class="custom-control custom-checkbox col-1">
									<input class="custom-control-input" type="checkbox" name="editfg" id="fg" value="Y">
									<label for="fg" class="custom-control-label">FG</label>
								</div>
							</div>
						</div>
						<input hidden="<?php echo $nyg_option ?>" name="nyg_option" value="<?php echo $nygoption ?>">
						<div class="col-4">
							<button type="submit" id="save" class="btn btn-success">save</button>
							<a class="btn btn-secondary" href=<?php echo "index.php?nyg_option="."$nygoption" ;?>>cancel</a>
						</div>
					</form>
			</div>
		</div>
	</div>
</section>
