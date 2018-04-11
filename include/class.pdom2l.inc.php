<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application M2L
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoM2l qui contiendra l'unique instance de la classe
 
 * @package default
 * @author MaelleT
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoM2l
{
    private static $serveur = 'mysql:host=172.21.101.2';
    private static $bdd = 'dbname=m2l_g2';
    private static $user = 'm2l_g2';
    private static $mdp = 'm2l_g2';
    private static $monPdo;
    private static $monPdoM2l = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct()
    {
        PdoM2l::$monPdo = new PDO(PdoM2l::$serveur . ';' . PdoM2l::$bdd, PdoM2l::$user, PdoM2l::$mdp);
        PdoM2l::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct()
    {
        PdoM2l::$monPdo = null;
    }

    /**
     * Fonction statique qui crée l'unique instance de la classe
     * Appel : $instancePdoM2l = PdoM2l::getPdoM2l();
     * @return l'unique objet de la classe PdoM2l
     */
    public static function getPdoM2l()
    {
        if (PdoM2l::$monPdoM2l == null) {
            PdoM2l::$monPdoM2l = new PdoM2l();
        }
        return PdoM2l::$monPdoM2l;
    }

    /**
     * Retourne les informations d'un utilisateur
     * @param $login
     * @param $mdp
     * @return l'id, le login sous la forme d'un tableau associatif
     */
    public function getInfosUtilisateur($login, $mdp)
    {
        $req = "select utilisateur.id as id, utilisateur.login as login from utilisateur
		where utilisateur.login='$login' and utilisateur.motdepasse='$mdp'";

        $rs = PdoM2l::$monPdo->query($req);

        $ligne = $rs->fetch();

        return $ligne;
    }

    /**
     * Retourne les salles de la bdd
     * @return un tableau des salles
     */
    public function getLesSalles()
    {
        $req = "select salle.nom as nomSalle, salle.capacite as capaciteSalle
		        from  salle 
		        order by nomSalle,capaciteSalle";
        $res = PdoM2l::$monPdo->query($req);
        $laSalle = $res->fetchAll();
        return $laSalle;
    }


    /**
     * Retourne tous les id,nom de la table Departement
     * @return un tableau associatif
     */

    public function getLesDepartements()
    {
        $req = "select departement.code as codeDep, departement.nom as nomDep, count(ligue.id) as nbLigue from departement left join ligue
                on departement.code=ligue.codeDep group by code";
        $res = PdoM2l::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;

    }


    /**
     * Retourne tous les id,nom,urlSiteWeb de la table Ligue
     * @param $code du département
     * @return un tableau associatif
     */
    public function getLesLiguesDepartement($code){
        $req = "select ligue.id as idLigue, ligue.nom as nomLigue, ligue.urlSiteWeb as urlLigue
		    from  ligue where codeDep ='$code'order by nomLigue";

		$res = PdoM2l::$monPdo->query($req);
        $lesLignes = $res->fetchAll();

        return $lesLignes;
    }

    /**
     * Retourne toutes les informations de la ligue dont l'id est passé en paramètre
     * @param $idLigue : id de la ligue
     * @return un tableau associatif
     */
    public function getInfosLigue($idLigue){
        $req = "select ligue.id as idLigue, ligue.nom as nomLigue, ligue.adresseRue as adrLigue, ligue.cp as cpLigue, 
                ligue.ville as villeLigue, ligue.tel as numTel , ligue.emailContact as emailLigue, ligue.urlSiteWeb as urlLigue, horaire as horaireLigue
		        from  ligue where ligue.id ='$idLigue'";

		$res = PdoM2l::$monPdo->query($req);
        $laLigne = $res->fetch();

        return $laLigne;
    }
}

?>