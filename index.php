<?php
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
                <div class="title">
                    <h2>Actualité</h2>
                </div>
                <div id="article">


                </div>
            </div>
        </div>

        <div id="zone2">
            <div class="part2 part" id="dev">
                <div class="title">
                    <h3>Articles récents</h3>
                </div>
                <div id="articleR">
                    <p>test</p>
                    <p>test</p>
                    <p>test</p>
                    <p>test</p>
                    <p>test</p>
                    <p>test</p>
                    <p>test</p>
                </div>
            </div>
        </div>
    </div>


<?php
    include 'Pages/_partials/footer.php';
?>

