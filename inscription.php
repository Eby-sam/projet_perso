<?php
    include './_partials/head.php';
?>
    <form method="post" action="utils/insert.php">
        <div id="container2" class="container2">
            <div class="large">
                <div class="formulaire">
                    <h1>Inscription</h1>
                    <input type="text" name="name" id="name" placeholder="nom">
                    <input type="text" name="firstname" id="id-firstname" placeholder="prenom">
                    <input type="text" name="pseudo" id="id-pseudo" placeholder="pseudo">
                    <input type="email" name="email" id="id-email" placeholder="email">
                    <input type="password" name="password" id="id-password" placeholder="Password">
                    <input type="submit" class="envoi">
                </div>
            </div>





        </div>
    </form>

<?php
    include './_partials/footer.php';
?>
