<?php

use MiniChat\Manager\userManager;
require_once $_SERVER['DOCUMENT_ROOT'] . '/Modele/Manager/UserManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Modele/Manager/RoleManager.php';

include $_SERVER['DOCUMENT_ROOT'] . '/Pages/_partials/head.php';
    if(!isset($_SESSION["user"]["email"])){
        header('Location: ../connect.php');
    }
?>

<div id="containerUser">
    <div id="banniereUser">
        <div id="imgUser"></div>
    </div>
    <div>
        <div id="infoUser">
            <div id="fondInfo">
                <div id="infoUser2">
                    <?php
                        $user = new userManager();
                        $role = new RoleManager();
                        $userData = $user->getUser($_SESSION['id']);
                    ?>
                    <p>Nom :
                        <?= $userData->getName() ?>
                    </p>
                    <p>Prenom :
                        <?= $userData->getFirstname() ?>
                    </p>
                    <p>Pseudo : <?= $userData->getPseudo() ?>
                    </p>
                    <p>Email :
                        <?= $userData->getEmail() ?>
                    </p>
                    <p>Role :
                        <?= $userData->getRoleFk() ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/Pages/_partials/footer.php';
?>