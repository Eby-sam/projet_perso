<?php
    session_start();
    if($_SESSION["accepted"]!=true){
        header("Location:login.php");
        exit();
    }
    if(date("H")<18)
        $bienvenue="Bonjour et bienvenue ".
            $_SESSION["pseudo"].
            " dans votre espace personnel";
    else
        $bienvenue="Bonsoir et bienvenue ".
            $_SESSION["pseudo"].
            " dans votre espace personnel";
?>
