<?php
/** 
 * Fonctions pour l'application M2L
 
 * @package default
 * @author Maelle
 * @version    1.0
 */
 /**
 * Teste si un quelconque utilisateur est connecté
 * @return vrai ou faux 
 */
function estConnecte(){
  return isset($_SESSION['idUtilisateur']);
}
/**
 * Enregistre dans une variable session les infos d'un utilisateur
 
 * @param $id 
 * @param $login
 */
function connecter($id,$login){

	$_SESSION['idUtilisateur']= $id;
	$_SESSION['login']= $login;
}
/**
 * Détruit la session active
 */
function deconnecter(){
	session_destroy();
}


/**
 * GESTION DES ERREURS
 */

/**
 * Ajoute le libellé d'une erreur au tableau des erreurs 
 
 * @param $msg : le libellé de l'erreur 
 */
function ajouterErreur($msg){
   if (! isset($_REQUEST['erreurs'])){
      $_REQUEST['erreurs']=array();
	} 
   $_REQUEST['erreurs'][]=$msg;
}
/**
 * Retoune le nombre de lignes du tableau des erreurs 
 
 * @return le nombre d'erreurs
 */
function nbErreurs(){
   if (!isset($_REQUEST['erreurs'])){
	   return 0;
	}
	else{
	   return count($_REQUEST['erreurs']);
	}
}
?>