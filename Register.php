<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" href="style.css"/> 
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head> 
<body> 
<form action='Register.php' class="register" method='POST'> 
Tên đăng nhập : <input type='text' name='username' /> 
Mật khẩu : <input type='password' name='password' /> 
Nhập lại mật khẩu : <input type='password' name='passwordconfirm' /> 
Họ và tên : <input type='text' name='name' /> 
Ngày sinh : <input type="date" id="start" name="birthday"
                value = "<?php echo date("Y-m-d");?>",
                min="1900-01-01" max="<?php echo date("Y-m-d");?>"/>
Giới tính : <select id="gender" name="gender">
                <option value="M">Nam</option>
                <option value="F">Nữ</option>
            </select>
<br>
Địa chỉ : <input type='text' name='address'/> 
SDT : <input type='text' name='phonenumber' /> 
Email : <input type='text' name='email' /> 
<input type='submit' class="button" name="register" value='Đăng ký' /> 
<?php require 'Controller/RegisterController.php';?> 
<form> 
</body> 
</html>