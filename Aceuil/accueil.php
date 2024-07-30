<?php
    session_start();

    //connexion base de données 
    include("Connexion_base_de_données.php");

    if(isset($_SESSION["Email"])){
        $userEmail = $_SESSION["Email"];
        $sql="SELECT * FROM gestion";
        $request=$connexion->query($sql);

        while($data_db = $request->fetch()){
            if($userEmail == $data_db["email"]){

                $useName= $data_db['nom'];
                $usePrenom= $data_db['prenom'];
                $useFonction= $data_db['fonction'];
                $useSpecialite= $data_db['specialite'];
                $useId= $data_db['id'];
        
            }
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CDN CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="../CSS/acceuil.css">
    <!--CDN CSS-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title>Accueil</title>
    
</head>
<body >
        <!--Navbar-->
            <div class="navbar fixed-top navbar-expand-md navbar-dark primary-color">
                    <a href="#" class="navbar-brand ">UVS</a>
                        <ul class="nav navbar-nav" >
                            <li class="nav-item">
                                <a class="nav-link 
                                font-weight-bold" 
                                href="../PHP/recup_donne.php" >Liste des Personnels</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link
                                font-weight-bold" 
                                href="../PHP/blablacar.php" >blablacar</a>
                            </li>
                            <li class="nav-item" >
                                <a class="nav-link
                                font-weight-bold" 
                                href="../PHP/parametre.php">Parametres</a>
                            </li>
                        </ul>
                        <div class="form-user-icon-main-container" style="position:relative; left:380px">
                            <div class="container-form-user-icon" style="display:flex;">
                                <div class="form-search-container">
                                    <form class="form-inline">
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="width:300px; height:32px;">
                                        <button class="btn bg-light btn-sm" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
                                        </button>
                                    </form>
                                </div>

                                
                                <div class="icon-user-container">
                                    <!--Icon user-->
                                        <ul class="navbar-nav">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                                        <i>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person " viewBox="0 0 16 16">
                                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                                            </svg>
                                                            <span class="badge rounded-pill bg-danger">8</span>
                                                        </i>
                                                            <?php
                                                            echo("<h8>".$usePrenom."</h8>");
                                                            ?>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarScrollingDropdown">
                                                    <li><a class="dropdown-item" href="#">Mon Compte</a></li>
                                                    <li><a class="dropdown-item" href="#">Paramétre</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="#">Déconnexion</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    <!--Icon user-->
                                </div>
                            </div>
                            
                        </div>
                        
                </div>
        <!--Navbar-->
      

    
    <div class="container-fluid">
        
          <!--Card Présentation-->
                <div class="card">
                    <img class="card-img-top img-fluid" src="../Image/28_sept_2018_Bannière-site-UVS_corporate.jpg" alt="Card image cap" style="width:fit-content; height:fit-content;">
                    <div class="card-body " style="display:flex;">
                        <div class="Gestion_containeur">
                            <h2 class="card-title">Gestion des Personnels d'UVS</h2>
                            <p class="card-text">Ce site est dedie aux peronnels de l'uvs afin qu'ils puisse y trouver les directives qu'ils doivent suivre
                                pour le bon fonctionnement de l'universite.</p>
                        </div>
                        <div class="FONEk text-center" >

                                <!--Text animation wave-->
                                    <svg class="animation_fonek" style="width:200px; height:50px" viewbox="0 0 100 20">
                                        <defs>
                                            <linearGradient id="gradient">
                                            <stop color="#000"/>
                                            </linearGradient>
                                            <pattern id="wave" x="0" y="-0.5" width="100%" height="100%" patternUnits="userSpaceOnUse">
                                            <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)"> 
                                                <animateTransform
                                                    attributeName="transform"
                                                    begin="0s"
                                                    dur="1.5s"
                                                    type="translate"
                                                    from="0,0"
                                                    to="40,0"
                                                    repeatCount="indefinite"/>
                                            </path>
                                            </pattern>
                                        </defs>
                                        <text text-anchor="middle" x="50" y="15" font-size="10" fill="white" fill-opacity="0.1">FONEK FOFU LA</text>
                                        <text text-anchor="middle" x="50" y="15" font-size="10" fill="url(#wave)"  fill-opacity="1" >FONEK FOFU LA</text>
                                    </svg>
                                <!--Text animation wave-->

                        </div>  
                    </div>
                </div>
            <!--Card Présentation-->

            </br>
            </br>

            <!--Grille de carte -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3 ">
                        <div class="row">
                            <div class="col-md-4">
                            <img src="../Image/Journée de rencontre étudiant.png" class="img-fluid " alt="...">
                            </div>
                            <div class="col-md-8 bg-primary">
                            <div class="card-body">
                                <h5 class="card-title text-white"><b>Journées internationales des sciences économiques et de gestion</b></h5>
                                <p class="card-text text-white"> cette conférence sera présidée par l'éminant professeur monsieur Alexandre FAYE président de CEDEAO
                                    et chercheur à harvard 
                                </p>
                                <p class="text-white"><b>cette conférence ce tiendra le samedi 14 novembre 2021 à l'emphithéâtre du ENO de dakar </b></p>
                                <p class="card-text text-white"><small>Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" >
                        <div class="row ">
                            <div class="col-md-4">
                            <img src="../Image/Aletier sur le numérique et l'environnement.png" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-8 bg-success">
                            <div class="card-body">
                                <h5 class="card-title text-white"><b>Atelier sur le Numérique et l'environnement</b></h5>
                                <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur eveniet quo perferendis amet nemo doloremque quod quibusdam distinctio nisi, exercitationem, consectetur ipsam reiciendis unde, laudantium cupiditate magnam quam optio perspiciatis.</p>
                                <p class="card-text text-white"><small>Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3 ">
                        <div class="row">
                            <div class="col-md-4">
                            <img src="../Image/Formation sur flutter.jpg" class="img-fluid " alt="...">
                            </div>
                            <div class="col-md-8 " style="background-color:orange">
                            <div class="card-body">
                                <h5 class="card-title text-white"><b>Formation sur flutter</b></h5>
                                <p class="card-text text-white">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab distinctio consequatur quasi numquam, labore doloribus. Voluptas, aperiam cupiditate voluptatem quibusdam ratione vel reiciendis maiores reprehenderit unde commodi atque. Assumenda, dignissimos.
                                </p>
                                <p class="text-white"><b>cette conférence ce tiendra le samedi 14 novembre 2021 à l'emphithéâtre du ENO de dakar </b></p>
                                <p class="card-text text-white"><small>Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Grille de carte -->

         <!--Onglet-->


            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" href="#home" data-toggle="tab"   role="tab" >Liste Personnel</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#profile" data-toggle="tab"  role="tab" >Payement</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#contact" data-toggle="tab"  role="tab">Calendrier de tâches</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <!--Liste personnel-->
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <table class="table table-bordered table-primary table-striped">
                                <thead class="table-dark">
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">First-Name</th>
                                    <th scope="col">Last-Name</th>
                                    <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <?php
                                    $reponse=$connexion->query("SELECT * FROM gestion");
                                    while($données=$reponse->fetch()){
                                        $email=$données["email"];
                                        $prenom=$données["prenom"];
                                        $nom=$données["nom"];
                                ?>
                                      <tbody>
                                      <tr>
                                      <th scope="row">1</th>
                                      <td><?php echo("<p>"."$prenom"."</p>");?></td>
                                      <td><?php echo("<p>"."$nom"."</p>");?></td>
                                      <td><?php echo("<p>"."$email"."</p>");?></td>
                                      </tr>
                                  </tbody>
                                    <?php
                                        }
                                    ?> 
                                
                            </table>
                </div>
                <!--Liste personnel-->

                <!--Payement-->
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="card bg-primary">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="../Image/Payement_vector.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">

                                    <!--header payement-->
                                    <h5 class="card-title text-center" style="color:white;">Payement</h5>
                                    <!--header payement-->

                                    <!--Informations Allocations de payement-->
                                    <p class="card-text" style="color:white;">Bonsoir votre allocations de Payement du mois de Novembre n'est pas encore disponible</p>
                                    <!--Informations Allocations de payement-->

                                    <!--Tableau Payement-->
                                    <table class="table  table-bordered table-striped">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th scope="col">Jour</th>
                                                        <th scope="col">Mois</th>
                                                        <th scope="col">Année</th>
                                                        <th scope="col">Heure</th>
                                                        <th scope="col">Montant</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-light">
                                                    <tr>
                                                        <th scope="row">20</th>
                                                        <td>Avril</td>
                                                        <td>2021</td>
                                                        <td>12h00</td>
                                                        <td>50.000 Fcfa</td>
                                                    </tr>
                                                </tbody>
                                    </table>
                                    <!--Tableau Payement-->

                                    <!--container Solde employé-->
                                        <div class="Solde" style="display:flex; justify-content:space-between">
                                            <div class="Solde_label">
                                                <h4 style="color:white;">Votre solde:</h4>
                                            </div>
                                            <div class="Montant_solde">
                                                <h4 style="color:white;">50.000 Fcfa</h4>
                                            </div>
                                        </div>
                                    <!--container Solde employé-->

                                    <!--Date de mis à jour Table payement-->
                                        <p class="card-text" style="color:white;"><small >Last updated 3 mins ago</small></p>
                                    <!--Date de mis à jour Table payement-->

                                </div>
                                </div>
                            </div>
                        </div>
                </div>
                <!--Payement-->

                <!--Calendrier de tâches--> 
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <table class="table table-bordered table-success table-striped">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">Heures/Jours</th>
                        <th scope="col">Lundi</th>
                        <th scope="col">Mardi</th>
                        <th scope="col">Mecredi</th>
                        <th scope="col">Jeudi</th>
                        <th scope="col">Vendredi</th>
                        <th scope="col">Samedi</th>
                        <th scope="col">Dimanche</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">8h-10h</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">10h-12h</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@fat</td>
                            <td>@fat</td>
                            <td>@fat</td>
                            <td>@fat</td>
                        </tr>
                        <tr class="table-danger">
                        <th scope="row">12h-13h</th>
                        <td colspan="6" class="text-center">Pause</td>
                        </tr> 
                        <tr>
                        <th scope="row">13h-15h</th>
                            <td>Larry</td>
                            <td>Dieng</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                        <th scope="row">15h-17h</th>
                            <td>Bird</td>
                            <td>Fall</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                        </tr>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
            <!--Calendrier de tâches--> 
           
        <!--Onglet-->

    </div>

    <!--Footer Page-->

    <footer class="bg-primary text-center text-white">
                <!-- Grid container -->
                <div class="container p-4 pb-0">
                    <!-- Section: Social media -->
                    <section class="mb-4">
                        <!-- Facebook -->
                        <a class="btn btn-primary btn-floating" href="#!" role="button"
                            ><i class="fab fa-facebook-f"></i
                        ></a>

                        <!-- Twitter -->
                        <a class="btn btn-secondary btn-floating" href="#!" role="button"
                            ><i class="fab fa-twitter"></i
                        ></a>

                        <!-- Google -->
                        <a class="btn btn-success btn-floating" href="#!" role="button"
                            ><i class="fab fa-google"></i
                        ></a>

                        <!-- Instagram -->
                        <a class="btn btn-danger btn-floating" href="#!" role="button"
                            ><i class="fab fa-instagram"></i
                        ></a>

                        <!-- Linkedin -->
                        <a class="btn btn-white btn-floating" href="#!" role="button"
                            ><i class="fab fa-linkedin-in"></i
                        ></a>

                        <!-- Github -->
                        <a class="btn btn-dark btn-floating m-1" href="#!" role="button"
                            ><i class="fab fa-github"></i
                        ></a>
                    </section>
                    <!-- Section: Social media -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2021 Copyright:
                    <a class="text-white" href="#"><b>Gestion employe</b></a>
                    <h4>By UVS Etudiant</h4>
                </div>
                <!-- Copyright -->
            </footer>

    <!--Footer Page-->

    <!--j Query and poper plugins-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--j Query and poper plugins-->
</body>
</html>