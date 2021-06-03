<?php
    include 'head.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/View/_partials/pic/uploadImage.php';
?>
<h5> Galerie d'image </h5>

<div id="galerieForm">
    <form method="POST" action="pic/uploadImage.php" enctype="multipart/form-data">
        <input type="text" name="imgName" placeholder="nom de l'image" class="fichier">
        <input type="file" name="img" id="img" class="fichier" />&nbsp;( Max : 8Mo)<br>
        <div><input type="submit" class="btn fichier" value="envoyer" /></div>
        <input type="hidden" value="b" name="env"/>
    </form>
    <div id="lookImg">
        <?php

        ?>
    </div>
</div>


<?php
     include 'footer.php';
?>
