<?php

require('actions/database.php');


$checkActorInformationsInLocation= $bdd->prepare('SELECT id_agent FROM location WHERE id_location= ?');
$checkActorInformationsInLocation->execute(array($idOfTheLocation));
$actorInformationsInlocation= $checkActorInformationsInLocation->fetch();
$idActor=$actorInformationsInlocation['id_agent'];

$checkActorInformation=$bdd->prepare('SELECT * FROM user WHERE id_user=?');
$checkActorInformation->execute(array($idActor));
$actorInformation=$checkActorInformation->fetch();
$actor_name= $actorInformation['name'];
$actor_surname= $actorInformation['surname'];
$actor_email= $actorInformation['login'];
$actor_phone_number= $actorInformation['phone_number'];
    