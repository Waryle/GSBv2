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

    public function getHash($id) {
        $requete = connexionPDO::$monPdo->prepare("SELECT ") ;
    }
}