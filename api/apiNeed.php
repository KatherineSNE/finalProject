
<?php
header ("Access-Control-Allow-Origin: *");
include '../config/connexion.php';
include '../model/need.php';
include '../manager/managerNeed.php';
$ingredient=new Mneed();
$addNeed = $ingredient->showAllNeed($bdd);
echo json_encode($addNeed);