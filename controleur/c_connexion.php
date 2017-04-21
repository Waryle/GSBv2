<?php

if (!isset($_POST['id']) && !isset($_POST['mdp'])) // Si aucune tentative de connexion n'a été faite : cas par défaut
    include('vue/v_pageConnexion.php');
else { // Si une tentative de connexion a été faite : traitement de la connexion
    $id = $_POST['id'] ;
    $mdp = $_POST['mdp'] ;
}