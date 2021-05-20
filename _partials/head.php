<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://kit.fontawesome.com/52cbc63ebe.js" crossorigin="anonymous"></script>
    <title>Creepy-Blog</title>
</head>
<body>
    <?php
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    echo 'Bonjour ' . $_SESSION['pseudo'];
} ?>

    <div id="div-titre">
        <h1 id="title">CREEPY-BLOG</h1>
    </div>

    <div id="banniere">
        <div id="accueil">accueil</div>
        <div id="menu">
            <div id="menu">menu</div>
            <div id="child">
                <div>Galerie</div>
            </div>
        </div>
        <div id="sign">inscription</div>
        <div id="connect">connection</div>
        <div><i class="fas fa-sign-out-alt"></i></div>
        <div id="user"><i class="fas fa-user"></i></div>
    </div>

