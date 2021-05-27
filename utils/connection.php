<?php
session_start();
    function issetPostParams(string ...$params): bool {
        foreach ($params as $param){
            if(!isset($_POST[$param])) {
                return false;
            }
        }
        return true;
    }
if(issetPostParams('email', 'password')) {

    if (empty($_POST['email']) || empty($_POST['password'])) {
        return false;
    }

    try {
        $server = 'localhost';
        $db = 'projet_perso';
        $user = 'root';
        $pass = '';

        $bdd = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pass);

        $sql = $bdd->prepare("SELECT * from user WHERE email = ?");

        $sql->execute([$_POST['email']]);
        $data = $sql->fetch();
        if(password_verify($_POST['password'] , $data['password'])) {
            $_SESSION['user']['email'] = $_POST['email'];
            header('location: ../index.php');
        }



    }

    catch (PDOException$exception) {
        echo $exception->getMessage();
    }
}

else {
    header('location: ../connect.php');
    echo "Les champs ne sont pas tous remplie";
}