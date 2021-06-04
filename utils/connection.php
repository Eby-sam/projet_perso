<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/utils/checkIsset.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/Classes/DB.php';

use MinichatProjet\utils\checkIsset;
use MiniChatProjet\Classes\DB;

session_start();
if((new checkIsset)->issetPostParams('email', 'password')) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        return false;
    }

    $sql = DB::connectDB()->prepare("SELECT * from user WHERE email = ?");

    $sql->execute([$_POST['email']]);
    $data = $sql->fetch();
    if(password_verify($_POST['password'] , $data['password'])) {
        $_SESSION['user']['email'] = $_POST['email'];
        header('location: ../index.php');
    }
    else  {
        $_SESSION['message'] = "le mot de passe est incorrect !";
        header('location: ../Pages/connect.php');
    }
}

else {
    header('location: ../Pages/connect.php');
}