<?php

use MiniChat\Manager\userManager;

include $_SERVER['DOCUMENT_ROOT'] . '/Pages/_partials/head.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Modele/Manager/ArticleManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Modele/Manager/UserManager.php';

?>
<h2>Articles</h2>

<div class="containerArt">
    <div class="containerArticle">
    <?php
    $articleManager = new ArticleManager();
    $userManager = new UserManager();
    $articles = $articleManager->getAllArticles();

    foreach($articles as $key => $article) {
        $author = $userManager->getUser($article->getUser_fk()); ?>
        <div class="artAticle">
            <div class="artTitle">
                <h3><?= $article->getTitle() ?></h3>
            </div>
            <p>
               <?= $article->getContent() ?>
            </p>
            <h4>rédiger par: <?= $author->getPseudo() ?></h4>
        </div>
         <?php
    } ?>
    </div>

    <div class="containerform">
        <form action="/Modele/Manager/ArticleManager.php" method="post" id="formArt">
            <div class="divArea">
                <input type="text" class="inputArt" placeholder="titre">
            </div>
            <div class="divArea">
                <textarea id="textArt" name="story" placeholder="story"></textarea>
            </div>
            <div class="divArea">
                <input type="submit" class="inputArt">
            </div>
        </form>
    </div>
</div>
<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/Pages/_partials/footer.php';
?>

