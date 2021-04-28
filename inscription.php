<?php
    include './_partials/head.php';
?>
    <form method="post" action="utils/insert.php">
        <div id="container2" class="container2">
            <div class="formulaire">
                <div class="form2">
                    <label for="id-name"><p class="form">Nom</p></label>
                    <input type="text" name="name" id="id-name">
                </div>
                <div class="form2">
                    <label for="id-firstname"><p class="form">Prenom</p></label>
                    <input type="text" name="firstname" id="id-firstname">
                </div>
                <div class="form2">
                    <label for="id-pseudo"><p class="form">Pseudo</p></label>
                    <input type="text" name="pseudo" id="id-pseudo">
                </div>
                <div class="form2">
                    <label for="id-mail"><p class="form">Mail</p></label>
                    <input type="email" name="email" id="id-mail">
                </div>
                <div class="form2">
                    <label for="id-password"><p class="form">Mot de passe</p></label>
                    <input type="password" name="password" id="id-password">
                </div>
                <div>
                    <input type="submit" value="Envoyer" name="submit">
                </div>
            </div>
        </div>
    </form>

<?php
    include './_partials/footer.php';
?>
