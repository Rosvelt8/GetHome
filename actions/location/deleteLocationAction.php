<?php 
session_start();
if(!isset($_SESSION['auth'])){
    header('location: ../../loginPage.php');
}
require('../database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfTheLocation = $_GET['id'];

    $checkIfLocationExists = $bdd->prepare('SELECT id_agent FROM location WHERE id_location = ?');
    $checkIfLocationExists->execute(array($idOfTheLocation));

    if($checkIfLocationExists-> rowCount() > 0){

        $questionsInfos= $checkIfLocationExists->fetch();

        if($questionsInfos['id_agent'] == $_SESSION['id']){


                $deleteThisLocation = $bdd->prepare('DELETE FROM location WHERE id_location = ?');
                $deleteThisLocation->execute(array($idOfTheLocation));
                header('Location: ../../my-location.php');


        }else{
            echo "vous n'avez pas le droit de modifier cette location";
        }

         

    }else{
        echo "aucune location trouvé n'a été trouvé";
    }
}else{
    echo "aucune location n'a été trouvé";
}