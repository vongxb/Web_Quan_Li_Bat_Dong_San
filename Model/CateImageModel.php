<?php
    class CateImageModel{
        public $CateImageID;
        public $CateImageLink;
        public $CateID;
        public function CateImageModel($CateImageID,$CateImageLink,$CateID){
            $this->CateImageID = $CateImageID;
            $this->CateImageLink = $CateImageLink;
            $this->CateID = $CateID;
        }
        public function GetCateImageJson(){
            return [
                "CateImageID" => $this->CateImageID,
                "CateImageLink" => $this->CateImageLink,
                "CateID" => $this->CateID
            ];
        }
    }
?>