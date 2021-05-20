<?php

    function issetPostParams(string ...$params): bool {
        foreach ($params as $param){
            if(!isset($_POST[$param])) {
                return false;
            }
        }
        return true;
    }

session_start();
$pseudo=$_POST["pseudo"];
$pass=($_POST["pass"]);
$valider=$_POST["valider"];
$erreur="";

if(isset($valider)){
    include("connexion.php");
    $con = new PDO->prepare("select * from user where email=? and password=? limit 1");
    $con->execute(array($pseudo,$pass));
    $tab=$con->fetchAll();

    if(count($tab)>0){
        $_SESSION["pseudo"]=ucfirst(strtolower($tab[0]["pseudo"])).
            " ".strtoupper($tab[0]["pseudo"]);
        $_SESSION["autoriser"]="oui";
        header("location:session.php");
    }
    else
        $erreur="Mauvais pseudo ou mot de passe!";
}