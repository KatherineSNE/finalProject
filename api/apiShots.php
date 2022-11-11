<?php
header ("Access-Control-Allow-Origin: *");
include '../config/connexion.php';
include '../model/have.php';
include '../manager/managerHave.php';

$type = 1;
$vis = 1;
$onep = 1;
$twop = 2;
$threep = 3;


$shooter = new Mhave();
$shot=$shooter->readHave($bdd,$type,$vis,$onep,$twop,$threep);
echo json_encode($shot);








