<?php

use MinichatProjet\utils\checkIsset;
use MiniChat\Manager\userM;


require_once $_SERVER['DOCUMENT_ROOT'] . '/Modele/Manager/userM.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/checkIsset.php';

    if((new checkIsset())->issetPostParams('name', 'firstname', 'pseudo', 'email', 'password')) {

        $manager = new userM();
        $manager->addUser($_POST['name'],$_POST['firstname'],$_POST['pseudo'],$_POST['email'],$_POST['password']);
        header('location: ../index.php');
    }

    else {
        header('location: ../inscription.php');
        echo "Les champs ne sont pas tous remplie";
    }