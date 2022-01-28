<?php
    ob_start();
    include('../../Session.php');
    include('../../Connect.php');
    if(isset($_POST['addcatetory'])){
        $catename = addslashes($_POST['CateName']);
        $cateaddress = addslashes($_POST['CateAddress']);
        $catecontent = addslashes($_POST['CateContent']);
        $caterent = addslashes($_POST['CateRent']);
        $catestatus = addslashes($_POST['CateStatus']);
        $groupcateid = addslashes($_POST['GroupCateID']);
        $contactid = addslashes($_POST['ContactID']);
        if(!$catename || !$cateaddress || !$catecontent || !$caterent){
            echo "Vui lòng nhập đầy đủ thông tin";  
            exit;
         }
         $query = "SELECT CateID FROM Catetory ORDER BY CateID DESC LIMIT 1";
         $result = mysqli_query($conn,$query);
         $row = mysqli_fetch_array($result);
         include('../../Model/CatetoryModel.php');
         $catetory = new CatetoryModel($row['CateID']+1, $catename,$cateaddress,$catecontent,$caterent,$catestatus,$groupcateid,$contactid);
         $query = "INSERT INTO Catetory (CateName,CateAddress,CateContent,CateRent,CateStatus,GroupCateID,ContactID)
            VALUES('".$catetory->CateName."','".$catetory->CateAddress."','".$catetory->CateContent."','".$catetory->CateRent."','".$catetory->CateStatus."','".$catetory->GroupCateID."','".$catetory->ContactID."')";
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
    if(isset($_POST['editcatetory'])){
        $CateID = addslashes($_POST['EditCateID']);
        $CateName = addslashes($_POST['EditCateName']);
        $CateAddress = addslashes($_POST['EditCateAddress']);
        $CateContent = addslashes($_POST['EditCateContent']);
        $CateRent = addslashes($_POST['EditCateRent']);
        $CateStatus = addslashes($_POST['EditCateStatus']);
        $GroupCateID = addslashes($_POST['EditGroupCateID']);
        if(!$CateID || !$CateName || !$CateAddress || !$CateContent || !$CateRent || !$CateStatus ||  $GroupCateID ){
            echo "Vui lòng nhập đầy đủ thông tin";  
            exit;
         }
         include('../../Model/CatetoryModel.php');
         $catetory = new CatetoryModel($CateID,$CateName,$CateAddress,$CateContent,$CateRent,$CateStatus,$GroupCateID,$email,$idgroup);
         $query = "UPDATE Catetory SET  CateName = '".$catetory->CateName."', CateAddress = '"
         .$catetory->CateAddress."', CateContent = '".$catetory->CateContent."',CateRent='".$catetory->CateRent."',CateStatus='".$catetory->CateStatus.
         "',GroupCateID = '".$catetory->GroupCateID."' WHERE  CateID = '".$catetory->CateID."'";

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
    if(isset($_POST['deletecatetory'])){
        $cateid = addslashes($_POST['deletecateid']);
        $query = "DELETE FROM Catetory WHERE CateID = '".$cateid."'";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "Xóa thành công";
        }
        else{
            echo "Xóa không thành công";
        }
    }
?>