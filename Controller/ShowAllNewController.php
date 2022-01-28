<?php
      
      include('../Connect.php');
      $query = mysqli_query($conn,"SELECT * FROM News");
      $sl = mysqli_num_rows($query);
      $array = array();
      include('../Model/NewModel.php');
      while($row = mysqli_fetch_array($query)){
          $new = new NewModel($row['NewID'],$row['NewName'],$row['NewContent'],$row['NewDatePost'],$row['NewCount']);
          $newjson = $new->GetNewJson();
          array_push($array,$newjson);
      }
      $arr = array();
      $arr["data"] = $array;
      echo json_encode($arr);
?>
        
