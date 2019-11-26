<?php

    $newCat = htmlentities($_POST['newCat']);

    // CONNEXION BDD
    require('functionConnectBdd.php');
    $request = connectDatabase();

    // AJOUTE UNE CATEGORY
    $addCategory = $request->prepare('INSERT INTO category(catName) VALUES(:catName)');
    $addCategory->execute(array(
        'catName' => $newCat
    ));

    // REDIRECTION AJOUTER ACTEGORY
    header('Location: ../add_Category.php');