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

        $sql = $bdd->prepare("INSERT INTO user (name, firstname, pseudo, email, password, role_fk)
                VALUES ( ?, ?, ?, ?, ?, 2)");


        $sql->execute([$_POST['name'], $_POST['firstname'], $_POST['pseudo'],
                      $_POST['email'], password_hash($_POST['password'], PASSWORD_DEFAULT)]);
        $data = $sql->fetch();

        $_SESSION['user']['email'] = $_POST['email'];
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