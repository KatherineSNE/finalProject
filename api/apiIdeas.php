<?php
header ("Access-Control-Allow-Origin: *");
include './config/connexion.php';
include './model/have.php';
include './manager/managerHave.php';

$type = 3;
$vis = 1;
$onep = 1;
$twop = 2;
$threep = 3;
$thought = new Mhave();
$idea=$thought->readHave($bdd,$type);
echo json_encode($idea); 