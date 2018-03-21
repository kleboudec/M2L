<?php

ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . './sessions'));
session_start();

require_once("include/fct.inc.php");
require_once ("include/class.pdom2l.inc.php");


include("vues/v_entete.php") ;

$pdo = Pdom2l::getPdoM2l();


if(!isset($_REQUEST['uc'])){
    $_REQUEST['uc'] = 'accueil';
}

$uc = $_REQUEST['uc'];

switch($uc){
    case 'connexion':{
        include("controleurs/c_connexion.php");
        break;
    }
    case 'accueil' :{
		include("controleurs/c_accueil.php");
		break;
	}
    case 'm2lpratiques' :{
		include("controleurs/c_m2lpratiques.php");
		break;
	}
	case 'ligues' :{
		include("controleurs/c_ligues.php");
		break;
	}
    case 'intranet' :{
        include("controleurs/c_intranet.php");
        break;
    }
    case 'deconnexion':{
        include("controleurs/c_connexion.php");
        break;
    }
}


include("vues/v_pied.php") ;
?>