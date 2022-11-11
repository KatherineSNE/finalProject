<?php
include './config/connexion.php';
include './model/partyitem.php';
include './manager/managerPartyitem.php';
include './model/need.php';
include './manager/managerNeed.php';
include './model/have.php';
include './manager/managerHave.php';
include './view/createPartyItem.php';

if((isset($_POST['name_partyitem']))&&(isset($_POST['image_partyitem']))&&(isset($_POST['description_partyitem']))
&&(isset($_POST['visibility_partyitem']))&&(isset($_POST['id_type_partyitem']))){
    $go = new Mpartyitem();
    $go->setName(htmlspecialchars(strip_tags(trim($_POST['name_partyitem']))));
    $go->setImage(htmlspecialchars(strip_tags(trim($_POST['image_partyitem']))));
    $go->setDescription(htmlspecialchars(strip_tags(trim($_POST['description_partyitem']))));
    $go->setVisibility(htmlspecialchars(strip_tags(trim($_POST['visibility_partyitem']))));
    $go->setType(htmlspecialchars(strip_tags(trim($_POST['id_type_partyitem']))));
}

if(isset($_POST['add_partyitem'])){
    $name = $go->getName();
    $im =   $go->getImage();
    $des = $go->getDescription();
    $vis = $go->getVisibility();
    $typ = $go->getType();

        if($go->partyitemExist($bdd, $name)==true){
           
        $go->createPartyitem($bdd, $name, $im, $des, $vis, $typ);
        echo'<script>alert("partyitem has been added")</script>';
        }
    else{
        echo'<script>alert("partyitemitem already exists")</script>';
        }
}
 
if(isset($_POST['name_need'])&&isset($_POST['id_type_need'])){
   
    $need = new Mneed();
    if(isset($_POST['add_need'])){
        $need->setName(htmlspecialchars(strip_tags(trim($_POST['name_need']))));
        $need->setType(htmlspecialchars(strip_tags(trim($_POST['id_type_need'])))); 
        $nmne =$need->getName();
        $tyne =$need->getType();
            if($need->needExist($bdd,$nmne)==true){
                $need->createNeed($bdd, $nmne, $tyne);
                echo'<script>alert("item has been added")</script>';
                }
            else{
                echo'<script>alert("item already exists")</script>';
                }
            }
         }


if(isset($_POST['id_partyitem'])&&isset($_POST['id_need'])&&isset($_POST['placement'])){
    $have = new Mhave();
if(isset($_POST['add_have'])){
  

    $have->setIdPar(htmlspecialchars(strip_tags(trim($_POST['id_partyitem']))));
    $have->setIdNeed(htmlspecialchars(strip_tags(trim($_POST['id_need']))));
    $have->setPlacement(htmlspecialchars(strip_tags(trim($_POST['placement']))));
    $havidp = $have->getIdPar();
    $havidn = $have->getIdNeed();
    $havepl=$have->getPlacement();
    $have->createHave($bdd,$havidp,$havidn,$havepl);
    echo'<script>alert("item has been added")</script>';
}
else{
echo'<script>alert("item not added")</script>';
}

}



