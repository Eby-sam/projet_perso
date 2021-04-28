<?php
    include './_partials/head.php';
?>
    <form method="post" action="utils/connection.php">
        <div class="container2">
            <div class="formulaire">
                <div class="form2">
                    <p class="form">Pseudo</p>
                    <input type="text">
                </div>
                <div class="form2">
                    <p class="form">Mot de passe</p>
                    <input type="text">
                </div>
                <div>
                    <input type="submit" value="Connection" name="submit">
                </div>
            </div>
        </div>

<?php
    include './_partials/footer.php';
?>