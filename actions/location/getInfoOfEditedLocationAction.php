<?php

require('actions/database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){
    $idOfTheLocation= $_GET['id'];
    $chexkIfLocationExist= $bdd->prepare('SELECT * FROM location WHERE id_location= ?');
    $chexkIfLocationExist->execute(array($idOfTheLocation));

    if($chexkIfLocationExist->rowCount()>0){

        $locationInfo= $chexkIfLocationExist->fetch();

        $location_first_image= $locationInfo['first_image'];
        $location_second_image= $locationInfo['second_image'];
        $location_description= $locationInfo['description'];
        $location_type= $locationInfo['type'];
        $location_statut= $locationInfo['statut'];
        $location_localisation= $locationInfo['localisation'];
        $location_prix= $locationInfo['prix'];
        $location_chambre= $locationInfo['chambre'];
        $location_douche= $locationInfo['douche'];
        $location_cuisine= $locationInfo['cuisine'];
        $location_salon= $locationInfo['salon'];
        $location_superficie= $locationInfo['superficie'];
       
    }
}