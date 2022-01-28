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
                          <a class="nav-link" href="index.php">Home</a>
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
        <?php
            $newid = $_GET['id'];
            include('./Connect.php');
            $query = mysqli_query($conn,"UPDATE News SET NewCount = NewCount + 1 WHERE  NewID = '". $newid."'" );
            echo $query;
        ?>
        <div class="content-wrapper">
          <div class="container">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-8">
                        <?php
                           
                            $query = mysqli_query($conn,"SELECT NewName, NewContent,NewImageLink,NewDatePost FROM News INNER JOIN NewImage ON News.NewID = NewImage.NewID WHERE News.NewID = ".$newid." limit 1" );
                            while($row = mysqli_fetch_array($query)){
                        ?>
                        <div>
                            <h1 class="font-weight-600 mb-1">
                            <?php
                                echo $row['NewName'];
                            ?>
                            </h1>
                            <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span><?php
                                echo $row['NewDatePost'];
                            ?>
                            </p>
                            <div class="rotate-img">
                            <img
                                src=".<?php echo $row['NewImageLink'];?>"
                                alt="banner"
                                class="img-fluid mt-4 mb-4"
                            />
                            </div>
                            <p class="mb-4 fs-15">
                            <?php
                                echo $row['NewContent'];
                            ?>
                            </p>
                        </div>
                        <?php
                            }
                        ?>
                      
                    </div>
                    <div class="col-lg-4">
                      <div class="row">
                        <div class="stretch-card grid-margin">
                          <div class="card bg-dark text-white">
                            <div class="card-body" id="mostview">
                              <h2>Viewest news</h2>

                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>               
        
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
