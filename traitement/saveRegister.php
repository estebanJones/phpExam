<?php


$pseudo = htmlentities($_POST['pseudo']);
$email = htmlentities($_POST['email']);
$pass = sha1($_POST['password']);

// CONNEXION BDD
require('functionConnectBdd.php');
$request = connectDatabase();


// SI UN DES CHAMPS N EST PAS REMPLIS ALORS
if ( empty($pseudo) || empty($pass) || empty($email))
{
    echo "<script> alert('Veuillez remplir les champs Pseudo, Message et Email')</script>";
    header('Refresh:5, ./inscription.php'); 

} else {

    // CHECK LE FORMAT DE L ADRESSE E MAIL
    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email))
	{
        $showMessage = $request->prepare('INSERT INTO users(pseudo, pass, email) VALUES(:pseudo, :pass, :email)');
        $showMessage->execute(array(
            'pseudo' => $pseudo,
            'pass' => $pass,
            'email' => $email
        ));

        // RETOUR PAGE D ACCUEIL
        header('Location: ../index.php');
    }
}

?>