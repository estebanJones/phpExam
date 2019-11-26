<?php
   session_start();

   // CONNEXION BDD
   require('functionConnectBdd.php');
   $request = connectDatabase();

   // SI IL A UNE SESSION ACTIVE => DETRUIS LA
   if(isset($_SESSION['login'])) {
      session_destroy();
      header('Location: ../index.php');
   }else {
      echo 'Vous n\'êtes pas connecté';
   }
   
