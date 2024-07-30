
<?php
    session_start();

    //connexion à la base de donnée
    include "Connexion_base_de_données.php";

        
              // on applique une fonction htmlspecialchars
                // pour éliminer toute attaque de type injection SQL et XSS
                $userFirstName =htmlspecialchars($_POST["prenom"]); 
                $userLastName = htmlspecialchars($_POST["nom"]);
                $email = htmlspecialchars($_POST["email"]);  
                $password = htmlspecialchars($_POST['password']);
                $adresse = htmlspecialchars($_POST["adresse"]);
                $anniversaire = htmlspecialchars($_POST["anniversaire"]);
                $fonction = htmlspecialchars($_POST["fonction"]);
                $specialite = htmlspecialchars($_POST["specialite"]);
                $sexe = htmlspecialchars($_POST["sexe"]);
                //$propos =htmlspecialchars($_POST["propos"]);


                //Vérification que vos champs ne sont pas vide sauf à propos qui peut être vide
                if(isset($_POST["submit"]) )
                    {
                            //Insertion dans la base de donnée

                            $insertion = ("INSERT INTO 
                            gestion (prenom , nom , email , adresse , anniversaire,fonction , specialite , sexe , password_user) 
                            VALUES(:prenom,:nom,:email,:adresse,:anniversaire,:fonction,:specialite,:sexe,:password_user)")OR die(print_r($db->errorInfo()));
                             
                            $insert =$connexion->prepare($insertion);

                            $insert->bindParam(':prenom', $userFirstName);
                            $insert->bindParam(':nom', $userLastName);
                            $insert->bindParam(':email', $email);
                            $insert->bindParam(':adresse',$adresse);
                            $insert->bindParam(':anniversaire',$anniversaire);
                            $insert->bindParam(':fonction', $fonction);
                            $insert->bindParam(':specialite',$specialite);
                            $insert->bindParam(':sexe',$sexe);
                            $insert->bindParam(':password_user',$password);

                            $insert->execute();

                            header("location:Login.php");
                    }else{
                        header("location:Formulair_inscription.php");
                        echo("somethings wrong");
                    }
?>