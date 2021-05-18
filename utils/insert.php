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
    if(empty($_POST['name']) || empty($_POST['firstname']) || empty($_POST['pseudo']) ||  empty($_POST['email'])
     || empty($_POST['password'])) {
        return false;
    }

    try {
        $server = 'localhost';
        $db = 'projet_perso';
        $user = 'root';
        $pass = '';

        $bdd = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pass);

        $sql = $bdd->prepare("INSERT INTO user (name,firstname,pseudo,email,password)
                VALUES ( ?, ?, ?, ?, ?)");


        $sql->execute([$_POST['name'], $_POST['firstname'],$_POST['pseudo'],
                      $_POST['email'], $_POST['password']]);

        session_start();
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