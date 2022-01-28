<?php
    include('../Connect.php');
    $query = mysqli_query($conn,"SELECT NewImage.NewID,NewName,NewContent,NewDatePost,NewCount,NewImageLink 
                                FROM News INNER JOIN NewImage on News.NewID = NewImage.NewID ORDER BY NewDatePost DESC LIMIT 1");
    $array = array();
    include('../Model/MainCateNewViewModel.php');
    while($row = mysqli_fetch_array($query)){
        $maincatenewview = new MainCateNewViewModel($row['NewID'],$row['NewName'],$row['NewContent'],$row['NewDatePost'],$row['NewCount'],$row['NewImageLink']);
        $maincatenewviewjson = $maincatenewview->GetMainCateNewViewJson();
        array_push($array,$maincatenewviewjson);
    }
    $arr = array();
    $arr['data'] = $array;
    echo json_encode($arr);
?>