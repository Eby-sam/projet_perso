<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Modele/Manager/ArticleManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/checkIsset.php';
session_start();

if((new checkIsset())->issetPostParams('title', 'content')) {

    $manager = new ArticleManager();
    $manager->addArticle($_POST['title'],$_POST['content'],$_SESSION['id']);
    header('location: ../Pages/article.php');
}

else {
    header('location: ../Pages/menu.php');
    echo "Les champs ne sont pas tous remplie";
}