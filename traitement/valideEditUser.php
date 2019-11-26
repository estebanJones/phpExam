<?php
    session_start();
    // variables récuperer par le form
    $newLog = $_POST['newLog'];
    $newMail = $_POST['newMail'];
    $idUser = $_SESSION['id'];

    $newPass = htmlentities($_POST['newPass']);
    $newPassConf = htmlentities($_POST['newPassConfirm']);
    $newPassHash = md5($_POST['newPass']);
    
    
    if ($newPass == $newPassConf) {
    
    // CONNEXION BDD
    require('functionConnectBdd.php');
    $request = connectDatabase();
    // MET A JOUR LE PROFIL
    $saveChangeUser = $request->query("UPDATE users 
                                    SET pseudo = '$newLog', email = '$newMail', pass = '$newPassHash'  
                                    WHERE id = '$idUser'");

    }else {
        echo 'Les mots de passe ne sont pas identique';

    }

   