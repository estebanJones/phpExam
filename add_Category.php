<?php
session_start()

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <title>Blog : Ajouter une catégorie</title>
</head>

<body>
    <?php
    include('./components/header.php');
    ?>
    <!--Main layout-->
    <main>
        
        <!--Section: Content-->
        <section class="p-5 mt-5 text-center text-lg-left z-depth-1"
            style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background.jpg); background-size: cover; background-position: center center;">

                <div class="container-fluid">
                    <div class="col-md-12 mx-auto editPro">
                        <!-- Material form login -->
                        <div class="card">

                            <!--Card content-->
                            <div class="card-body">

                                <!-- Form -->
                                <form class="text-center" style="color: #757575;" 
                                action="./traitement/insertNewOnglet.php" method="POST">
                                       
                                    <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">Ajouter une onglet à la NavBar</h3>

                                    <label>Nouvel Onglet : <input name="newOnglet" placeholder="ex: Contact" type="text" class="form-control mb-4"></label><br>
                                    <label>Nouvelle page : <input name="path_link" placeholder="ex: index.php" type="text" class="form-control mb-4"></label><br>
                                    <!-- Name -->
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn btn-outline-blue btn-rounded my-4 waves-effect">Ajouter</button>
                                    </div>

                                </form>
                                <!-- Form -->
                                <nav class="navbar navbar-dark bg-dark navView">
                                    <li class="nav-item d-flex text-light">
                                            <?php
                                                // CONNECT BDD

                                                
                                                // AFFICHE LES CATEGORY
                                                $request = $bdd->query('SELECT * from onglets');

                                                while($req = $request->fetch()) {
                                                    ?>
                                                            <a class="nav-link" href="<?php echo $req['path_link']; ?>">
                                                                <?php echo $req['ongletName']; ?>
                                                            </a> 
                                                            <a href="./traitement/deletOnglet.php?ongletId=<?php echo $req['id']; ?>" style="color:red" class="deletOnglet mr-3">X</a> 
                                                                
                                                    <?php 
                                                }
                                                ?>
                                    </li>
                                </nav>
                                    </div>
                        </div>
                        <!-- Material form login -->
                    </div>
                </div>

        </section>
        <!--Section: Content-->

    </main>
        <!-- Social icons -->

        <!--Copyright-->
        <?php
        include('./components/footer.php');

        ?>
</body>
</html>