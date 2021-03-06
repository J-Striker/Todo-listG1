<?php
try{
$bdd = New PDO("mysql:host=localhost;dbname=todolistg1;charset=utf8", "root", "" ,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?> 

<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">    
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    
    <title>Document</title>
</head>
<body class="d-flex flex-column h-100">
    <!-- tête de page -->
    <?php 
        $page = 'inscription'; 
        include("header.php"); 
    ?>
    
    <main class="my-auto">
        <section>
            <div class="container">
                <div class="row justify-content-center h-100 my-5">
                    <div class="card">
                        <div class="card-header">
                            <h3>Inscription</h3>
                            <div class="d-flex justify-content-end social_icon">
                                <span><i class="fa fa-facebook-square"></i></span>
                                <span><i class="fa fa-google-plus-square"></i></span>
                                <span><i class="fa fa-twitter-square"></i></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="inscription_post.php" id="form-inscription">
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="ajout_pseudo" placeholder="pseudo" required>
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="ajout_email" placeholder="email" required>
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="ajout_mdp" placeholder="mot de passe" required>
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="ajout_mdp2" placeholder="confirmation du mot de passe" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Login" class="btn float-right login_btn" name="form_inscription">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <!-- pied de page -->
    <footer class="footer mt-auto">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                
                <div class="copyright text-light">
                    © 2018 - Tous droits réservés - exodya
                </div>
                <ul class="nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link disabled text-light" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mention légale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">A propos</a>
                    </li>
                </ul>
                <div class="social text-light">
                    <span>
                        <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                    </span> 
                    <span>
                        <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                    </span>
                    <span>
                        <i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i>
                    </span>
                    <span>
                        <i class="fa fa-apple fa-2x"  aria-hidden="true"></i>
                    </span>
                    <span>
                        <i class="fa fa-android fa-2x" aria-hidden="true"></i>
                    </span>   
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
