<?php require("actions/users/signUpAction.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>location</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="css/css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="css/css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="css/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->
</head>
<div class="outer-w3-agile col-xl mt-3 mr-xl-3">
                            <h4 class="tittle-w3-agileits mb-4">Formulaire d'Inscription</h4>
                            <form action=" # " method="post">
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Nom</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" placeholder="Entrez votre nom complet" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 col-form-label">Prenom</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control price-box" name="surname" placeholder="Entrez votre prenom" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" placeholder="veuillez entrer votre adresse email" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">telephone</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="phone" placeholder="Veuillez entrer votre adresse telephonique" required="">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Mot de passe</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password" placeholder="Veuillez creer votre mot de passe" required="">
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Profil</label>
                                    <div class="col-sm-10">
                                              <select
                                                class="form-control form-select form-control-a"
                                                id="profile" name="profil"
                                              >
                                                <option value="Bailleur">Bailleur</option>
                                                <option value="Client">Client</option>
                                                <option value="Agent Immobilier">Agent Immobilier</option>
                                                <option value="Agence Immobilière">Agence Immobiliere</option>
                                              </select>
                                    </div>       
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Abonnement</label>
                                    <div class="col-sm-10">
                                              <select
                                                class="form-control form-select form-control-a"
                                                id="profile" name="abonnement"
                                              >
                                                <option value="Gold">Gold</option>
                                                <option value="Classique">Classic</option>
                                                <option value="Premium">Premium</option>
                                              </select>
                                    </div>       
                                </div>
                            <br>
                            <div class="alert"><?php
                            if(isset($errorMessage)){
                                echo $errorMessage;
                            }
                             ?></div>
                               

                                <div class="form-group row text-center">
                                    <div class="col-1O">
                                        <input type="submit" class="btn btn-primary" name="validate" value="valider">
                                    </div>
                                </div>
                            </form>
                        </div>


