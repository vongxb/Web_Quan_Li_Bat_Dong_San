<?php

    include('Session.php');
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
    //Xử lý đăng nhập
    if (isset($_POST['dangnhap']))
    {
        //Kết nối tới database
        include('Connect.php');
        
        //Lấy dữ liệu nhập vào
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);
        
        //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
        if (!$username || !$password) {
            echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
    
        // mã hóa pasword
        //$password = md5($password);
        
        //Kiểm tra tên đăng nhập có tồn tại không
        $query = mysqli_query($conn,"SELECT Username, Password FROM Account WHERE Username='$username'");
        if (mysqli_num_rows($query) == 0) {
            echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
    
        //Lấy mật khẩu trong database ra
        $row = mysqli_fetch_array($query);
        
        //So sánh 2 mật khẩu có trùng khớp hay không
        if ($password != $row['Password']) {
            echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
    
        //Lưu tên đăng nhập

        include('Model/AccountModel.php');
        $query = mysqli_query($conn,"SELECT * FROM Account WHERE Username='$username'");
        $row = mysqli_fetch_array($query);
        $account = new AccountModel($row['Username'],$row['Password'],$row['Name'],$row['BirthDay'],$row['Gender'],$row['Address'],$row['PhoneNumber'],$row['Email'],$row['IDGroup']);
        //echo "Xin chào <b>" .$account->Username . "</b>. Bạn đã đăng nhập thành công. <a href=''>Thoát</a>";
        $_SESSION['Username'] = $account->Username;
        if($account->IDGroup == 1){
            header('Location:admin.php');
            die();
        }
        else{
            header('Location:index.php');
            die();
        }
    }
?>