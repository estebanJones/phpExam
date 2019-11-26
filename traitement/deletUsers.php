<?php
    
    // CONNEXION BDD
    require('./traitement/functionConnectBdd.php');
    $bdd = connectDatabase();
    
    // SUPPRESSION DU MEMBRE CHOISI
    $deleteMembers = $bdd->prepare('DELETE FROM users WHERE id = :id ');
    $deleteMembers->execute(array(
        'id' => htmlentities($_GET['idUser'])
    ));

    // RETOUR GESTION DU MEMBRE
    header('Location: manageMembers.php');