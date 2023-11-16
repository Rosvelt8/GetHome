<?php require('actions/location/getInfoOfEditedLocationAction.php');
require('actions/location/editLocation.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>GESTION DEPENSES</title>
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
                            <h4 class="tittle-w3-agileits mb-4">Formulaire de modification des locaux</h4><br><br><p>
                                        <?php
                                        if(isset($successMessage)){
                                            echo $successMessage;
                                        }
                                        
                                        ?>
                                    </p>
                            <form action="" method="post" enctype="multipart/form-data">

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Photo de l'intérieur</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="locationFirstPicture" placeholder="veuillez entrer une photo" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Photo de l'exterieur</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="locationSecondPicture" placeholder="veuillez entrer une photo" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control" name="locationDescription" placeholder="Veuillez décrire votre local" required=""><?=$location_description ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    
                                    <label  class="col-sm-2 col-form-label">Prix</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control price-box" name="locationAmount" placeholder="Entrez le prix de la location" value="<?=$location_prix ?>" required="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <br><p></p>
                                    <label  class="col-sm-2 col-form-label">Superficie (en m²)</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control price-box" name="locationSpace" placeholder="Entrez le prix de la location" value="<?=$location_superficie ?>" required="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Type</label>
                                    <div class="col-sm-10">
                                              <select
                                                class="form-control form-select form-control-a"
                                                id="profile" name="locationType"
                                              >
                                                <option Value="Studio">Studio</option>
                                                <option value="Duplex">Duplex</option>
                                                <option value="Maison">Maison</option>
                                                <option value="Appartement">Appartement</option>
                                              </select>
                                    </div>       
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Statut</label>
                                    <div class="col-sm-10">
                                              <select
                                                class="form-control form-select form-control-a"
                                                id="profile" name="locationStatus"
                                              >
                                                <option value="A vendre">A vendre</option>
                                                <option value="A louer">A louer</option>
                                    
                                              </select>
                                    </div>       
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Localisation du domicile</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="locationPlace" placeholder="Veuillez spécifier l'emplacement du domicile" value="<?=$location_localisation ?>" required="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Salon</label>
                                    <div class="col-sm-10">
                                        <input type="number" value="<?=$location_salon ?>" class="form-control" name="locationSalon" placeholder="Veuillez spécifier le nombre de Salon" required="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Cuisine</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="locationCuisine" value="<?=$location_cuisine ?>" placeholder="Veuillez spécifier le nombre de Cuisine" required="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Chambre</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="locationChambre" placeholder="Veuillez specifier le nombre de chambre" value="<?=$location_chambre ?>" required="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Douche</label>
                                    <div class="col-sm-10">
                                        <input type="number" value="<?=$location_douche?>" class="form-control" name="locationDouche" placeholder="Entrez le nombre de douche" required="">
                                    </div>
                                </div>
                                
                                <br><p>
                                    <?php if(isset($errorMessage)){
                                        echo $errorMessage;
                                    } ?>
                                </p>
                                <div class="form-group row text-center">
                                    <div class="col-sm-10">
                                        <input type="submit" class="btn btn-primary" name="modify" value="Ajouter">
                                    </div>
                                </div>
                            </form>
                        </div>


