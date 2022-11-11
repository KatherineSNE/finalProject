<?php
session_start();
include './config/connexion.php';
include './model/user.php';
include './manager/managerUser.php';
$url = $_SERVER['REQUEST_URI'];
$url = explode("=", filter_var($url), FILTER_SANITIZE_URL);
if(isset($url[1])&&$url[1]!="" ){
    $hashLog = $url[1];
    $attente = 1;
    $wait = 0;
    $userCheck = new Muser();
    $checkSt = $userCheck->testLogin($bdd, $hashLog);
    if($checkSt==TRUE){
        $userCheck->updateStatus($bdd, $hashLog, $attente,$wait);
        header('Location:Verified');
    }
    else{
        echo 'Not verified';
    }
}
