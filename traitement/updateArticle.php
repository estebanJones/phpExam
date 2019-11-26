<?php
    session_start();
    $newTitle = htmlentities($_POST['newTitle']);
    $newContent = htmlentities($_POST['newContent']);
    $idToEdit = htmlentities($_SESSION['idToEdit']);

    // CONNEXION BDD
    require('functionConnectBdd.php');
    $request = connectDatabase();
    // METTRE A JOUR UN ARTICLE
    $updateMessage = $request->query("UPDATE articles 
                                    SET title = '$newTitle',  content = '$newContent', datepost = now()
                                    WHERE id = '$idToEdit'");

    
    header('Location: ../index.php');
        

    
