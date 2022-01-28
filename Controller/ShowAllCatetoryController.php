<?php
      
      include('../Connect.php');
      $query = mysqli_query($conn,"SELECT * FROM Catetory");
      $sl = mysqli_num_rows($query);
      $array = array();
      include('../Model/CatetoryModel.php');
      while($row = mysqli_fetch_array($query)){
        $cate = new CatetoryModel($row['CateID'],$row['CateName'],$row['CateAddress'],$row['CateContent'],$row['CateRent'],$row['CateStatus'],$row['GroupCateID'],$row['ContactID']);
        $catejson = $cate->GetCateJson();
        array_push($array,$catejson);
      }
      $arr = array();
      $arr["data"] = $array;
      echo json_encode($arr); 
?>