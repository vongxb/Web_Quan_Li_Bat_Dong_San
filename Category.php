<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" href="style.css"/> 
<link
      rel="stylesheet"
      href="./Assets/CSS/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="./Assets/CSS/aos.css" />

    <link rel="stylesheet" href="./Assets/CSS/indexstyle.css">
<link rel="stylesheet" href="./Assets/CSS/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href="./Assets/CSS/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="./Assets/JS/bootstrap.min.js"></script>
<script src="./Assets/JS/jquery.min.js"></script>
<link href="./Assets/CSS/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

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
                        <!-- <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                        </li> -->
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
                            <a class="nav-link" href="#">Category</a>
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
                <br>
                <h4>Category</h2>
                <br>
                <div class="row" id="ads">
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
        </div>
    </div>
        

</script>
<script src="./Assets/JS/ShowCateImage.js"></script>
<script src="./Assets/JS/ShowRecentPost.js"></script>
<script src="./Assets/JS/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="./Assets/JS/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="./Assets/JS/demo.js"></script>
    <script src="./Assets/JS/jquery.easeScroll.js"></script>
    <script type="text/javascript">
        $('#logout').click(function(){
                <?php
                    unset($_SESSION['Username']);
                ?>
            });
    </script>
<script type="text/javascript">
$('#logout').click(function(){
        <?php
            unset($_SESSION['Username']);
        ?>
   	});
</script>
</body> 
</html>