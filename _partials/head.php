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
       <ul id="listeBanniere">
           <li><a href="/index.php">acceuil</a></li>
           <li><a href="/_partials/menu.php">menu</a></li>
           <li><a href="/_partials/inscription.php">inscription</a></li>
           <li><a href="/_partials/connect.php">connection</a></li>
           <li><a href="user.php"><i class="fas fa-user"> user</i></a></li>
       </ul>
    </div>

