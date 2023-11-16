<?php 
require('actions/database.php');

$getMyLocation= $bdd->prepare('SELECT * FROM location WHERE id_agent=? ORDER BY id_location DESC LIMIT 0,5');
$getMyLocation->execute(array($_SESSION['id']));