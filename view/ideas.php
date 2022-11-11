<?php

include './header/header.php';
include './view/menu.php';

if (isset($_SESSION['connected'])&&$_SESSION['rights']==2){
    ?>
    <div>
    <p>Salut <?=$_SESSION['name']?>! T'es sur la page des ideas! </p>
    </div>
    <?php
    }
    else if(isset($_SESSION['connected'])&& $_SESSION['rights']==1){
    ?>
    <div>
    <p>Salut <?=$_SESSION['name']?>! T'es sur la page des ideas! </p>
    </div>
    <div id="breadcrumb">
    <p>Ajoutes des ideas à ton "planner" pour ta fête et gardes-les pour plus tard!</p>
    <p>Et n'oublies pas, demande toujours ta mere avent tu fait le vodka dans le machine vaiselle!!</p>
    </div>
<?php
}
else{
?>
<div><p>Tu n'es pas encore au PARTY! Connectes-toi pour organiser ta fête! Come join us!</p></div>
<?php
}
?>
<body>
<section id="idea">

</section>

</body>
</html>


</body>
</html>