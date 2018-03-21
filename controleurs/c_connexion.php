<?php

if(!isset($_REQUEST['action'])){

	$_REQUEST['action'] = 'connexion';
}

$action = $_REQUEST['action'];

switch($action){

	case 'connexion':{

		include("vues/v_connexion.php");
		break;
	}

	case 'valideConnexion':{

		$login = $_GET['login'];
		$mdp = $_GET['mdp'];

		$utilisateur= $pdo->getInfosUtilisateur($login,$mdp);

		if(!is_array($utilisateur)){

			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else{

			$id = $utilisateur['id'];
			$login =  $utilisateur['login'];

			connecter($id,$login);

			include("vues/v_intranet.php");
		}
		break;
	}

    case 'deconnexion':
        if (isset($_SESSION['login'])){
            deconnecter();

            header('Location: index.php');
            //include("vues/v_deconnexion.php");
        }
        break;


}
?>