<?php
session_start();
?>
<!-- Head of Pages -->
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://kit.fontawesome.com/52cbc63ebe.js" crossorigin="anonymous"></script>
    <title>Creepy-Blog</title>
</head>
<body> <?php

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    echo 'Bonjour ' . $_SESSION['pseudo'];
} ?>

    <div id="div-title">
        <h1 id="title">CREEPY-BLOG</h1>
    </div>

    <div id="banniere">
       <ul id="listeBanniere">
           <li><a href="/index.php">acceuil</a></li>
           <li><a href="/Pages/menu.php">menu</a></li>

           <?php
            if(isset($_SESSION['user'])) { ?>
                <li>
                    <a href="/Pages/user.php"><i class="fas fa-user"> user</i></a>
                </li>
                <li>
                    <a href="/utils/deconnexion.php"><i class="fas fa-sign-out-alt"></i></a>
                </li> <?php
            }
            else { ?>
                <li>
                    <a href="/Pages/inscription.php">inscription</a>
                </li>
                <li>
                    <a href="/Pages/connect.php">connection</a>
                </li> <?php
            } ?>
       </ul>
    </div>

