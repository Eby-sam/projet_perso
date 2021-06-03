<?php
    include 'head.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/DB.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/View/_partials/pic/uploadImage.php';
    use MinichatProjet\Classes\DB;
use MinichatProjet\Entity\pic;

?>
<h5> Galerie d'image </h5>

<div id="galerieForm">
    <form method="POST" action="pic/uploadImage.php" enctype="multipart/form-data" class="formFile">
        <input type="text" name="imgName" placeholder="nom de l'image" class="fichier"><br>
        <input type="file" name="img" id="img" class="fichier" />&nbsp;( Max : 8Mo)<br>
        <div><input type="submit" class="btn fichier" value="envoyer" /></div>
        <input type="hidden" value="b" name="env"/>
    </form>
    <div id="lookImg">
        <?php
            $request = DB::connectDB()->prepare("SELECT * FROM pic");
            $request->execute();

            $images = $request->fetchAll();
            foreach ($images as $image){
                $src = '/View/_partials/pic/' . $image['img'];
                //if(file_exists($src)){?>
                    <div class="fileDiv">
                        <img class="small-img" alt="<?= $image['img'] ?>" src="<?= $src ?>">
                    </div><?php

                //}
            }

        ?>
    </div>
</div>


<?php
     include 'footer.php';
?>
