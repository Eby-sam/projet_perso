<?php

use MinichatProjet\utils\checkIsset;
use MiniChat\Manager\userManager;


require_once $_SERVER['DOCUMENT_ROOT'] . '/Modele/Manager/UserManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/checkIsset.php';
session_start();

    if((new checkIsset())->issetPostParams('name', 'firstname', 'pseudo', 'email', 'password')) {

        $manager = new userManager();
        $manager->addUser($_POST['name'],$_POST['firstname'],$_POST['pseudo'],$_POST['email'],$_POST['password']);
        header('location: ../index.php');
        session_start();
    }

    else {
        header('location: ../Pages/inscription.php');
        echo "Les champs ne sont pas tous remplie";
    }