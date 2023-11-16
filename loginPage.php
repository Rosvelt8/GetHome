<?php require("actions/users/loginAction.php") ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Login </title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="css/css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>


    

<body>
    <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Page De connexion</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Adresse mail</label>
                        <input type="email" name="login" class="form-control" placeholder="Entrez votre adresse mail" required="">
                    </div>
                    <div class="form-group">
                        <label>Mot De Passe</label>
                        <input type="password" name="password" class="form-control" placeholder="Entrer votre mot de passe" required="">
                    </div>
                    <div class="d-sm-flex justify-content-between">
                        <div class="form-check col-md-6 text-sm-left text-center">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Se souvenir de moi </label>
                        </div>
                        <div class="forgot col-md-6 text-sm-right text-center">
                            <a href="">Mot de passe oublié?</a>
                        </div>
                    </div>
                    <br>
                            <div class="alert"><?php
                            if(isset($errorMessage)){
                                echo $errorMessage;
                            }
                             ?></div>
                    <button type="submit" name="validate" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Se Connecter</button>
                </form>
                <p class="paragraph-agileits-w3layouts mt-4">Pas de compte?
                    <a href="signUpPAge.php">S'enregistrer</a>
                </p>
                
            </div>

        
        </div>
    </div>


        <!-- Required common Js -->
        <script src='js/js/jquery-2.2.3.min.js'></script>
        <!-- //Required common Js -->
    
        <!-- Js for bootstrap working-->
        <script src="js/js/bootstrap.min.js"></script>
        <!-- //Js for bootstrap working -->
   

</body>

</html>