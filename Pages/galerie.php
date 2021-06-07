<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/Pages/_partials/head.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/DB.php';
    use MinichatProjet\Classes\DB;
?>

<h5> Galerie d'image </h5>

<div id="galerieForm">
    <form method="POST" action="../utils/uploadImage.php" enctype="multipart/form-data" class="formFile">
        <input type="file" name="img" id="img" class="fichier" />&nbsp;( Max : 8Mo)<br>
        <div><input type="submit" class="btn fichier" value="envoyer" /></div>
        <input type="hidden" value="b" name="env"/>
    </form>
    <div id="lookImg">
        <?php
            $request = DB::connectDB()->prepare("SELECT * FROM pic ORDER BY id DESC");
            $request->execute();
            $images = $request->fetchAll();
            foreach ($images as $image){
                $src = '/Pages/upload/images/' . $image['img'];
                //if(file_exists($src)){?>

                    <div class="fileDiv">
                        <img class="small-img" alt="<?= $image['img'] ?>" src="<?= $src ?>">
                    </div><?php

                //}
            }
        ?>
    </div>
</div>
