<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Modele/Manager/ArticleManager.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Modele/Manager/UserManager.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Modele/Entity/Article.php';


$articleManager = new ArticleManager();
$articles = $articleManager->getArticle($article);

foreach($articles as $key => $article) {


    $delete = $articleManager->deleteArticle($article->getId());
    if ($delete) {
        header('location: ../../Pages/article.php');
    }
}

?>}