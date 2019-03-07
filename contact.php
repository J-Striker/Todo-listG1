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
                            <h3>Contactez-nous</h3>
                            <div class="d-flex justify-content-end social_icon">
                                <span><i class="fa fa-facebook-square"></i></span>
                                <span><i class="fa fa-google-plus-square"></i></span>
                                <span><i class="fa fa-twitter-square"></i></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="todolist.php">
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nom" required>
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Prenom" required>
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="email" required>
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                    </div>
                                    <input type="tel" class="form-control" placeholder="telephone" required>
                                </div>
                                <div class="input-group form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="votre message ici"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="envoyer" class="btn float-right login_btn">
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
