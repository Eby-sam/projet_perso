<?php
use MiniChatProjet\Classes\DB;

require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/DB.php';

if(isset($_GET['email'], $_GET['token'])){
    $request = DB::connectDB()->prepare("UPDATE user SET activate = 1 WHERE token = :token");

    $request->bindValue(':token', $_GET['token']);
    $request->execute();

    header("Location: ../index.php");
}