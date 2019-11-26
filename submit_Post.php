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
    <title>Blog : Ecrire un article</title>
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

                <div class="row">
                    <div class="col-md-6 mx-auto cardSend">
                        <!-- Material form login -->
                        <div class="card">

                            <!--Card content-->
                            <div class="card-body">

                                <!-- Form -->
                                <form class="text-center" style="color: #757575;" 
                                action="./traitement/valideNewPost.php" method="POST">

                                    <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">Ecrire un poste</h3>

                                    <input name="title" type="text" class="form-control mb-4"
                                        placeholder="Votre titre">
                                    <!-- Name -->

                                    <!-- Email -->
                                    <textarea name="content" placeholder="Votre contenu" class="form-control"></textarea>
                                    <!-- CATEGORIES -->
                                    <input name="category" type="text" class="form-control mb-4 mt-3"
                                        placeholder="Ajouter une catégorie">

                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn btn-outline-orange btn-rounded my-4 waves-effect">Poster</button>
                                    </div>

                                </form>
                                <!-- Form -->

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