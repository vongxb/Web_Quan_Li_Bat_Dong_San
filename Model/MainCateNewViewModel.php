<?php
    class MainCateNewViewModel{
        private $NewID;
        private $NewName;
        private $NewContent;
        private $NewDatePost;
        private $NewCount;
        private $NewImageLink;

        public function MainCateNewViewModel($NewID,$NewName,$NewContent,$NewDatePost,$NewCount,$NewImageLink){
            $this->NewID = $NewID;
            $this->NewName = $NewName;
            $this->NewContent = $NewContent;
            $this->NewDatePost = $NewDatePost;
            $this->NewCount = $NewCount;
            $this->NewImageLink = $NewImageLink;
        }
        public function GetMainCateNewViewJson(){
            return [
                "NewID" => $this->NewID,
                "NewName" => $this->NewName,
                "NewContent" => $this->NewContent,
                "NewDatePost" => $this->NewDatePost,
                "NewCount" => $this->NewCount,
                "NewImageLink" => $this->NewImageLink
            ];
        }
    }
?>