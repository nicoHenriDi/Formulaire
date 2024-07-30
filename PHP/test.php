<?php
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
     echo "c'est fait ! votre inscription a etait bien prise en charge Mr ".$prenom." ".$nom ;
 }
?>