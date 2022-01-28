<?php
    ob_start();
    include('../../Session.php');
    include('../../Connect.php');
    if(isset($_POST['addcateimage'])){
        $cateimagelink = addslashes($_POST['CateImageLink']);
        $cateid = addslashes($_POST['CateID']);
      
        if(!$cateimagelink || !$cateid){
            echo "Vui lòng nhập đầy đủ thông tin";  
            exit;
         }
         $query = "SELECT CateImageID FROM CateImage ORDER BY CateImageID DESC LIMIT 1";
         $result = mysqli_query($conn,$query);
         $row = mysqli_fetch_array($result);
         include('../../Model/CateImageModel.php');
         $cateimage = new CateImageModel($row['CateImageID']+1, $cateimagelink,$cateid);
         $query = "INSERT INTO CateImage (CateImageLink,CateID)
            VALUES('".$cateimage->CateImageLink."','".$cateimage->CateID."')";
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
    if(isset($_POST['editcateimage'])){
        $CateImageID = addslashes($_POST['EditCateImageID']);
        $CateImageLink = addslashes($_POST['EditCateImageLink']);
        $CateID = addslashes($_POST['EditCateID']);
      
        if(!$CateID || !$CateImageID || !$CateImageLink){
            echo "Vui lòng nhập đầy đủ thông tin";  
            exit;
         }
         include('../../Model/CateImageModel.php');
         $cateimage = new CatetoryModel($CateImageID,$CateImageLink,$CateID);
         $query = "UPDATE CateImage SET  CateImageLink = '".$cateimage->CateImageLink."', CateID = '"
         .$cateimage->CateID."', WHERE  CateID = '".$catetory->CateID."'";

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
    if(isset($_POST['deletecateimage'])){
        $cateimageid = addslashes($_POST['DeleteCateImageID']);
        $query = "DELETE FROM CateImage WHERE CateImageID = '".$cateimageid."'";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "Xóa thành công";
        }
        else{
            echo "Xóa không thành công";
        }
    }
?>