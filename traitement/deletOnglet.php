  <?php

    require('functionConnectBdd.php');
    $bdd = connectDatabase();

    // SUPPRIME L ONGLET DE LA NAVBAR DESIRE
    $deletOnglet = $bdd->prepare('DELETE FROM onglets WHERE id = :id');
    $deletOnglet->execute(array(
        'id' => $_GET['ongletId']
    ));

    header('Location: ../add_Category.php');