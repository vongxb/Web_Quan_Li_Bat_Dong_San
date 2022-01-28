<?php
     include('../Connect.php');
     $query = mysqli_query($conn,"SELECT * FROM CateImage");
     $sl = mysqli_num_rows($query);
     $array = array();
     include('../Model/CateImageModel.php');
     while($row = mysqli_fetch_array($query)){
         $cateimage = new CateImageModel($row['CateImageID'],$row['CateImageLink'],$row['CateID']);
         $cateimagejson = $cateimage->GetCateImageJson();
         array_push($array,$cateimagejson);   
     }
     $arr = array();
     $arr['data'] = $array;
     echo json_encode($arr);
     ?>