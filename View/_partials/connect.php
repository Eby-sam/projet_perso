<?php
    include 'head.php';
    session_start();
?>
    <form method="post" action="../../utils/connection.php">
        <div class="containerConnect container">
            <div class="large">
                <div class="formulaire">
                    <h1>Connexion</h1>
                    <input type="email" name="email" id="id-email" placeholder="email" required>
                    <input type="password" name="password" id="id-password" placeholder="Password" required>
                    <input type="submit" class="envoi">
                    <?php
                        if(isset($_SESSION['message'])) {
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                         }
                    ?>
                </div>
            </div>
        </div>

<?php
    include 'footer.php';
?>