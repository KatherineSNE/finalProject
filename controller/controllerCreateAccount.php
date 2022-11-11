<?php
session_start();
include './config/connexion.php';
include './model/user.php';
include './manager/managerUser.php';
include './view/createuser.php';



if(isset($_POST['name_user'])&&isset($_POST['surname_user'])&&
   isset($_POST['email_user'])&&($_POST['password_user'])&&isset($_POST['id_rights'])){

    if($_POST['password_user']!=$_POST['confirmPassword']){
  
        header('Location: TryAgain');
    }else{           
            $user = new Muser();    
            $user->setName(htmlspecialchars(strip_tags(trim($_POST['name_user']))));
            $user->setSurname(htmlspecialchars(strip_tags(trim($_POST['surname_user']))));
            $user->setEmail(htmlspecialchars(strip_tags(trim($_POST['email_user']))));
            $user->setPassword(htmlspecialchars(strip_tags(trim(password_hash($_POST['password_user'], PASSWORD_DEFAULT)))));
            $user->setIdRights(htmlspecialchars(strip_tags(trim($_POST['id_rights']))));
            $user->setStat(htmlspecialchars(strip_tags(trim($_POST['status_user']))));
            $user->setHash(htmlspecialchars(strip_tags(trim(md5($_POST['email_user'])))));
            $nameUser = $user->getName();
            $mail= $user->getEmail(); 
            $nomfam = $user->getSurname();
            $mdp = $user->getPassword() ;
            $stat = $user->getStat();
            $rights = $user->getIdRights();
            $hlog = $user->getHash();
            $emailUser = $_POST['email_user'];
            $ref=$user->userExist($bdd,$emailUser);
                if($ref&&isset($_POST['submit'])){
                    $attente = 0;
                    $hashLog = md5($_POST['email_user']);
                    $user->createUser($bdd,$nameUser,$nomfam,$mail,$mdp,$rights,$stat, $attente, $hashLog);
                    $userEmail = "katherinesneddon33@gmail.com";
                    $subject = "Welcome to the Party!!!!";
                    $emailMessage =  "Veuillez cliquer sur le lien pour activer votre compte<br><br>
                                    http://localhost/partytimeFilRouge/LoginToPartyWithTheBest?hash=$hashLog";
                    $user->sendMail($userEmail,$subject,$emailMessage);
                    echo'<script>window.location.href="verifyEmail"</script>';
            }
            
          
            else{
                header('Location: AlreadyPartying!');
            }
          
       } 
   }


  
   











    

?>  