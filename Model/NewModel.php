<?php
class NewModel{
    public $NewID;
    public $NewName;
    public $NewContent;
    public $NewDatePost;
    public $NewCount;

    public function NewModel($NewID,$NewName,$NewContent,$NewDatePost,$NewCount){
        $this->NewID = $NewID;
        $this->NewName = $NewName;
        $this->NewContent = $NewContent;
        $this->NewDatePost = $NewDatePost;
        $this->NewCount = $NewCount;
    }

    public function GetNewJson(){
        return [
            "NewID" => $this->NewID,
            "NewName" => $this->NewName,
            "NewContent" => $this->NewContent,
            "NewDatePost" => $this->NewDatePost,
            "NewCount" => $this->NewCount
        ];
    }
}
?>