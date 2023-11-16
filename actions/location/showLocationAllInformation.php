<?php
require('actions/database.php');

$getAllLocation= $bdd->query('SELECT * FROM location ORDER BY id_location DESC LIMIT 0,5');

if(isset($_GET['search']) and !empty($_GET['locationSearch'])){

    $userSearch= $_GET['locationSearch'];
    $getAllLocation= $bdd->query('SELECT * FROM location
    WHERE statut='.$userSearch.' ORDER BY id_location DESC');
}