



<?php 
    // $db_host = "localhost";
    // $db_username = "root";
    // $db_password = "";
    // $db_name = "qlbds";

    // $info['db_host'] = "localhost";
    // $info['db_name'] = "qlbds";
    // $info['db_username'] = "root";
    // $info['db_password'] = "";

    // $conn = @mysqli_connect($db_host, $db_username, $db_password) or die("Không thể kết nối database");
    // $db = @mysqli_select_db($db_name,$conn) or die("Không thể chọn database");
    $ketnoi['host'] = 'localhost'; 
    $ketnoi['dbname'] = 'qlbds'; // Tên database 
    $ketnoi['username'] = 'root'; // Tên user mặc định là root 
    $ketnoi['password'] = ''; // Password để trống 
    $conn = @mysqli_connect( "{$ketnoi['host']}", "{$ketnoi['username']}", "{$ketnoi['password']}") or die("Không thể kết nối database");
    @mysqli_select_db( $conn,"{$ketnoi['dbname']}") or die("Không thể chọn database"); 
?>