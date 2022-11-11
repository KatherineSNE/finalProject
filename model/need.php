<?php
class Need{
    private $id_need;
    private $name_need;
    private $id_type_need;

public function getId(){
    return $this->id_need;
}
public function setId($newId){
    $this->id_need = $newId;
}

public function getName(){
    return $this->name_need;
}

public function setName($newName){
    $this->name_need = $newName;
}

public function getType(){
    return $this->id_type_need;
}

public function setType($idType){
    $this->id_type_need = $idType;
}




}
