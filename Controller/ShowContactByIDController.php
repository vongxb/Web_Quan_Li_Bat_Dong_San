<?php
    include('../Connect.php');
    $query = mysqli_query($conn,"SELECT * FROM Contact WHERE ContactID = ".$_POST['ContactID']);
    $array = array();
    include('../Model/ContactModel.php');
    while($row = mysqli_fetch_array($query)){
        $contact = new ContactModel($row['ContactID'],$row['ContactName'],$row['ContactAddress'],$row['ContactPhone'],$row['ContactEmail']);
        $contactjson = $contact->GetContactJson();
        array_push($array,$contactjson);
    }
    $arr = array();
    $arr['data'] = $array;
    echo json_encode($arr);
?>