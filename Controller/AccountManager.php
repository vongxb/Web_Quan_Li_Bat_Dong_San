<?php
    ob_start();
    include('../../Session.php');
    include('../../Connect.php');
    if(isset($_POST['addaccount'])){
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);
        $name = addslashes($_POST['name']);
        $birthday = addslashes($_POST['birthday']);
        $gender = addslashes($_POST['gender']);
        $address = addslashes($_POST['address']);
        $phonenumber = addslashes($_POST['phonenumber']);
        $email = addslashes($_POST['email']);
        $idgroup = addslashes($_POST['idgroup']);
        if(!$username || !$password || !$name || !$address || !$email ){
            echo "Vui lòng nhập đầy đủ thông tin";  
            exit;
         }
         $query = mysqli_query($conn,"SELECT Username FROM Account WHERE Username = '".$username."'");
         if(mysqli_num_rows($query)!=0){
             echo "Tên đăng nhập đã tồn tại!";
             exit;
         }
         include('../../Model/AccountModel.php');
         $account = new AccountModel($username,$password,$name,$birthday,$gender,$address,$phonenumber,$email,$idgroup);
         $query = "INSERT INTO Account  VALUES('" .$account->Username. "','".$account->Password."','"
         .$account->Name."','".$account->Birthday."','".$account->Gender."','".$account->Address."','"
         .$account->PhoneNumber."','".$account->Email."',".$account->IDGroup.")";
        //  echo $query;
         $result = mysqli_query($conn,$query); 
         
        //  if (headers_sent()) {
        //     die("Redirect failed!");
        // }
        // else{
        //     header('Location:pages/admin/Account.php',true);
        //     exit();
        // }        
         //header("Refresh:0");
    }
    if(isset($_POST['editaccount'])){
        $username = addslashes($_POST['editusername']);
        $password = addslashes($_POST['editpassword']);
        $name = addslashes($_POST['editname']);
        $birthday = addslashes($_POST['editbirthday']);
        $gender = addslashes($_POST['editgender']);
        $address = addslashes($_POST['editaddress']);
        $phonenumber = addslashes($_POST['editphonenumber']);
        $email = addslashes($_POST['editemail']);
        $idgroup = addslashes($_POST['editidgroup']);
        if(!$username || !$password || !$name || !$address || !$email ){
            echo "Vui lòng nhập đầy đủ thông tin";  
            exit;
         }
         include('../../Model/AccountModel.php');
         $account = new AccountModel($username,$password,$name,$birthday,$gender,$address,$phonenumber,$email,$idgroup);
         $query = "UPDATE Account SET  Password = '".$account->Password."', Name = '"
         .$account->Name."', BirthDay = '".$account->Birthday."',Gender='".$account->Gender."',Address='".$account->Address.
         "',PhoneNumber = '".$account->PhoneNumber."', Email = '".$account->Email."',IDGroup = '".$account->IDGroup."' WHERE  Username = '".$account->Username."'";

         $result = mysqli_query($conn,$query); 
         if($result){
             echo "Sửa thành công";
         }
         else{
             echo "Sửa không thành công";
         }
        //  if (headers_sent()) {
        //     die("Redirect failed!");
        // }
        // else{
        //     header('Location:pages/admin/Account.php',true);
        //     exit();
        // }        
         //header("Refresh:0");
    }
    if(isset($_POST['deleteaccount'])){
        $username = addslashes($_POST['deleteusername']);
        $query = "DELETE FROM Account WHERE Username = '".$username."'";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "Xóa thành công";
        }
        else{
            echo "Xóa không thành công";
        }
    }
?>