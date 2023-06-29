  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <div class="content-header navbar-white">
      <div class="container-fluid " >
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left" style="padding-top: 5px;">
              <li class="breadcrumb-item active">Welcome <?php echo $_SESSION["username"]; ?> </li>
            </ol>
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-user fa-lg"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="body">
                    <a href="logout.php" class="d-block float-sm-right" style="margin-right:20px;">
                  Logout
                  <span class="float-right text-sm"><i class="fa fa-key" style="margin-left:10px;"></i></span>
                    </a>
                  </div>
                </div>
               </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- <a href="logout.php" class="d-block">logout</a> -->