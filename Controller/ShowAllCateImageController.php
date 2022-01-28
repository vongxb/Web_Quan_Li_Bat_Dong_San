<?php
     include('../Connect.php');
     $query = mysqli_query($conn,"SELECT GroupCateName, catetory.CateID, CateName,CateAddress,CateContent,CateRent, CateStatus, CateImageLink, catetory.ContactID 
     FROM groupcatetory INNER JOIN catetory ON groupcatetory.GroupCateID = catetory.GroupCateID
     INNER JOIN cateimage ON catetory.CateID = cateimage.CateID INNER JOIN Contact ON Catetory.ContactID = Contact.ContactID");
     $sl = mysqli_num_rows($query);
     $array = array();
     include('../Model/CateImageViewModel.php');
     while($row = mysqli_fetch_array($query)){
         $cateimageview = new CateImageViewModel($row['GroupCateName'],$row['CateID'],$row['CateName'],$row['CateAddress'],$row['CateContent'],$row['CateRent'],$row['CateStatus'],$row['CateImageLink'],$row['ContactID']);
         $cateimageviewjson = $cateimageview->GetCateImageViewJson();
         array_push($array,$cateimageviewjson);   
     }
     $arr = array();
     $arr['data'] = $array;
     echo json_encode($arr);
     ?>