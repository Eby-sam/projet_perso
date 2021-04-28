<?php
    print_r($_POST);
    echo "name:". $_POST['name']. "<br>";
    echo "firstname:". $_POST['firstname']. "<br>";
    echo "pseudo:" . $_POST['pseudo']. "<br>";
    echo "email:". $_POST['mail']. "<br>";
    echo "pseudo:". $_POST['username']. "<br>";
    echo "password:". $_POST['password']. "<br>";

header('location: ../index.php');