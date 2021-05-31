<?php
    include 'head.php';
?>
    <form method="post" action="../../utils/connection.php">
        <div class="containerConnect container">
            <div class="large">
                <div class="formulaire">
                    <h1>Connexion</h1>
                    <input type="email" name="email" id="id-email" placeholder="email" required>
                    <input type="password" name="password" id="id-password" placeholder="Password" required>
                    <input type="submit" class="envoi">
                </div>
            </div>
        </div>

<?php
    include 'footer.php';
?>