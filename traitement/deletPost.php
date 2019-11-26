<?php
    // CONNEXION BDD
   require('functionConnectBdd.php');
   $request = connectDatabase();

   // REQUETE SUPPRESSION DE L ARTICLE
    $deletMessage = $request->prepare('DELETE FROM articles WHERE id = ?');
    $deletMessage->execute(array(
        htmlentities($_GET['idArticle'])
    ));

    // REDIRECTION PAGE ADMIN
    header('Location: ../admin.php');