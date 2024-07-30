<?php
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : '';

    if ($login =='') {
        header('location:connexion.php?error=1');

    } elseif($mdp=='') {
        header('location:connexion.php?error=2');
    }elseif ($login=='' && $mdp=='') {
        header('location:connexion.php?error=3');
    }
    else {
        session_start();
        $_SESSION['login']=$login ;
        $_SESSION['mdp']=md5($mdp) ;

       // header('location:session_conn.php');
    }
    
try {
    //code...
    $bdd = new PDO('mysql:host=localhost;dbname=mon_projet;charset=utf8', 'root', '');
} catch (Exception $e) {
    //throw $e;
    die('Erreur : '.$e->getMessage());
}
$pdostatement = $bdd -> prepare ('INSERT INTO gestion VALUES(NULL,:user,:mdp)');
$pdostatement -> bindValue(':user',$_SESSION["login"],PDO::PARAM_STR);
$pdostatement -> bindValue(':mdp',$_SESSION["mdp"],PDO::PARAM_STR);
$BienInserer = $pdostatement -> execute();
  
if($BienInserer){
    $message= "Connecter avec succes...";
}  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
        <h2>Liste des utilisateurs<h2>
            <div class="alert alert-sucess">
             <script>
                 
                    <?php  echo"var messg =  '$message ';";?>;
                alert (messg);
             </script>
            </div>
             <?php
             $sql = "SELECT id,user,mdp FROM gestion";
             $result = $bdd->query($sql);
            //  if ($result->rowCount >0) {
            //      # code...
                 echo"<table border ='1px solid' class='table table stripped'><tr><th>ID</th><th>USER</th><th>MOT DE PASSE</th></tr>";
                 // AFFICHER LES DONNES DE CHAQUE LIGNE
                 while ($row = $result->fetch()) {
                     # code...
                     echo "<tr><td>".$row['id']."</td><td>".$row['user']."</td><td>".$row['mdp']."</td></tr>";
                 }
               echo "</table>";

             ?>
             <div class="alert alert-info">
               <!-- <p>Pour retourner a l'aceuil click <a href="contact.html" target="_self">Ici</a></p> -->
               <br><br>
               <button type="submit" class="btn btn-success"><a href="connexion.php" target="_self">retourner a l'inscription</a></button>
             </div>
        </div>
    </body>