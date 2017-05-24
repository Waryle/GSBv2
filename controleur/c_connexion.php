<?php

    include('vue/v_formulaireConnexion.php');
    if (isset($_POST['id']) && isset($_POST['mdp'])) { // Si une tentative de connexion a été faite : traitement de la connexion
        $collaborateur = $pdo->getCollaborateur($_POST['id']) ;
        $collaborateur["tra_role"] = $pdo->getTravailler($collaborateur["vis_matricule"]["tra_role"]) ;
        connexion($collaborateur, $_POST['mdp']);
    }

?>