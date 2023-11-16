<?php
session_start();
require('actions/database.php'); 

// validation du formulaire

if(isset($_POST['validate'])){

    // verification d'entrée de valeur dans les champs
    if(!empty($_POST['name']) AND !empty($_POST['surname']) AND !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['phone']) AND !empty($_POST['profil']) AND !empty($_POST['abonnement'])){
        
        // les données de l'user
        $user_name= htmlspecialchars($_POST['name']);
        $user_surname= htmlspecialchars($_POST['surname']);
        $user_email= htmlspecialchars($_POST['email']);
        $user_phone= htmlspecialchars($_POST['phone']);
        $user_profil= htmlspecialchars($_POST['profil']);
        $user_abonnement= htmlspecialchars($_POST['abonnement']);
        $user_password= password_hash($_POST['password'], PASSWORD_DEFAULT);

        // verification de l'existence d'un autre user au même nom
        $checkIfUserAlreadyExists= $bdd->prepare('SELECT login FROM user WHERE login=?');
        $checkIfUserAlreadyExists->execute(array($user_email));

        if($checkIfUserAlreadyExists->rowCount() == 0){
            // Insertion de l'utilisateur dans le site
            if($user_profil=="Client"){
                $insertUserOnWebsite= $bdd->prepare("INSERT INTO `user` (`id_user`, `login`, `password`, `name`, `surname`, `phone_number`, `statut`, `abonnement`) VALUES (NULL, ?, ?,?, ?, ?, ?, 'aucun');");
                $insertUserOnWebsite->execute(array($user_email, $user_password, $user_name, $user_surname, $user_phone, $user_profil));
                header('location: loginPage.php');
            }else{
                $insertUserOnWebsite= $bdd->prepare("INSERT INTO `user` (`id_user`, `login`, `password`, `name`, `surname`, `phone_number`, `statut`, `abonnement`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?);");
                $insertUserOnWebsite->execute(array($user_email, $user_password, $user_name, $user_surname, $user_phone, $user_profil, $user_abonnement));
                header('location: loginPage.php');
            }
                

            // recuperation des informations de l'utilisateur
                

        }else{
            $errorMessage="l'utilisateur existe deja sur le site";
        }


    }else{
        $errorMessage= "Veuillez compléter tous les champs...";
    }
}