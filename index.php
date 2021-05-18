<?php
include './_partials/head.php';
?>
    <header>
        <?php
            if(isset($_GET['succes']) && intval($_GET['succes'])===1) { ?>
                <div class="succes">les donnés ont bien était envoyer, merci !</div><?php
            }
        ?>
    </header>

    <div id="block-one">
        <div class="part1" id="info">
            <div class="titre">
                <h2>INFO</h2>
            </div>
            <div id="div_info">
                <p>
                <h3>Administrateurs:</h3> <span class="eby">EBY.666</span>
                </p>
                <p>
                <h3>Modérateurs :</h3> <span class="eby">"Postulez !!!"</span>
                </p>
                <p>
                <h3>Discord :</h3> <span class="eby"><a href="https://discord.gg/Mr6PxYWp6W" style="color:dodgerblue">cliquez ici ^^</a></span>
                </p>
                <p>
                <h3>Projet :</h3> <span class="eby">en cours</span>
                </p>
            </div>
        </div>
        <div class="part1" id="actu">
            <div class="titre">
                <h2>ACTU</h2>
                <p>bonjour je m'appel sam , hello world</p>
            </div>

        </div>
        <div class="part1" id="dev">
            <div class="titre">
                <h2>site</h2>
            </div>
            <div class="div_dev">
                <p>
                <h3>état du site :</h3> <span class="eby">en construction</span>
                </p>
                <p>
                <h3>avancement du site</h3> <span class="eby">10%</span>
                </p>
                <p>
                <h3>projet final</h3><span class="eby">en construction</span>
                </p>

            </div>
        </div>
    </div>


<?php
include './_partials/footer.php';
?>

