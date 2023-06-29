 <?php
 require_once __DIR__ . '/database/index_controller.php';
 include("include/header.php");

 ?>
 <body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
</div>
</body>

<?php
include("include/sessioncheck.php");
include("include/menu.php");
include("include/top.php");
  // echo $_GET['emp_code'];
  $uemp_code=$_GET['emp_code'];
  // echo $_GET['nyg_option'];
  $nyg_option=$_GET['nyg_option'];

    if (isset($nyg_option)){
		include("include/nygcase.php");
        // echo $ip;
        // echo $sid;
        // echo $nytguser;
        // echo $nytgpass;


        $sql = "SELECT ROWIDTOCHAR(ROWID) AS ID";
        $sql .= ", EMP_CODE";
        $sql .= ", EMP_NAME";
        $sql .= ", PASSWORD";
        $sql .= ", NVL(ACTIVE, 'N') as ACTIVE";
        $sql .= ", NVL(TRANSFER, 'N') as TRANSFER";
        $sql .= ", NVL(LOAD, 'N') as LOAD";
        $sql .= ", NVL(SEW, 'N') as SEW";
        $sql .= ", NVL(PACK, 'N') as PACK";
        $sql .= ", NVL(FG, 'N') as FG";
        $sql .= ", NVL(WAIT_FN, 'N') as WAIT_FN";
        $sql .= ", NVL(CUT, 'N') as CUT";
        $sql .= " FROM DB_USER";
        $sql .= " WHERE EMP_CODE='" .trim($uemp_code). "'";
        //prepare execute
        $stmt = $conn->prepare($sql);
        //execute
        $result = $conn->Execute($stmt);
        //get row
        $row=$result->fetchRow();
        // var_dump($row);
        $temp=$row;
       }
       if(isset($_REQUEST['success'])){
        ?>
        <script>
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Your work has been saved',
          showConfirmButton: false,
          timer: 1500
        })
        </script>
        <?php
       }

 ?>
<section class="content">
  <div class="container-fluid">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Edit user</h3>
      </div>
      <div class="card-body">
        <h3>Employee Code</h3>
        <form method="POST" action="update.php" id="editform">
          <input class="form-control " type="text" placeholder="Emp code"name="editempcode" id="edit_emp_code" value="<?php echo $row['EMP_CODE'];?>" required>
          <br>
          <h3>Employee Name</h3>
          <input class="form-control" type="text" placeholder="Emp name" name="editempname" id="edit_emp_name" value="<?php echo $row['EMP_NAME'];?>" required>
          <br>
          <h3>Employee Password</h3>
          <input class="form-control " type="text" placeholder="Password" name="editpassword" id="edit_password" value="<?php echo $row['PASSWORD'];?>" required>
          <div class="custom-control custom-checkbox col-1">
            <input class="custom-control-input custom-control-input-danger" type="checkbox" name="editactive" id="active"  <?php echo $row['ACTIVE']=='Y' ? 'checked' : ''; ?> value="Y">
            <label for="active" class="custom-control-label">Active</label>
          </div>
          <div class="container">
                <div class="row">
          <div class="custom-control custom-checkbox col-1" >
            <input class="custom-control-input" type="checkbox" name="editcut" id="cut"  <?php echo $row['CUT']=='Y' ? 'checked' : ''; ?> value="Y">
            <label for="cut" class="custom-control-label">Cut</label>
          </div>
          <div class="custom-control custom-checkbox col-1">
            <input class="custom-control-input" type="checkbox" name="edittransfer" id="transfer"  <?php echo $row['TRANSFER']=='Y' ? 'checked' : ''; ?> value="Y">
            <label for="transfer" class="custom-control-label">Transfer</label>
          </div>
          <div class="custom-control custom-checkbox col-1">
            <input class="custom-control-input" type="checkbox" name="editload" id="load"  <?php echo $row['LOAD']=='Y' ? 'checked' : ''; ?> value="Y">
            <label for="load" class="custom-control-label">Load</label>
          </div>
          <div class="custom-control custom-checkbox col-1">
            <input class="custom-control-input" type="checkbox" name="editsew" id="sew"  <?php echo $row['SEW']=='Y' ? 'checked' : ''; ?> value="Y">
            <label for="sew" class="custom-control-label">Sew</label>
          </div>
          <div class="custom-control custom-checkbox col-1">
            <input class="custom-control-input" type="checkbox" name="editwait" id="wait"  <?php echo $row['WAIT_FN']=='Y' ? 'checked' : ''; ?> value="Y">
            <label for="wait" class="custom-control-label">Wait</label>
          </div>
          <div class="custom-control custom-checkbox col-1">
            <input class="custom-control-input" type="checkbox" name="editpack" id="pack"  <?php echo $row['PACK']=='Y' ? 'checked' : ''; ?> value="Y">
            <label for="pack" class="custom-control-label">Pack</label>
          </div>
          <div class="custom-control custom-checkbox col-1">
            <input class="custom-control-input" type="checkbox" name="editfg" id="fg"  <?php echo $row['FG']=='Y' ? 'checked' : ''; ?> value="Y">
            <label for="fg" class="custom-control-label">FG</label>
          </div>
          </div>
          </div>
          <input hidden="<?php echo $nyg_option ?>" name="nyg_option" value="<?php echo $nyg_option ?>">
          <input hidden="<?php echo $row['EMP_CODE'] ?>" name="oldempcode" value="<?php echo $row['EMP_CODE'] ?>">
          <div class="col-4">
                  <button type="submit" id="save" class="btn btn-success">save</button>
                  <a class="btn btn-secondary" href=<?php echo "index.php?nyg_option="."$nyg_option" ;?>>cancel</a>
              </div>
              </div>
        </form>
      </div>
    </div>
  </div>
</section>
<script>
</script>
<!-- ========================================================================================= -->
