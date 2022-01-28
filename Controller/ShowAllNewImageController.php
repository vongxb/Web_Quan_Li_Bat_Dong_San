<?php
     include('../Connect.php');
     $query = mysqli_query($conn,"SELECT * FROM NewImage");
     $sl = mysqli_num_rows($query);
     $array = array();
     include('../Model/NewImageModel.php');
     while($row = mysqli_fetch_array($query)){
         $newimage = new NewImageModel($row['NewImageID'],$row['NewImageLink'],$row['NewID']);
         $newimagejson = $newimage->GetNewImageJson();
         array_push($array,$newimagejson);   
     }
     $arr = array();
     $arr['data'] = $array;
     echo json_encode($arr);
     ?>