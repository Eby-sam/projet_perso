<?php

    use MiniChat\Manager\userManager;

    include $_SERVER['DOCUMENT_ROOT'] . '/Pages/_partials/head.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Modele/Manager/ArticleManager.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Modele/Manager/UserManager.php';



?>
<h2>CreepyPasta</h2>

<div class="containerArt">
    <div class="containerForm">
        <button id="addAppears">ajouté une CreepyPasta</button>
        <div id="contForm">
            <form action="/utils/insertArticle.php" method="post" id="formArt">
                <div class="divArea">
                    <input type="text" name="title" class="inputArt" placeholder="titre" required>
                </div>
                <div class="divArea">
                    <textarea id="textArt" name="content" placeholder="story" required></textarea>
                </div>
                <div class="divArea">
                    <input type="submit" class="inputArt">
                </div>
            </form>
        </div>

    </div>


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
            <p class="story">
               <?= nl2br($article->getContent()) ?>
            </p>
            <h4>posté par: <?= $author->getPseudo() ?></h4>
            <button class="storyC">story ↓ ↑</button>
        </div>
         <?php
    } ?>
    </div>


</div>
<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/Pages/_partials/footer.php';
?>

