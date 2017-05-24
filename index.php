<?php
    session_start() ;
    require_once("modele/connexionPDO.php") ;
    $pdo = connexionPDO::getConnexionPDO() ;
    require_once("modele/fonctions.php") ;

    include("controleur/c_head.php") ;
    include('controleur/c_header.php');
    include('controleur/c_nav.php');
    include('controleur/c_section.php');
    include('controleur/c_footer.php');
?>