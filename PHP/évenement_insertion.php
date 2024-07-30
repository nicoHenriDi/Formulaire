<?php
    include("Connexion_base_de_données.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>insertion événement</title>
    </head>
    <body>
        <form action="évenement_insertion.php" method="post" enctype="multipart/form-data">
                <input type="text" name="nom_evenement" placeholder="Nom">
                <input type="text" name="information" placeholder="Information">
                <input type="file" name="image" placeholder="Image">
                <button type="submit" name="submit">enregistrer</button>
        </form>
    </body>
    <!--Insertion base de données-->
            <?php
            //insertion base de donnée
            if(isset($_POST["submit"])){
            $file="";
            $file=$_FILES["image"]["name"];
            $upload="../Image/".$file;
            move_uploaded_file($_FILES["image"]["tmp_name"],$upload);
            
            $insertion=$connexion->prepare("INSERT INTO evenement(nom_evenement,information,image_evenement) VALUES(?,?,?)") OR die(print_r($connexion->errorInfo()));
            $insertion->execute(array($_POST["nom_evenement"],$_POST["information"],$file));
            }
            //Fin insertion base de donnée
        ?>
    <!--Insertion base de données-->
</html>