<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Trang chủ</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="./Assets/CSS/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="./Assets/CSS/aos.css" />

    <!-- inject:css -->
    <link rel="stylesheet" href="./Assets/CSS/indexstyle.css">
    <script src="./Assets/JS/jquery.min.js"></script>
    <!-- endinject -->
  </head>

       
  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <header id="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="navbar-top">
                <div class="d-flex justify-content-between align-items-center">
                  <ul class="navbar-top-left-menu">
                  </ul>
                  <ul class="navbar-top-right-menu">
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="mdi mdi-magnify"></i></a>
                    </li>
                    <?php
                        if (session_id() === '') session_start();
                        if(isset($_SESSION['Username'])){
                            echo '  <li class="nav-item">
                                        <a class="nav-link" href="#">My Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php" id="logout">Log Out</a>
                                    </li>';
                        }
                        else{
                            echo '
                                    <li class="nav-item">
                                        <a href="Login.php" class="nav-link">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Register.php" class="nav-link">Register</a>
                                    </li>';
                        }
                    ?>
                  
                  </ul>
                </div>
              </div>
              <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a class="navbar-brand" href="index.php">
                        <h2 style ="color:white; font-weight: bold;">PUPPY</h2>
                    </a>
                  </div>
                  <div>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                      class="navbar-collapse justify-content-center collapse"
                      id="navbarSupportedContent"
                    >
                      <ul
                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                      >
                        <li>
                          <button class="navbar-close">
                            <i class="mdi mdi-close"></i>
                          </button>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="Category.php">Category</a>
                        </li>              
                        <li class="nav-item">
                          <a class="nav-link" href="#">Contact</a>
                        </li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>
            </nav>
          </div>
        </header>
        <div class="container">
        <?php
            include('./Session.php');
            include('./Connect.php');
            // var_dump($_SESSION['Username']);
            // die();
            $username = $_SESSION['profile'];
            $query = mysqli_query($conn,"SELECT * FROM account WHERE Username = '".$username."'");
            echo "SELECT * FROM account WHERE Username = '".$username."'";
            while($row = mysqli_fetch_array($query)){
        ?>
		<div class="col-md-12">
		    <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="#editprofile" data-toggle="tab">Edit Profile</a></li>
                        </ul>
                    </div>
		        <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane" id="editprofile">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Edit Profile</h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form>
                                    <div class="form-group row">
                                        <label for="username" class="col-4 col-form-label">User Name</label> 
                                        <div class="col-8">
                                        <input id="username" name="username" placeholder="Username" class="form-control here" value="<?php echo $row['Username']?>" readonly type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-4 col-form-label">Password*</label> 
                                        <div class="col-8">
                                        <input id="password" name="password" placeholder="Password" value="<?php echo $row['Password']?>" required="required" class="form-control here" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-4 col-form-label">Last Name*</label> 
                                        <div class="col-8">
                                        <input id="name" name="name" placeholder="Name" value="<?php echo $row['Name']?>" required="required" class="form-control here" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="birthday" class="col-4 col-form-label">BirthDay*</label> 
                                        <div class="col-8">
                                            <input type="date" id="birthday" name="birthday" value="<?php echo $row['BirthDay']?>" class="form-control"
                                                value = "<?php echo date("Y-m-d");?>",
                                                min="1900-01-01" max="<?php echo date("Y-m-d");?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gender" class="col-4 col-form-label">Gender</label> 
                                        <div class="col-8">
                                            <select id="gender" name="gender" value="<?php echo $row['Gender']?>" class="custom-select">
                                                <option value="M">Nam</option>
                                                <option value="F">Nữ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Email*</label> 
                                        <div class="col-8">
                                        <input id="email" name="email" placeholder="Email" value="<?php echo $row['Email']?>" class="form-control here" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-4 col-form-label">Address</label> 
                                        <div class="col-8">
                                        <input id="address" name="address" placeholder="Address" value="<?php echo $row['Address']?>" class="form-control here" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phonenumber" class="col-4 col-form-label">PhoneNumber</label> 
                                        <div class="col-8">
                                        <input id="phonenumber" name="phonenumber" placeholder="PhoneNumber" value="<?php echo $row['PhoneNumber']?>" class="form-control here" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="idgroup" class="col-4 col-form-label">IDGroup</label> 
                                            <div class="col-8">
                                                <select id="idgroup" name="idgroup" value="<?php echo $row['IDGroup']?>" class="custom-select">
                                                    <option value="1">Admin</option>
                                                    <option value="2">User</option>
                                                </select>
                                            </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                        <button name="editprofile" type="submit" class="btn btn-primary">Update My Profile</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="active tab-pane" id="activity">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Profile</h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form>
                                    <div class="form-group row">
                                        <label for="username" class="col-4 col-form-label">User Name</label> 
                                        <div class="col-8">
                                        <input id="username" name="username" placeholder="Username" class="form-control here" value="<?php echo $row['Username']?>" readonly type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-4 col-form-label">Password*</label> 
                                        <div class="col-8">
                                        <input id="password" name="password" placeholder="Password" value="<?php echo $row['Password']?>" readonly required="required" class="form-control here" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-4 col-form-label">Name*</label> 
                                        <div class="col-8">
                                        <input id="name" name="name" placeholder="Name" required="required" value="<?php echo $row['Name']?>" readonly class="form-control here" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="birthday" class="col-4 col-form-label">BirthDay*</label> 
                                        <div class="col-8">
                                            <input type="date" id="birthday" name="birthday" class="form-control"
                                            value="<?php echo $row['BirthDay']?>" readonly/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gender" class="col-4 col-form-label">Gender</label> 
                                        <div class="col-8">
                                            <select id="gender" name="gender" class="custom-select" value="<?php echo $row['Gender']?>" readonly>
                                                <option value="M">Nam</option>
                                                <option value="F">Nữ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Email*</label> 
                                        <div class="col-8">
                                        <input id="email" name="email" placeholder="Email" class="form-control here" value="<?php echo $row['Email']?>" readonly required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-4 col-form-label">Address</label> 
                                        <div class="col-8">
                                        <input id="address" name="address" placeholder="Address" value="<?php echo $row['Address']?>" readonly class="form-control here" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phonenumber" class="col-4 col-form-label">PhoneNumber</label> 
                                        <div class="col-8">
                                        <input id="phonenumber" name="phonenumber" placeholder="PhoneNumber" value="<?php echo $row['PhoneNumber']?>" readonly class="form-control here" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="idgroup" class="col-4 col-form-label">IDGroup</label> 
                                            <div class="col-8">
                                                <select id="idgroup" name="idgroup" class="custom-select" value="<?php echo $row['IDGroup']?>" readonly>
                                                    <option value="1">Admin</option>
                                                    <option value="2">User</option>
                                                </select>
                                            </div>
                                    </div> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>      
		            
		        </div>
		    </div>
        </div>
        <?php
            }
        ?>
	</div>
</div>                
        <!-- <div class="content-wrapper">
          <div class="container">
            <div class="row" data-aos="fade-up">
              <div class="col-xl-8 stretch-card grid-margin" id="mainnew">
      
              </div>
              <div class="col-xl-4 stretch-card grid-margin">
                <div class="card bg-dark text-white">
                  <div class="card-body" id="mostview">
                    <h2>Viewest news</h2>

                  </div>
                </div>
              </div>
            </div>
              <div class="col-lg-12 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body" id="flashnew">

                  </div>
                </div>
              </div>
            </div> -->
        <footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <img src="assets/images/logo.svg" class="footer-logo" alt="" />
                  <h5 class="font-weight-normal mt-4 mb-5">
                    Puppy is a real estate website in Vietnam. Updating the current real estate market, providing readers with accurate information and analytical perspectives on the real estate market from industry experts. In addition, CafeLand also provides readers with all information about events, projects, feng-shui trends and houses so that you can have a better overview of information on real estate sales in Viet Nam
                  </h5>
               
                </div>
                <div class="col-sm-6" id="recentpost">
                  <h3 class="font-weight-bold mb-3">RECENT POSTS</h3>
                
                </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="d-sm-flex justify-content-between align-items-center">
                    <div class="fs-14 font-weight-600">
                      © 2020 @ <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white"> BootstrapDash</a>. All rights reserved.
                    </div>
                    <div class="fs-14 font-weight-600">
                      Handcrafted by <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">BootstrapDash</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
    <script  src="./Assets/JS/ShowMainCateNew.js"></script>
    <script  src="./Assets/JS/ShowMostViewCateNew.js"></script>
    <script  src="./Assets/JS/ShowFlashNew.js"></script>
    <script  src="./Assets/JS/ShowRecentPost.js"></script>
    <script src="./Assets/JS/vendor.bundle.base.js"></script>
    <script src="./Assets/JS/aos.js"></script>
    <script src="./Assets/JS/demo.js"></script>
    <script src="./Assets/JS/jquery.easeScroll.js"></script>
    <script type="text/javascript">
        $('#logout').click(function(){
                <?php
                    unset($_SESSION['Username']);
                ?>
            });
    </script>
  </body>
</html>
