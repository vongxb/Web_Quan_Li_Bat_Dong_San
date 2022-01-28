<?php
    ob_start();
    include('../../Session.php');
    include('../../Connect.php');
    if(isset($_POST['addgroupcate'])){
        $groupcatename = addslashes($_POST['GroupCateName']);
        if(!$groupcatename){
            echo "Vui lòng nhập đầy đủ thông tin";  
            exit;
        }
        include('../../Model/GroupCateModel.php');
        $query = "SELECT GroupCateID FROM GroupCatetory ORDER BY GroupCateID DESC LIMIT 1";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);
        $groupcate = new GroupCateModel($row['GroupCateID']+1, $groupcatename);
        $query = "INSERT INTO GroupCatetory (GroupCateName) VALUES('".$groupcate->GroupCateName."')";
        echo $query;
        $result = mysqli_query($conn,$query);
    }
    if(isset($_POST['editgroupcate'])){
        $groupcateid = addslashes($_POST['EditGroupCateID']);
        $groupcatename = addslashes($_POST['EditGroupCateName']);
        $query = "UPDATE GroupCatetory SET GroupCateName = '".$groupcatename."' WHERE GroupCateID = ".$groupcateid;
        $result = mysqli_query($conn,$query);
    }
    if(isset($_POST['deletegroupcate'])){
        $groupcatename = addslashes($_POST['DeleteGroupCateName']);
        $query = "DELETE FROM GroupCatetory WHERE GroupCateName = '".$groupcatename."'";
        $result = mysqli_query($conn,$query);
    }
?>