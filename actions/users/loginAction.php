<?php
session_start();
require('actions/database.php');

// validation du formulaire

if(isset($_POST['validate'])){

    // verification d'entrée de valeur dans les champs
    if(!empty($_POST['login']) AND !empty($_POST['password'])){
        
        // les données de l'user
        $user_email= htmlspecialchars($_POST['login']);
        $user_password= htmlspecialchars($_POST['password']);

        $checkIfUserExists= $bdd->prepare('SELECT * FROM user WHERE login= ?');
        $checkIfUserExists->execute(Array($user_email));

        if($checkIfUserExists->rowCount() > 0){

            $usersInfos= $checkIfUserExists->fetch();
            if(password_verify($user_password, $usersInfos['password'])){
                // authentification de l'utilisateur
                $_SESSION['auth']= true;
                $_SESSION['id']= $usersInfos['id_user'];
                $_SESSION['name']= $usersInfos['name'];
                $_SESSION['firtsName']= $usersInfos['surname'];
                $_SESSION['statut']= $usersInfos['statut'];

                

            // renvoie vers la page d'acceuil 
                header('Location: allLocationPage.php');

            }else{
                $errorMessage="Votre mot de passe est incorrecte";
            }
        }else{
            $errorMessage= "Votre pseudo est incorrect";
        }

    }else{
        $errorMessage= "Veuillez compléter tous les champs...";
    }
}