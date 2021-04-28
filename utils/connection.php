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
    $sel = new PDO ->prepare("select * from utilisateurs where pseudo=? and pass=? limit 1");
    $sel->execute(array($pseudo,$pass));
    $tab=$sel->fetchAll();
    if(count($tab)>0){
        $_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["prenom"])).
            " ".strtoupper($tab[0]["nom"]);
        $_SESSION["autoriser"]="oui";
        header("location:session.php");
    }
    else
        $erreur="Mauvais login ou mot de passe!";
}
