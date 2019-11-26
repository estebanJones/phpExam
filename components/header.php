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
    // CONNEXION BDD
    require('./traitement/functionConnectBdd.php');
    $bdd = connectDatabase();

    // RECUPERER LES ONGLETS
    $listOnglet = $bdd->query('SELECT ongletName, path_link FROM onglets');
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
                    <ul class="navbar-nav ml-auto">
                    <?php 
                        while ($req = $listOnglet->fetch()) {
                    ?>
                    <!-- Right -->
                            <li class="nav-item">
                                <a class="nav-link waves-effect" href="<?php echo $req['path_link']; ?>">
                                    <?php echo $req['ongletName']; ?>
                                </a>
                            </li>
                    <?php 
                        }
                        $listOnglet->closeCursor();

                        // SI L UTILISATEUR EST CONNECTE ALORS
                            if (isset($_SESSION['login'])) {
                                ?>
                                <li class="nav-item">
                                    <a style="color:blue" class="nav-link waves-effect"
                                    href="editProfil.php"
                                    >Mon Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a style="color:blue" class="nav-link waves-effect"
                                    href="admin.php"
                                    >Espace administateur</a>
                                </li>
                                <li class="nav-item">
                                    <a style="color:red" class="nav-link waves-effect"
                                    href="admin.php"
                                    >Deconnexion</a>
                                </li>
                                <?php
                            } else {
                                
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link waves-effect"
                                            href="connexion.php"
                                            >Connexion</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link waves-effect"
                                            href="inscription.php"
                                            >Inscription</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link waves-effect" style="color:red"
                                    
                                    >Espace administateur</a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
    </header>
</body>
</html>
