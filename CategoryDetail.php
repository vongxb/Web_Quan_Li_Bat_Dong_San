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

<link href="http://cdn.shopify.com/s/files/1/0067/5617/1846/t/2/assets/timber.scss.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

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
                $id = $_GET['id'];
                include('./Connect.php');
            ?>
            <?php
                           
                $query = mysqli_query($conn,"SELECT CateName, CateAddress,CateContent,CateRent,CateImageLink, ContactID FROM Catetory INNER JOIN CateImage ON Catetory.CateID = CateImage.CateID WHERE Catetory.CateID = ".$id." limit 1" );
                while($row = mysqli_fetch_array($query)){
            ?>
    <div class="wrapper">
        <main>
            <div id="shopify-section-product-template" class="shopify-section">
                <div class="single-product-area mt-80 mb-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="product-details-large" id="ProductPhoto">
                                    <img id="ProductPhotoImg" class="product-zoom" data-image-id="" alt="" data-zoom-image=".<?php echo $row['CateImageLink'];?>" src=".<?php echo $row['CateImageLink'];?>">
          
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="single-product-content">
                                    <form method="post" id="AddToCartForm" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data">
                                        <input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" />
                                        <div class="product-details">
                                            <h1 class="single-product-name"> <?php echo $row['CateName'];?></h1>
                                            <div class="single-product-reviews">
                                                <span class="shopify-product-reviews-badge" data-id="1912078270534"></span>
                                            </div>
                                            <div class="product-sku">Hình thức: <span class="variant-sku"><?php echo $row['CateContent'];?></span></div>
                                            <div class="single-product-price">
                                                <div class="product-discount"><span  class="price" id="ProductPrice"><span class=money>Giá: <?php echo $row['CateRent'];?> VND</span></span></div>
                                            </div>
                                            <div class="product-info">Địa chỉ: <?php echo $row['CateAddress'];?></div>
                          
                                            <div class="single-product-action">
                                                 <div class="product-add-to-cart">
                                                    <div class="add">
                                                        <button type="button" class="add-to-cart ajax-spin-cart" id="AddToCart" onclick="document.location.href='Lienhe.php?id=<?php echo $row['ContactID'];?>'">
                                                            <i class="ion-bag"></i>
                                                            <span class="list-cart-title cart-title" id="AddToCartText">Xem liên hệ</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>                                                        
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                     }
                ?>
                <style type="text/css">.product-details .countdown-timer-wrapper{display: none !important;}</style>
                                                
                <script>$(document).ready(function() {$('.fancybox').fancybox();});</script>
                <script>function productZoom(){
                        $(".product-zoom").elevateZoom({
                          gallery: 'ProductThumbs',
                          galleryActiveClass: "active",
                          zoomType: "inner",
                          cursor: "crosshair"
                        });$(".product-zoom").on("click", function(e) {
                          var ez = $('.product-zoom').data('elevateZoom');
                          $.fancybox(ez.getGalleryList());
                          return false;
                        });
                        
                        };
                      function productZoomDisable(){
                        if( $(window).width() < 767 ) {
                          $('.zoomContainer').remove();
                          $(".product-zoom").removeData('elevateZoom');
                          $(".product-zoom").removeData('zoomImage');
                        } else {
                          productZoom();
                        }
                      };

                      productZoomDisable();

                      $(window).resize(function() {
                        productZoomDisable();
                      });
                </script>
            </div>
        </main>
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