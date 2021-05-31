<?php
    include 'head.php';
    if(isset($_POST["env"])){
        $logo=$_FILES['photo']['name'];

        if($logo!=""){
            require "uploadImage.php";
            if($sortie==false){$logo=$dest_dossier . $dest_fichier;}
            else {$logo="notdid";}
        }
        if($logo!="notdid"){
            echo "upload reussi!!!";

        }
        else{
            echo"recommence!!!";
        }
    }
?>

    <form method="POST" action="/utils/uploadimage.php">

        <div><h5> Ins&eacute;rer une image </h5> <input type="file" name="photo" id="photo" /> </div>

        <div><input type="submit" class="btn" value="envoyer" /></div>
        <input type="hidden" value="b" name="env"/>
    </form>

<?php
     include 'footer.php';
?>
