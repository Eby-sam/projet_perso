<?php
ini_set("display_errors", E_ALL);
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Modele/Manager/ArticleManager.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Modele/Manager/UserManager.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Modele/Entity/Article.php';

if(isset($_GET['id'])){

    $articleManager = new ArticleManager();
    $articles = $articleManager->getArticle($_GET['id']);
    $delete = $articleManager->deleteArticle($articles->getId());
    if ($delete) {
        header('location: ../../Pages/article.php');
    }
}
?>
