
<?php require '../../Controller/AccountManager.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="./Assets/CSS/source-san.css">
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
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Account</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./GroupCate.php" class="nav-link">
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
            <h1>Account</h1>
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
                <h3 class="card-title">DataTable of account</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a class="btn btn-app" href="#addaccount"><i class="fas fa-edit"></i>Add</a> 
                <a class="btn btn-app" href="#editaccount"><i class="fas fa-edit"></i>Edit</a> 
                <a class="btn btn-app" href="#deleteaccount"><i class="fas fa-edit"></i>Delete</a> 
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Name</th>
                    <th>Birthday</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>PhoneNumber</th>
                    <th>Email</th>
                    <th>IDGroup</th>
                  </tr>
                  </thead>
                  <tbody>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Name</th>
                    <th>Birthday</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>PhoneNumber</th>
                    <th>Email</th>
                    <th>IDGroup</th>
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
            <section id="addaccount">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Add Account</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <form   method='POST'> 
                      <div class="form-group">
                        <label>Username</label> 
                        <div class="input-group mb-3"> 
                            <div class="input-group-prepend">  
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Password</label> 
                        <div class="input-group mb-3"> 
                            <div class="input-group-prepend">  
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="Password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Name</label> 
                        <div class="input-group mb-3"> 
                            <div class="input-group-prepend">  
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Birthday</label> 
                        <div class="input-group mb-3"> 
                            <div class="input-group-prepend">  
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                              <input type="date" id="birthday" name="birthday" class="form-control"
                                value = "<?php echo date("Y-m-d");?>",
                                min="1900-01-01" max="<?php echo date("Y-m-d");?>"/>
                          </div>
                      </div>
                      <div class="form-group">
                        <label>Gender</label> 
                        <div class="input-group mb-3"> 
                            <div class="input-group-prepend">  
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <select id="gender" class="form-control" name="gender">
                              <option value="M">Nam</option>
                              <option value="F">Nữ</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Address</label> 
                        <div class="input-group mb-3"> 
                            <div class="input-group-prepend">  
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>PhoneNumber</label> 
                        <div class="input-group mb-3"> 
                            <div class="input-group-prepend">  
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control"  id="phonenumber" name="phonenumber" placeholder="PhoneNumber">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Email</label> 
                        <div class="input-group mb-3"> 
                            <div class="input-group-prepend">  
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>IDGroup</label> 
                        <div class="input-group mb-3"> 
                            <div class="input-group-prepend">  
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <select id="idgroup" class="form-control" name="idgroup">
                              <option value="1">Admin</option>
                              <option value="2">User</option>
                            </select>
                        </div>
                      </div>
                        <input type='submit' class="button" name="addaccount" value='ADD' /> 
                    </form> 
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </section>
                <section id="editaccount">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Edit Account</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      <form   method='POST'> 
                        <div class="form-group">
                          <label>Username</label> 
                          <div class="input-group mb-3"> 
                              <div class="input-group-prepend">  
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                              </div>
                              <input type="text" readonly class="form-control" id="editusername" name="editusername" placeholder="Username" >
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Password</label> 
                          <div class="input-group mb-3"> 
                              <div class="input-group-prepend">  
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                              </div>
                              <input type="Password" class="form-control" id="editpassword" name="editpassword" placeholder="Password">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Name</label> 
                          <div class="input-group mb-3"> 
                              <div class="input-group-prepend">  
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                              </div>
                              <input type="text" class="form-control" id="editname" name="editname" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Birthday</label> 
                          <div class="input-group mb-3"> 
                              <div class="input-group-prepend">  
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                              </div>
                                <input type="date" id="editbirthday" name="editbirthday" class="form-control"
                                  value = "<?php echo date("Y-m-d");?>",
                                  min="1900-01-01" max="<?php echo date("Y-m-d");?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                          <label>Gender</label> 
                          <div class="input-group mb-3"> 
                              <div class="input-group-prepend">  
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                              </div>
                              <select id="editgender" class="form-control" name="editgender">
                                <option value="M">Nam</option>
                                <option value="F">Nữ</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Address</label> 
                          <div class="input-group mb-3"> 
                              <div class="input-group-prepend">  
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                              </div>
                              <input type="text" class="form-control" id="editaddress" name="editaddress" placeholder="Address">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>PhoneNumber</label> 
                          <div class="input-group mb-3"> 
                              <div class="input-group-prepend">  
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                              </div>
                              <input type="text" class="form-control"  id="editphonenumber" name="editphonenumber" placeholder="PhoneNumber">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Email</label> 
                          <div class="input-group mb-3"> 
                              <div class="input-group-prepend">  
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                              </div>
                              <input type="text" class="form-control" id="editemail" name="editemail" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>IDGroup</label> 
                          <div class="input-group mb-3"> 
                              <div class="input-group-prepend">  
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                              </div>
                              <select id="editidgroup" class="form-control" name="editidgroup">
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                              </select>
                          </div>
                        </div>
                          <input type='submit' class="button" name="editaccount" value='Edit' /> 
                      </form> 
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                <!-- /.col -->
              </section>
              <section id="deleteaccount">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Delete Account</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <form   method='POST'> 
                            <div class="form-group">
                              <label>Username</label> 
                              <div class="input-group mb-3"> 
                                  <div class="input-group-prepend">  
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                  </div>
                                  <input type="text" class="form-control" id="deleteusername" name="deleteusername" placeholder="Username">
                              </div>
                            </div>
                      
                              <input type='submit' class="button" name="deleteaccount" value='delete' /> 
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
<script src="../../Assets/JS/AccountData.js"></script>
</body>
</html>
