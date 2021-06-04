<?php

use MiniChat\Manager\userManager;

include $_SERVER['DOCUMENT_ROOT'] . '/Pages/_partials/head.php';
    session_start();
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
                    $name = new userManager();
                    $Firstname = new userManager();
                    $pseudo = new userManager();
                    $email = new userManager();
                    $role_fk = new userManager();
                    ?>
                    <p>Nom : <?= $name->getName() ?></p>
                    <p>Prenom : <?= $Firstname->getFirstname() ?></p>
                    <p>Pseudo : <?= $pseudo->getPseudo() ?></p>
                    <p>Email : <?= $email->getEmail() ?></p>
                    <p>Role : <?= $role_fk->getRole_fk() ?></p>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/Pages/_partials/footer.php';
?>