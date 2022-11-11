<?php
if(isset($_SESSION['connected'])&&($_SESSION['rights'])==1){
?>
    <header>
    </header>
    <nav>
        <a href="TuEsPartiTôt!"><li>Déconnexion</li></a>
        <a href="SelectionnerIdea"><li>Idées</li></a>
        <a href="ChoisirShooter"><li>Shooters</li></a>
        <a href="PartyOn!"><li>Planner</li></a>
        <a href="Contact"><li>Compte</li></a>
    </nav>
<?php
}
    else if(isset($_SESSION['rights'])==2){
?>
        <header id=home>
        </header>
        <nav>
            <a href="TuEsPartiTôt!"><li>Deconnexion</li></a>
            <a href="SelectionnerIdea"><li>Idées</li></a>
            <a href="ChoisirShooter"><li>Shooters</li></a>
            <a href="685732145AdMinAreABossInDaHouse!"><li>Admin</li></a>
        </nav>
<?php
    }
 else if($_GET['page']=="Create"){
    ?>
    <header>
    </header>
    <nav>
                <a href="Contact"><li>Contact</li></a>
    </nav>
    <?php
}
    else{
        ?>
        <header>
        </header>
            <nav>
                <a href="connect "><li>Connexion</li></a>
                <a href="Create"><li>Inscription</li></a>
                <a href="ChoisirShooter"><li>Shooters</li></a>
                <a href="Contact"><li>Contact</li></a>
            </nav>
        <?php
    }
    
    ?>
    
            
            

        


