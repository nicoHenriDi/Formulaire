<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <!--CSS-->
        <link rel="stylesheet" href="../CSS/login.css">
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
                        <h2 class="text-center text-white "><i>Bienvenue à UVS</i></h2>
                </div>

                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 align-self-center offset">

                <!--Formulaire de connexion-->

                <div class="card " style="max-width:800px;">
                    <div class="card-body">
                            <form class="" action="Identification.php" method="POST">

                                    <?php
                                    if(isset($_POST["submit"])){
                                        $_SESSION["erreur"] = "Mot de passe ou Email incorrect";
                                        echo("<p>".$_SESSION["erreur"]."</p>");
                                    }
                                    ?>
                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" name="Email" id="Email-user" class="form-control" />
                                        <label class="form-label" for="Email-user">Email address</label>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="password" name="Password" id="Password-user" class="form-control" />
                                        <label class="form-label" for="Password-user">Password</label>
                                    </div>


                                    <!-- Submit button -->
                                    <button name="submit" type="submit" class="btn btn-primary btn-rounded btn-block mb-4">Sign in</button>

                                      <!-- 2 column grid layout for inline styling -->
                                        <div class="row mb-4">
                                            <div class="col-md-4 col-lg-4 col-sm-4 col-xl-4 offset-md-8  offset-lg-8 offset-sm-8 offset-xl-8">
                                            <!-- Simple link -->
                                            <a href="#!">Forgot password?</a>
                                            </div>
                                        </div>

                                    <!-- Register buttons -->
                                    <div class="text-center">
                                        <p>Not a member? <a href="../PHP/Formulair_inscription.php">Register</a></p>
                                        <p>or sign up with:</p>
                                        <button type="button" class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                        </button>

                                        <button type="button" class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-google"></i>
                                        </button>

                                        <button type="button" class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                        </button>

                                        <button type="button" class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-github"></i>
                                        </button>
                                    </div>
                            </form>
                    </div>
                </div>

                </div>
                <!--Formulaire de connexion-->
            </div>
        </div>
    </body>
</html>