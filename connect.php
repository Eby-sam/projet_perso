<?php
    include './_partials/head.php';
?>
    <form method="post" action="utils/connection.php">
        <div class="container3 container">
            <div class="large">
                <div class="formulaire">
                    <h1>Connexion</h1>
                    <input type="email" name="email" id="id-email" placeholder="email">
                    <input type="password" name="password" id="id-password" placeholder="Password">
                    <input type="submit" class="envoi">
                </div>
            </div>
        </div>

<?php
    include './_partials/footer.php';
?>