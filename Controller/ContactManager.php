<?php
    ob_start();
    include('../../Session.php');
    include('../../Connect.php');
    if(isset($_POST['addcontact'])){
        $contactname = addslashes($_POST['ContactName']);
        $contactaddress = addslashes($_POST['ContactAddress']);
        $contactphone = addslashes($_POST['ContactPhone']);
        $contactemail = addslashes($_POST['ContactEmail']);
        if(!$contactname || !$contactaddress || !$contactphone || !$contactemail){
            echo "Vui lòng nhập đầy đủ thông tin";  
            exit;
         }
         $query = "SELECT ContactID FROM Contact ORDER BY ContactID DESC LIMIT 1";
         $result = mysqli_query($conn,$query);
         $row = mysqli_fetch_array($result);
         include('../../Model/ContactModel.php');
         $contact = new ContactModel($row['ContactID']+1, $contactname,$contactaddress,$contactphone,$contactemail);
         $query = "INSERT INTO Contact (ContactName,ContactAddress,ContactPhone,ContactEmail)
            VALUES('".$contact->ContactName."','".$contact->ContactAddress."','".$contact->ContactPhone."','".$contact->ContactEmail."')";
         echo $query;
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
    if(isset($_POST['editcontact'])){
        $contactid = addslashes($_POST['EditContactID']);
        $contactname = addslashes($_POST['EditContactName']);
        $contactaddress = addslashes($_POST['EditContactAddress']);
        $contactphone = addslashes($_POST['EditContactPhone']);
        $contactemail = addslashes($_POST['EditContactEmail']);
        if(!$contactid || !$contactname || !$contactaddress || !$contactphone || !$contactemail ){
            echo "Vui lòng nhập đầy đủ thông tin";  
            exit;
         }
         include('../../Model/ContactModel.php');
         $contact = new ContactModel($contactid, $contactname,$contactaddress,$contactphone,$contactemail);
         $query = "UPDATE Contact SET  ContactName = '".$contact->ContactName."', ContactAddress = '"
         .$contact->ContactAddress."', ContactPhone = '".$contact->ContactPhone."',ContactEmail ='".$contact->ContactEmail."' WHERE  ContactID = '".$contact->ContactID."'";

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
    if(isset($_POST['deletecontact'])){
        $contactid = addslashes($_POST['DeleteContactID']);
        $query = "DELETE FROM Contact WHERE ContactID = '".$contactid."'";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "Xóa thành công";
        }
        else{
            echo "Xóa không thành công";
        }
    }
?>