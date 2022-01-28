<?php
      
      include('../Connect.php');
      $query = mysqli_query($conn,"SELECT * FROM Account");
      $sl = mysqli_num_rows($query);
      $array = array();
      include('../Model/AccountModel.php');
      while($row = mysqli_fetch_array($query)){
          $account = new AccountModel($row['Username'],$row['Password'],$row['Name'],$row['BirthDay'],$row['Gender'],
          $row['Address'],$row['PhoneNumber'],$row['Email'],$row['IDGroup']);
          $rowjson = $account->GetAccountJson();
          array_push($array,$rowjson);
      }
      $arr = array();
      $arr["data"] = $array;
      echo json_encode($arr);
?>
        
