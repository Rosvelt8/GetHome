<?php
require('actions/database.php');

// verification de la validation du formulaire
if(isset($_POST['modify'])){

    // verification du renseignement des differents champs
    if(!empty($_POST['locationDescription']) AND !empty($_POST['locationAmount']) AND !empty($_POST['locationSpace']) AND !empty($_POST['locationType']) AND !empty($_POST['locationStatus']) AND !empty($_POST['locationPlace']) AND !empty($_POST['locationSalon']) AND !empty($_POST['locationDouche']) AND !empty($_POST['locationChambre']) AND !empty($_POST['locationCuisine'])){
        
        // recuperation des informations de la location

        $location_description= htmlspecialchars($_POST['locationDescription']);
        $location_amount= htmlspecialchars($_POST['locationAmount']);
        $location_space= htmlspecialchars($_POST['locationSpace']);
        $location_type= htmlspecialchars($_POST['locationType']);
        $location_Status= htmlspecialchars($_POST['locationStatus']);
        $location_place= htmlspecialchars($_POST['locationPlace']);
        $location_salon= htmlspecialchars($_POST['locationSalon']);
        $location_douche= htmlspecialchars($_POST['locationDouche']);
        $location_chambre= htmlspecialchars($_POST['locationChambre']);
        $location_cuisine= htmlspecialchars($_POST['locationCuisine']);
        $id_locator_actor= 1;
        $location_picture_one= $_FILES['locationFirstPicture']['name'];
        $location_second_one= $_FILES['locationSecondPicture']['name'];
        $target= 'assets/locationImage/'.basename($location_picture_one);
        $target2= 'assets/locationImage/'.basename($location_second_one);


        if(move_uploaded_file($_FILES['locationFirstPicture']['tmp_name'], $target)){
            if(move_uploaded_file($_FILES['locationSecondPicture']['tmp_name'], $target2)){
                $editLocationOnWebsite=$bdd->prepare("UPDATE `location` SET 
                                                        `first_image` = ?, 
                                                        `second_image` = ?, 
                                                        `type` = ?, 
                                                        `statut` = ?, 
                                                        `description` = ?, 
                                                        `localisation` = ?, 
                                                        `prix` = ?, 
                                                        `chambre` = ?, 
                                                        `douche` = ?, 
                                                        `salon` = ?, 
                                                        `cuisine` = ?, 
                                                        `superficie` = ? 
                                                        WHERE `location`.`id_location` = ?;");

                $editLocationOnWebsite->execute(array($location_picture_one,
                                                        $location_second_one,
                                                        $location_type, 
                                                        $location_Status, $location_description, $location_place, 
                                                        $location_amount, 
                                                        $location_chambre, 
                                                        $location_douche, 
                                                        $location_salon, 
                                                        $location_cuisine,
                                                        $location_space, 
                                                        $idOfTheLocation));

                $successMessage="votre location a bien été modifié dans le site";
        
            }else{
                $errorMessage= "la première image n'a pas chargé correctement";
            }
        }else{
            $errorMessage="la deuxieme image n'a pas correctement chargé";
        }
        
    }else{
        // message d'erreur
        $errorMessage= "veuillez completer tous les champs....";
    }
}