<?php
    include 'head.php';

    session_start();
    if(!isset($_SESSION["user"]["email"])){
        header('Location: connect.php');
    }
?>

    <div id="containerUser">
        <div id="banniereUser">
            <div id="imgUser"></div>
        </div>
        <div>
            <div id="infoUser">
                <div id="fondInfo">
                    <div id="infoUser2">
                        <p>Nom :</p>
                        <p>Prenom :</p>
                        <p>Pseudo :</p>
                        <p>Email :</p>
                        <p>Role :</p>
                        <button id="disconnect">Deconnection</button>
                    </div>
                </div>


            </div>
        </div>
    </div>

<?php
    include 'footer.php';
?>