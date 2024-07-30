<?php
/**$identifiant = "";
$nom = "";
$prenom ="";
$adress = "";
$datenaiss = "";
$email ="";
$fontion = "";
$specialite = "";
$info = "";
*/
//  var_dump($_POST);
//  die();

//ouverture d'une connexion a la  base de donne mon_projet 
try
{
	$bdd = new PDO('mysql:host=localhost:3308;dbname=mon_projet;charset=utf8', 'root','');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
 //preparation de la requet d'insertion 
 $pdostatement = $bdd -> prepare ('INSERT INTO gestion VALUES(NULL,:prenom,:nom,:email,:adresse,:anniversaire,:fonction,:specialite,:sexe,:propos)');
  
 //Liaison des marqueurs a des valeurs
 $pdostatement -> bindValue(':nom',$_POST["nom"],PDO::PARAM_STR);
 $pdostatement -> bindValue(':prenom',$_POST["prenom"],PDO::PARAM_STR);
 $pdostatement -> bindValue(':email',$_POST["email"],PDO::PARAM_STR);
 $pdostatement -> bindValue(':adresse',$_POST["adresse"],PDO::PARAM_STR);
 $pdostatement -> bindValue(':anniversaire',$_POST["anniversaire"],PDO::PARAM_STR);
 $pdostatement -> bindValue(':fonction',$_POST["fonction"],PDO::PARAM_STR);
 $pdostatement -> bindValue(':specialite',$_POST["specialite"],PDO::PARAM_STR);
 $pdostatement -> bindValue(':sexe',$_POST["sexe"],PDO::PARAM_STR);
 $pdostatement -> bindValue(':propos',$_POST["propos"],PDO::PARAM_STR);

 // execution de la requete
 $BienInserer = $pdostatement -> execute();
  
 if($BienInserer){
      $message= "Le client a ete bien ajouter";
 }else{ 
   $message= "Echec de l'inscription !!" ;
 
 }




 



/*
 if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["adresse"]) && isset($_POST["email"]) && isset($_POST["calendrier"]) && isset($_POST["fonction"]) && isset($_POST["specialite"]) && isset($_POST["msg"])){
    $nom = $_POST["nom"];
    $prenom =$_POST["prenom"];
    $adresse = $_POST["adresse"];
    $datenaiss = $_POST["anniversaire"];
    $email =$_POST["email"];
    $fontion = $_POST["fonction"];
    $specialite = $_POST["specialite"];
    $info = $_POST["msg"];
    $sexe = $_POST["choice"];

 }
*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="gestion.css">
    </head>
    <body>
        <div class="container">
        <h2>inscription<h2>
            <div class="alert alert-sucess">
             <script>
                 
                    <?php  echo"var messg =  '$message ';";?>;
                alert (messg);
             </script>
            </div>
             <?php
             $sql = "SELECT id,prenom,nom,adresse,fonction,specialite FROM gestion";
             $result = $bdd->query($sql);
            //  if ($result->rowCount >0) {
            //      # code...
                 echo"<table border ='1px solid'><tr><th>ID</th><th>PRENOM</th><th>NOM</th><th>ADRESSE</th><th>FONCTION</th><th>SPECIALITE</th></tr>";
                 // AFFICHER LES DONNES DE CHAQUE LIGNE
                 while ($row = $result->fetch()) {
                     # code...
                     echo "<tr><td>".$row['id']."</td><td>".$row['prenom']."</td><td>".$row['nom']."</td><td>".$row['adresse']."</td><td>".$row['fonction']."</td><td>".$row['specialite']."</td></tr>";
                 }
               echo "</table>";
            //  }else {
            //      # code...
            //      echo"Pas resultat";
            //  }
             ?>
              <div class="alert alert-info">
               <!-- <p>Pour retourner a l'aceuil click <a href="contact.html" target="_self">Ici</a></p> -->
               <br><br>
               <button type="submit" class="btn btn-success"><a href="contact.html" target="_self">retourner a l'aceuil</a></button>
             </div>
        </div>
    </body>