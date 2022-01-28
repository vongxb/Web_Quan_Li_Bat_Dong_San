<?php
    ob_start();
    include('../../Session.php');
    include('../../Connect.php');
    if(isset($_POST['addnew'])){
        $NewName = addslashes($_POST['NewName']);
        $NewContent = addslashes($_POST['NewContent']);
        $NewDatePost = addslashes($_POST['NewDatePost']);
        $NewCount = addslashes($_POST['NewCount']);
        if(!$NewName || !$NewContent || !$NewDatePost){
            echo "Vui lòng nhập đầy đủ thông tin";  
            exit;
         }
         $query = "SELECT NewID FROM News ORDER BY NewID DESC LIMIT 1";
         $result = mysqli_query($conn,$query);
         $row = mysqli_fetch_array($result);
         include('../../Model/NewModel.php');
         $new = new NewModel($row['NewID']+1, $NewName,$NewContent,$NewDatePost,$NewCount);
         $query = "INSERT INTO News (NewName,NewContent,NewDatePost,NewCount)
            VALUES('".$new->NewName."','".$new->NewContent."','".$new->NewDatePost."','".$new->NewCount."')";
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
    if(isset($_POST['editnew'])){
        $NewID = addslashes($_POST['EditNewID']);
        $NewName = addslashes($_POST['EditNewName']);
        $NewContent = addslashes($_POST['EditNewContent']);
        $NewDatePost = addslashes($_POST['EditNewDatePost']);
        $NewCount = addslashes($_POST['EditNewCount']);
        if(!$NewID || !$NewName || !$NewContent || !$NewDatePost){
            echo "Vui lòng nhập đầy đủ thông tin";  
            exit;
         }
         include('../../Model/NewModel.php');
         $new = new NewModel($NewID, $NewName,$NewContent,$NewDatePost,$NewCount);
         $query = "UPDATE News SET  NewName = '".$new->NewName."', NewContent = '"
         .$new->NewContent."', NewDatePost = '".$new->NewDatePost."',NewCount ='".$new->NewCount."' WHERE  NewID = '".$new->NewID."'";

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
    if(isset($_POST['deletenew'])){
        $newid = addslashes($_POST['DeleteNewID']);
        $query = "DELETE FROM News WHERE NewID = '".$newid."'";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "Xóa thành công";
        }
        else{
            echo "Xóa không thành công";
        }
    }
?>