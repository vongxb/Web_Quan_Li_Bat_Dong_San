<?php
    class NewImageModel{
        public $NewImageID;
        public $NewImageLink;
        public $NewID;
        public function NewImageModel($NewImageID,$NewImageLink,$NewID){
            $this->NewImageID = $NewImageID;
            $this->NewImageLink = $NewImageLink;
            $this->NewID = $NewID;
        }
        public function GetNewImageJson(){
            return [
                "NewImageID" => $this->NewImageID,
                "NewImageLink" => $this->NewImageLink,
                "NewID" => $this->NewID
            ];
        }
    }
?>