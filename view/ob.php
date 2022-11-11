<?php
//?----------------------------------
//! CONNECTED MESSAGE
//?----------------------------------
ob_start();
?>
<section>
    <p>Welcome to the party!!!!</p>
    <p>Votre compte a été Activé</p>
    <p>This page will self destruct you can login in</p>
    <p id=ready></p>
    <p id="counter" load="Login()">5</p>
</section>
<?php
$connected = ob_get_clean();
//?----------------------------------
//! CONNECTED MESSAGE
//?----------------------------------
ob_start();
?>

