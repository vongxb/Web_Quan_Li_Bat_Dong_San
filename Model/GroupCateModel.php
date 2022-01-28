<?php
    class GroupCateModel{
        public $GroupCateID;
        public $GroupCateName;

        public function GroupCateModel($GroupCateID,$GroupCateName){
            $this->GroupCateID = $GroupCateID;
            $this->GroupCateName = $GroupCateName;
        }
        public function GetGroupCateJson(){
            return [
                "GroupCateID" => $this->GroupCateID,
                "GroupCateName" => $this->GroupCateName
            ];
        }
    }
?>