<?php

function issetPostParams(string ...$params): bool {
    foreach ($params as $param){
        if(!isset($_POST[$param])) {
            return false;
        }
    }
    return true;
}

if(issetPostParams('name', 'firstname', 'pseudo', 'email', 'password')) {
    try {
        $server = 'localhost';
        $db = 'projet_perso';
        $user = 'root';
        $pass = '';

        $bdd = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pass);

        $nom = $_POST['name'];
        $prenom = $_POST['firstname'];
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = $bdd->prepare("INSERT INTO utilisateur (nom,prenom,pseudo,email,password)
                VALUES (:nom,:prenom,:pseudo,:email,:password)");

        $sql->bindParam(":nom",$nom);
        $sql->bindParam(":prenom",$prenom);
        $sql->bindParam(":pseudo",$pseudo);
        $sql->bindParam(":email",$email);
        $sql->bindParam(":password",$password);

        $sql->execute();
        header('location: ../index.php');
    }
    catch (PDOException$exception) {
        echo $exception->getMessage();
    }
}
else {
    header('location: ../inscription.php');
    echo "Les champs ne sont pas tous remplie";
}




