<?php

    $pseudo = htmlentities($_POST['pseudo']);
    $pass = htmlentities($_POST['password']);
    $pass_hash = sha1($pass);

    // CONNEXION BDD
    require('functionConnectBdd.php');
    $request = connectDatabase();
    
    // CHECK LE USER QUI SE CONNECTE
    $checkUser = $request->prepare('SELECT id, pseudo, pass, email FROM users WHERE pseudo = :pseudo');
    $checkUser->execute(array(
        'pseudo' => $pseudo,
    ));

    $req = $checkUser->fetch();

    // CHECK LES PASSWORDS HASHER
    if ($pass_hash == $req['pass'])
    {
        session_start();
        $_SESSION['id'] = $req['id'];
        $_SESSION['login'] = $pseudo;
        $_SESSION['email'] = $req['email'];
        header('Location: ../index.php');
    
    // SI ERREUR DE PASSWORD
    }else {
        session_start();
        $_SESSION['error_connect_pass'] = "Le mot de passe ou l'identifiant est incorrect";
        header('Location: ../connexion.php');
    }


