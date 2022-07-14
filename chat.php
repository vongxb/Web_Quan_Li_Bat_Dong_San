<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Chat</title>
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
                            $_SESSION['profile'] = $_SESSION['Username'];
                            echo '  <li class="nav-item">
                                        <a class="nav-link" href="Profile.php" id="profile">My Account</a>
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
                          <a class="nav-link" href="send.html">Contact</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="chat.php">Chat</a>
                        </li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>
            </nav>
          </div>
        </header>

        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chat</h1>
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
                <h3 class="card-title">Messenger</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              
                <!-- The core Firebase JS SDK is always required and must be listed first -->
              <script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
              
              <!-- include firebase database -->
              <script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-database.js"></script>
                
              <script>
                  // Your web app's Firebase configuration
                  var firebaseConfig = {
                      apiKey: "AIzaSyDXKC_ydvksjvJ7pPdAjRcW-43CYltZ4Y8",
                      authDomain: "chat-9b3b8.firebaseapp.com",
                      databaseURL: "https://chat-9b3b8-default-rtdb.firebaseio.com",
                      projectId: "chat-9b3b8",
                      storageBucket: "chat-9b3b8.appspot.com",
                      messagingSenderId: "67642323204",
                      appId: "1:67642323204:web:9694db79f61b4c984f6051",
                      measurementId: "G-5D433Z3BJL"
                  };
                  // Initialize Firebase
                  firebase.initializeApp(firebaseConfig);
                  var myName = prompt("Enter your name");
              </script>
              <form onsubmit="return sendMessage();">
                  <input id="message" placeholder="Enter message" autocomplete="off">
                
                  <input type="submit">
              </form>
                    
              <script>
                  function sendMessage() {
                      // get message
                      var message = document.getElementById("message").value;
                
                      // save in database
                      firebase.database().ref("messages").push().set({
                          "sender": myName,
                          "message": message
                      });
                
                      // prevent form from submitting
                      return false;
                  }
              </script>
              <!-- create a list -->
              <ul id="messages"></ul>
                    
              <script>
                  // listen for incoming messages
                  firebase.database().ref("messages").on("child_added", function (snapshot) {
                      var html = "";
                      // give each message a unique ID
                      html += "<li id='message-" + snapshot.key + "'>";
                      // show delete button if message is sent by me
                      if (snapshot.val().sender == myName) {
                          html += "<button data-id='" + snapshot.key + "' onclick='deleteMessage(this);'>";
                              html += "Delete";
                          html += "</button>";
                      }
                      html += snapshot.val().sender + ": " + snapshot.val().message;
                      html += "</li>";
                
                      document.getElementById("messages").innerHTML += html;
                  });
              </script>
              <script>
                  function deleteMessage(self) {
                      // get message ID
                      var messageId = self.getAttribute("data-id");
                  
                      // delete message
                      firebase.database().ref("messages").child(messageId).remove();
                  }
                  
                  // attach listener for delete message
                  firebase.database().ref("messages").on("child_removed", function (snapshot) {
                      // remove message node
                      document.getElementById("message-" + snapshot.key).innerHTML = "This message has been removed";
                  });
              </script>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
    <script  src="./Assets/JS/ShowMainCateNew.js"></script>
    <script  src="./Assets/JS/ShowMostViewCateNew.js"></script>
    <script  src="./Assets/JS/ShowFlashNew.js"></script>
    <script  src="./Assets/JS/ShowRecentPost.js"></script>
    <script src="./Assets/JS/vendor.bundle.base.js"></script>
    <script src="./Assets/JS/aos.js"></script>
    <script src="./Assets/JS/demo.js"></script>
    <script src="./Assets/JS/jquery.easeScroll.js"></script>
    
  </body>
</html>

