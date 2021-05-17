<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>EBY.DEV</title>
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
    </div>

