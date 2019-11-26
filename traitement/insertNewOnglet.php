<?php

    $newOnglet = htmlentities($_POST['newOnglet']);
    $new_link = htmlentities($_POST['path_link']);

    // CONNEXION BDD
    require('functionConnectBdd.php');
    $request = connectDatabase();

    // AJOUTE UNE CATEGORY
    $addCategory = $request->prepare('INSERT INTO onglets(ongletName, path_link) VALUES(:ongletName, :path_link)');
    $addCategory->execute(array(
        'ongletName' => $newOnglet,
        // PATH_LINK CE MET DANS LE HREF
        'path_link' => $new_link
    ));

    // REDIRECTION AJOUTER ACTEGORY
    header('Location: ../add_Category.php');