<?php

    //Ouverture de la session de l'utilisateur
    session_start();

    //connexion base de données
    include("Connexion_base_de_données.php");
    
    if(isset($_POST["submit"])){

        $login = htmlspecialchars($_POST["Email"]);
        $password_use = htmlspecialchars($_POST["Password"]);
        
        if(empty($login) && empty($password_use )){
                header("location:Login.php");
        }
        else{
            $request_sql = $connexion->prepare("SELECT email,password_user FROM gestion WHERE email = :email");
            $request_sql ->bindValue(':email',$login, PDO::PARAM_STR);

            $request_sql->execute();

            while($data_db=$request_sql->fetch()){

                   $Email=$data_db["email"];
                   $password=$data_db["password_user"];

                        //comparaison des informations présent dans la base de données et ceux entrer par l'utilisateur
                       if( $Email == $_POST["Email"] && $password == $_POST["Password"]){
                           header("location:accueil.php");
                           $_SESSION["Email"]= $Email;
                           $_SESSION["password"]= $password;
                           die;
                       }
                       else if($Email==$_POST["Email"] && $password != $_POST["Password"]){
                            echo("Mot de passe incorrect");
                            exit;
                       }
                       else if($Email !=$_POST["Email"] && $password==$_POST["Password"]){
                            echo("Email incorrect");
                            echo($password);
                            echo($Email);
                        exit;
                        }
                        else{
                           echo("Email et mot de passe incorrect");
                            exit;
                        }
           }

        }
    }
?>