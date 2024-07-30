<?php
session_start();
$error= isset($_GET['error']) ? $_GET['error'] : '';
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
        <!-- <style type="text/css">
          body{
              background-image: url("télécharger.jpg");
              background-repeat: no-repeat;
              background-size: cover;
          }
        </style> -->
        <div class="container">
                    <h3 style="text-align: center;">Gestion Personnel</h3><br><br>
                    <div class="row">
                       <!-- nom prenom email message -->
                       <div class="col-sm-12">
                           <form action ="session_conn.php" method="POST" >
                               <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                   <input type="text" placeholder="login" id="login" name="login" class="form-control">
                               </div><br>
                               <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                   <input type="password" placeholder="Mot De Passe" id="mdp" name="mdp" class="form-control">
                               </div><br>
                               <div class="input-group">
                                <button class="btn btn-primary" type="submit">
                                    Se connecter
                                </button>
                               </div><br><br>
                           </form>
                           <!-- <div class="input-group">
                                <button class="btn btn-primary" type="submit">
                                    <a href="C:\xampp\htdocs\MonProjet\contact" target="_self">S'inscrire</a>
                                </button>
                               </div><br><br> -->
                       </div>
                       <?php
                       switch ($error) {
                           case '3':
                               echo"Saisissez votre login et votre mot de passe";

                               break;
                           case '1':
                                echo"Le champ login ne peut pas etre vide";
                                break;
 
                           case '2':
                                echo"Le champ mot de passe ne peut pas etre vide";
                                break;           
                       }
                       ?>
                    </div>
                    
        </div>
    </body>
</html>
