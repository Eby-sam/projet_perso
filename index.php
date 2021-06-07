<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Modele/Manager/ArticleManager.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Modele/Manager/UserManager.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/DB.php';

    use MiniChat\Manager\userManager;
    use MiniChatProjet\Classes\DB;

    include 'Pages/_partials/head.php';
?>
    <header>
        <?php
            if(isset($_GET['succes']) && intval($_GET['succes'])===1) { ?>
                <div class="succes">les donnés ont bien était envoyer, merci !</div><?php
            }
        ?>
    </header>

    <div id="block-one">
        <div id="zone1">
            <div class="part1 part" id="actu">
                <h2>actualité</h2>
                <h3 class="actuTitle">Dernières CreepyPasta</h3>

                <?php
                $articleManager = new ArticleManager();
                $userManager = new UserManager();
                $articles = $articleManager->getAllArticles(5);

                foreach($articles as $key => $article) {
                    $author = $userManager->getUser($article->getUser_fk()); ?>
                    <div class="artAticle">
                        <div class="artTitle">
                            <h3><?= $article->getTitle() ?> (CreepyPasta)</h3>
                        </div>
                        <p class="story">
                            <?= nl2br($article->getContent()) ?>
                        </p>
                        <h4>posté par: <?= $author->getPseudo() ?></h4>
                        <div class="creatDelete">
                            <a href="Pages/article.php"> voir l'article -></a>
                        </div>
                    </div>
                    <?php
                } ?>
            </div>
        </div>

        <div id="zone2">
            <div class="part2 part" id="dev">
                <div class="title">
                    <h3>Articles récents</h3>
                </div>
                <div id="articleR">
                    <h3 class="actuTitle">dernières images</h3>
                    <div class="new-pics">
                        <?php
                        $request = DB::connectDB()->prepare("SELECT * FROM pic ORDER BY id DESC LIMIT 3");
                        $request->execute();
                        $images = $request->fetchAll();
                        foreach ($images as $image){
                            $src = '/Pages/upload/images/' . $image['img'];
                            ?>
                            <div class="file-news">
                            <img class="small-img" alt="<?= $image['img'] ?>" src="<?= $src ?>">
                            </div><?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
    include 'Pages/_partials/footer.php';
?>

