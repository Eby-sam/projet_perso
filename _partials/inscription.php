<?php
    include 'head.php';
?>
    <form method="post" action="/utils/insert.php">
        <div id="container2" class="containerInscript container">
            <div class="large">
                <div class="formulaire">
                    <h1>Inscription</h1>
                    <input type="text" name="name" id="name" placeholder="nom" required>
                    <input type="text" name="firstname" id="id-firstname" placeholder="prenom" required>
                    <input type="text" name="pseudo" id="id-pseudo" placeholder="pseudo" required>
                    <input type="email" name="email" id="id-email" placeholder="email" required>
                    <input type="password" name="password" id="id-password" placeholder="Password" required>
                    <input type="submit" class="envoi">
                </div>
            </div>
        </div>
    </form>

<?php
    include 'footer.php';
?>