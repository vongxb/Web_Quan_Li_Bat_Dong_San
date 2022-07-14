
<?php require '../../Controller/GroupCateManager.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN</title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<!-- <script src="../../plugins/datatable-click/datatableClick.js"></script> -->
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="admin.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN OF PUPPY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo "Hello admin " . $_SESSION['Username']; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
       
              <li class="nav-item">
                <a href="./Account.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Account</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Group Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Catetory.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Contact.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Contact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./CateImage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage CateImage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./News.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./NewImage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage NewImage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="chatmaneger.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Chat</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>GroupCate</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable of GroupCate</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a class="btn btn-app" href="#addgroupcate"><i class="fas fa-edit"></i>Add</a> 
                <a class="btn btn-app" href="#editgroupcate"><i class="fas fa-edit"></i>Edit</a> 
                <a class="btn btn-app" href="#deletegroupcate"><i class="fas fa-edit"></i>Delete</a> 
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>GroupCate ID</th>
                    <th>GroupCate Name</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>GroupCate ID</th>
                    <th>GroupCate Name</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-12">
            <section id="addgroupcate">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Add GroupCate</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <form   method='POST'> 
                      <div class="form-group">
                        <label>GroupCate Name</label> 
                        <div class="input-group mb-3"> 
                            <div class="input-group-prepend">  
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" id="GroupCateName" name="GroupCateName" placeholder="GroupCateName">
                        </div>
                      </div>
                        <input type='submit' class="button" name="addgroupcate" value='ADD' /> 
                    </form> 
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </section>
                <section id="editgroupcate">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Edit GroupCate</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <form   method='POST'> 
                        <div class="form-group">
                            <label>GroupCate ID</label> 
                            <div class="input-group mb-3"> 
                                <div class="input-group-prepend">  
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" readonly id="EditGroupCateID" name="EditGroupCateID" placeholder="GroupCateName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GroupCate Name</label> 
                            <div class="input-group mb-3"> 
                                <div class="input-group-prepend">  
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" id="EditGroupCateName" name="EditGroupCateName" placeholder="GroupCateName">
                            </div>
                        </div>
                            <input type='submit' class="button" name="editgroupcate" value='EDIT' /> 
                        </form> 
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                <!-- /.col -->
              </section>
              <section id="deletegroupcate">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Delete GroupCate</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <form   method='POST'> 
                            <div class="form-group">
                              <label>GroupCateName</label> 
                              <div class="input-group mb-3"> 
                                  <div class="input-group-prepend">  
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                  </div>
                                  <input type="text" class="form-control" readonly id="DeleteGroupCateName" name="DeleteGroupCateName" placeholder="GroupCateName">
                              </div>
                            </div>
                      
                              <input type='submit' class="button" name="deletegroupcate" value='DELETE' /> 
                          </form> 
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                <!-- /.col -->
              </section>
            </div>     
        </div><!--xoa tai day-->
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
      <!-- /.container-fluid -->
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-rc
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="../../Assets/JS/GroupCateData.js"></script>

</body>
</html>
