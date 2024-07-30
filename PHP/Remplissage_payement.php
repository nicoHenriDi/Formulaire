<?php
   // session_start();

    include("Connexion_base_de_données.php");

    
    

    if(isset($_POST["submit"]) )
                    {
                        
                        $email_payement= $_POST["email"];
        $date_payement = $_POST["date"];
        $time_payement =$_POST["time"];
        $montant =$_POST["montant"];
                        
                            //Insertion dans la base de donnée

                            $insertion = ("INSERT INTO 
                            payement (email,date_payement,heure_payement,montant) 
                            VALUES(:email,:date_payement,:heure_payement,:montant)")OR die(print_r($db->errorInfo()));
                             
                            $insert =$connexion->prepare($insertion);

                            $insert->bindParam(':email', $email_payement);
                            $insert->bindParam(':date_payement', $date_payement);
                            $insert->bindParam(':heure_payement', $time_payement);
                            $insert->bindParam(':montant',$montant);

                            $insert->execute();

                           echo("bien enregister");
                    }else{
                        //header("location:Remplissage_payement.php");
                        echo("somethings wrong");
                    }
                    var_dump($_POST);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>payement</title>
    </head>
    <body>
        <form action="Remplissage_payement.php" method="POST">
            <input name="email" type="email">
            <input name="date" type="date">
            <input name="time" type="time">
            <input name="montant" type="floatval">
            <button name="submit" type="submit">payer</button>
        </form>
    </body>
</html>