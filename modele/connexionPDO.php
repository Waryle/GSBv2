<?php

class connexionPDO
{
    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=gsb';
    private static $user = 'root';
    private static $mdp = '';
    private static $monPdo;
    private static $monPdoCO = null;

    private function __construct()
    {
        connexionPDO::$monPdo = new PDO(connexionPDO::$serveur . ';' . connexionPDO::$bdd, connexionPDO::$user, connexionPDO::$mdp);
        connexionPDO::$monPdo->query("SET CHARACTER SET utf8");
    }

    public static function getConnexionPDO()
    {
        if (connexionPDO::$monPdoCO == null) {
            connexionPDO::$monPdoCO = new connexionPDO();
        }
        return connexionPDO::$monPdoCO;
    }

    public function _destruct()
    {
        connexionPDO::$monPdo = null;
    }

    public function getCollaborateur($vis_matricule) {
        $requete = connexionPDO::$monPdo->prepare("SELECT * FROM collaborateur WHERE vis_matricule = ?") ;
        $requete->execute(array($vis_matricule)) ;
        $collaborateur = $requete->fetch() ;
        return $collaborateur ;
    }

    public function getTravailler($vis_matricule) {
        $requete = connexionPDO::$monPdo->prepare("SELECT * FROM travailler WHERE vis_matricule = ?") ;
        $requete->execute(array($vis_matricule)) ;
        $travailler = $requete->fetch() ;
        return $travailler ;
    }

    public function getRegion($reg_code) {
        $requete = connexionPDO::$monPdo->prepare("SELECT * FROM region WHERE vis_matricule = ?") ;
        $requete->execute(array($reg_code)) ;
        $travailler = $requete->fetch() ;
        return $travailler ;
    }
}