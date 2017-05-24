<?php
    //Paramétrage de la vue entête : lien et alt du logo, ainsi que titre/sous titre
    $lienLogo = "img/logo.jpg" ;
    $altLogo = "Logo GSB" ;

    $titre = "Galaxy Swiss Bourdin" ;

    // Paramétrage du sous titre affichant : "Connecté en tant que $prenom $nom, $statut de la région $region" si connecté
    if(isset($_SESSION['utilisateur'])) {
        $sousTitre = "Connecté en tant que 
            ". $_SESSION['utilisateur']['prenom'] ." 
            ". $_SESSION['utilisateur']['nom'] .", 
            ". $_SESSION['utilisateur']['statut'] ." de la région
            ". $_SESSION['utilisateur']['region'] ;
    } else
        $sousTitre = "" ;

    include("vue/v_header.php") ;
?>