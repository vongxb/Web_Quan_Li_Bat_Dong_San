<?php
    ob_start();
    include('../../Session.php');
    include('../../Connect.php');
    if(isset($_POST['addnewimage'])){
        $newimagelink = addslashes($_POST['NewImageLink']);
        $newid = addslashes($_POST['NewID']);
      
        if(!$newimagelink || !$newid){
            echo "Vui lòng nhập đầy đủ thông tin";  
            exit;
         }
         $query = "SELECT NewImageID FROM NewImage ORDER BY NewImageID DESC LIMIT 1";
         $result = mysqli_query($conn,$query);
         $row = mysqli_fetch_array($result);
         include('../../Model/NewImageModel.php');
         $newimage = new NewImageModel($row['NewImageID']+1, $newimagelink,$newid);
         $query = "INSERT INTO NewImage (NewImageLink,NewID)
            VALUES('".$newimage->NewImageLink."','".$newimage->NewID."')";
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
    if(isset($_POST['editnewimage'])){
        $NewImageID = addslashes($_POST['EditNewImageID']);
        $NewImageLink = addslashes($_POST['EditNewImageLink']);
        $NewID = addslashes($_POST['EditNewID']);
      
        if(!$NewID || !$NewImageID || !$NewImageLink){
            echo "Vui lòng nhập đầy đủ thông tin";  
            exit;
         }
         include('../../Model/NewImageModel.php');
         $newimage = new NewImageModel($NewImageID,$NewImageLink,$NewID);
         $query = "UPDATE NewImage SET  NewImageLink = '".$newimage->NewImageLink."', NewID = '"
         .$newimage->NewID."' WHERE  NewImageID = '".$newimage->NewImageID."'";
         echo $query;
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
    if(isset($_POST['deletenewimage'])){
        $newimageid = addslashes($_POST['DeleteNewImageID']);
        $query = "DELETE FROM NewImage WHERE NewImageID = '".$newimageid."'";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "Xóa thành công";
        }
        else{
            echo "Xóa không thành công";
        }
    }
?>