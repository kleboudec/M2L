<?php

$estConnecte = estConnecte();

if(!$estConnecte){
    $_REQUEST['action'] = 'connexion';
}

$action = $_REQUEST['action'];

switch($action){

    case 'connexion':{
        include("controleurs/c_connexion.php");
        break;
    }
    case 'accueil':{
        include("vues/v_intranet.php");
        break;
    }
}
?>