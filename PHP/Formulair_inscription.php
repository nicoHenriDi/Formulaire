<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <!--CSS-->
        <link rel="stylesheet" href="../CSS/Formulaire_inscription.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!--CSS-->

        <!--MDB-->
            <!-- Font Awesome -->
            <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            rel="stylesheet"
            />
            <!-- Google Fonts -->
            <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
            />
            <!-- MDB -->
            <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
            rel="stylesheet"
            />
        <!--MDB-->

    </head>
    <body>
        <div class="container-fluid">
            <div class="row" style="background-color:#C0D9E6;">
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 left primary-color py-5">
                    <div class="text-center">
                        <img src="../Image/Login_vectoriel.png" alt="login vectoriel" class="img-fluid">
                    </div>
                        <h2 class="text-center text-white "><i>Inscrivez-vous</i></h2>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 align-self-center ">

                <!--Formulaire d'inscription-->

                <div class="card " style="max-width:800px;">
                    <div class="card-body">
                        <?php
                            if(isset($_POST["submit"]) &&

                            !empty($userFirstName) && !empty($userLastName) &&
                            !empty($email) && !empty($password) &&
                            !empty($adresse) && !empty($anniversaire) &&
                            !empty($fonction) && !empty($specialite) &&
                            !empty($sexe) && !empty($propos) )
                            {
                                    echo("<p>Veuillez remplir tous les champs</p>");
                            }
                        ?>
                            <form action ="Inscription-vérification.php" method="POST" >
                               <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                   <input type="text" placeholder="Prenom" id="prenom" name="prenom" class="form-control">
                               </div><br>
                               <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                   <input type="text" placeholder="Nom" id="nom" name="nom" class="form-control">
                               </div><br>
                               <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                   <input type="email" placeholder="Email" id="email" name="email" class="form-control">
                               </div><br>
                               <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                   <input type="password" placeholder="Password" id="password" name="password" class="form-control">
                               </div><br>
                               <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                   <input id="adresse"type="text"class="form-control" name="adresse" placeholder="adresse">
                               </div><br>
                               <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                <input id="anniversaire"type="date"class="form-control"name="anniversaire"placeholder="jj/mm/aaaa">
                               </div><br>
                               <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                                <input id="fonction"type="text"class="form-control"name="fonction"placeholder="fonction">
                               </div><br>
                               <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                <input id="specialite"type="text"class="form-control"name="specialite"placeholder="specialite">
                               </div>
                               <div class="form-group">
                                <label for="choice">Sexe:</label>
                                <select class="form-control" id="sexe" name="sexe">
                                    <option >Homme</option>
                                    <option >Femme</option>
                                </select>
                               </div>

                               <div class="input-group">
                                <button class="btn btn-primary" type="submit" name="submit">
                                    Soumettre
                                </button>
                               </div><br><br>
                           </form>
                    </div>
                </div>

                </div>
                <!--Formulaire de connexion-->
            </div>
        </div>
    </body>
</html>