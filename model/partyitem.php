<?php
class Partyitem{
    private $id_partyitem;
    private $name_partyitem;
    private $image_partyitem;
    private $description_partyitem;
    private $visibility_partyitem;
    private $id_type_partyitem;
    

public function getId(){
    return $this->id_partyitem;
}

public function setId($newId){
    $this->id_partyitem = $newId;
}

public function getName(){
    return $this->name_partyitem;
}

public function setName($newName){
    $this->name_partyitem = $newName;
}

public function getImage(){
    return $this->image_partyitem;
}

public function setImage($newImage){
    $this->image_partyitem = $newImage;
}

public function getDescription(){
    return $this->description_partyitem;
}

public function setDescription($newDescription){
    $this->description_partyitem = $newDescription;
}

public function getVisibility(){
    return $this->visibility_partyitem;
}

public function setVisibility($newVisibility){
    $this->visibility_partyitem = $newVisibility;
}

public function getType(){
    return $this->id_type_partyitem;
}

public function setType($newType){
    $this->id_type_partyitem = $newType;
}

}



