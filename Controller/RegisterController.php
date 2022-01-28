<?php
        header('Content-Type: text/html; charset=UTF-8');
        if(isset($_POST['register']))
        {
            include('Connect.php');
            $username = addslashes($_POST['username']);
            $password = addslashes($_POST['password']);
            $passwordconfirm = addslashes($_POST['passwordconfirm']);
            $name = addslashes($_POST['name']);
            $birthday = addslashes($_POST['birthday']);
            $gender = addslashes($_POST['gender']);
            $address = addslashes($_POST['address']);
            $phonenumber = addslashes($_POST['phonenumber']);
            $email = addslashes($_POST['email']);

            if(!$username || !$password || !$passwordconfirm || !$name || !$address || !$email ){
               echo "Vui lòng điền đầy đủ thông tin!";
               exit;
            }
            $query = mysqli_query($conn,"SELECT Username FROM Account WHERE Username = '".$username."'");
            if(mysqli_num_rows($query)!=0){
                echo "Tên đăng nhập đã tồn tại!";
                exit;
            }
            if($password != $passwordconfirm){
                echo "Xác nhận mật khẩu không đúng";
                exit;
            }
            include('Model/AccountModel.php');
            $account = new AccountModel($username,$passwordconfirm,$name,$birthday,$gender,$address,$phonenumber,$email,2);
            $query = "INSERT INTO Account  VALUES('" .$account->Username. "','".$account->Password."','"
                .$account->Name."','".$account->Birthday."','".$account->Gender."','".$account->Address."','"
                .$account->PhoneNumber."','".$account->Email."',2)";
            echo $query;
            $result = mysqli_query($conn,$query);         
            die();
        }
?>
