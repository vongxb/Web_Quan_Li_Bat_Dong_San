<?php
      
      include('../Connect.php');
      $query = mysqli_query($conn,"SELECT * FROM GroupCatetory");
      $sl = mysqli_num_rows($query);
      $array = array();
      include('../Model/GroupCateModel.php');
      while($row = mysqli_fetch_array($query)){
        $groupcate = new GroupCateModel($row['GroupCateID'],$row['GroupCateName']);
        $groupcatejson = $groupcate->GetGroupCateJson();
        array_push($array,$groupcatejson);
      }
      $arr = array();
      $arr["data"] = $array;
      echo json_encode($arr); 
?>