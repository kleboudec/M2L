<?php

if(!isset($_REQUEST['action'])){

    $_REQUEST['action'] = 'demandeConnexion';
}

$action = $_REQUEST['action'];

switch($action){

    case 'afficherDepartements':{

        $lesDepartements = $pdo->getLesDepartements();

        include("./vues/v_lesDepartements.php");

        break;
    }
    case 'afficherLigueDep':{

        //récupération du nom et du code du département
        $nomDep = $_REQUEST['nomDep'];
        $code = $_REQUEST['codeDep'];

        $lesLigues = $pdo->getLesLiguesDepartement($code);

        include("./vues/v_lesliguesDep.php");
        break;
    }
    case 'detailLigue':{
        //récupération de l'id de la ligue
        $id = $_REQUEST['idLigue'];

        $laLigue = $pdo->getInfosLigue($id);

        include("./vues/v_detailLigue.php");
        break;
    }


}
?>