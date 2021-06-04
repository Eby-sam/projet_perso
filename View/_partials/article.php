<?php
    include 'head.php';
?>
<h2>Article</h2>

    <div class="containerArt">
        <div class="containerArticle">
            <div class="artAticle">
                <div class="artTitle">
                    <h3>Titre</h3>
                </div>
                <h4>name or pseudo :</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut facere odio voluptates?
                    Accusamus, aliquam aut cupiditate in iusto non quaerat quam quasi, quis sapiente, sed sunt tempore ullam
                    voluptas?
                </p>
            </div>
            <div class="artAticle">
                <div class="artTitle">
                    <h3>Titre</h3>
                </div>
                <h4>name or pseudo :</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut facere odio voluptates?
                    Accusamus, aliquam aut cupiditate in iusto non quaerat quam quasi, quis sapiente, sed sunt tempore ullam
                    voluptas?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut facere odio voluptates?
                    Accusamus, aliquam aut cupiditate in iusto non quaerat quam quasi, quis sapiente, sed sunt tempore ullam
                    voluptas?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut facere odio voluptates?
                    Accusamus, aliquam aut cupiditate in iusto non quaerat quam quasi, quis sapiente, sed sunt tempore ullam
                    voluptas?
                </p>
            </div>
            <?php

            ?>
        </div>
        <div class="containerform">
            <form action="/Modele/Manager/articleM.php" method="post" id="formArt">
                <div class="divArea">
                    <input type="text" class="inputArt" placeholder="pseudo" >
                </div>
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
    include 'footer.php';
?>

