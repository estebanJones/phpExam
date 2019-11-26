<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mon premier Blog en PHP !</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php

    require('../traitement/functionConnectBdd.php');
    $bdd = connectDatabase();

    $listCategory = $bdd->query('SELECT catName FROM category');
    ?>
     <!-- Navbar -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar navTop">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="index.php" >
                    <img class="img-fluid logo" src="img/logo.png" alt="Mon super Blog !">
                </a>
                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <?php 
                        while ($req = $listCategory->fetch()) {
                    ?>
                    <!-- Right -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link waves-effect" href="index.php">
                                    <?php $req['catName']; ?>
                                </a>
                            </li>
                        </ul>
                    <?php 
                        }
                    ?>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
    </header>
</body>
</html>
