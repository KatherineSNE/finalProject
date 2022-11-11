<?php
header ("Access-Control-Allow-Origin: *");
include '../config/connexion.php';
include '../model/partyitem.php';
include '../manager/managerPartyitem.php';


$fete = new Mpartyitem();
$shot=$fete->showAllItems($bdd);
echo json_encode($shot);
