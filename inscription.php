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
    <title>Blog : Inscription</title>
</head>

<body>
    <?php
        include('./components/header.php');
    ?>
    <!--Main layout-->
    <main>

        <!--Section: Content-->
        <section class="p-5 text-center text-lg-left z-depth-1 inscriContent"
            style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background.jpg); background-size: cover; background-position: center center;">

                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <!-- Material form login -->
                        <div class="card">

                            <!--Card content-->
                            <div class="card-body">

                                <!-- Form -->
                                <form class="text-center" style="color: #757575;" 
                                action="./traitement/saveRegister.php" method="POST">

                                    <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">Inscription</h3>

                                    <input name="pseudo" type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4"
                                        placeholder="Pseudo">
                                    <!-- Name -->

                                    <!-- Email -->
                                    <input name="password" type="password" id="defaultSubscriptionFormEmail" class="form-control"
                                        placeholder="Password">
                                    <small id="passwordHelpBlock" class="form-text text-right blue-text">
                                        <a href="">Réinitialiser le mot de passe</a>
                                    </small>

                                    <input name="email" type="email" id="defaultSubscriptionFormEmail" class="form-control"
                                        placeholder="@">
                                        
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn btn-outline-orange btn-rounded my-4 waves-effect">Valider</button>
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
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small mdb-color darken-2 wow fadeIn">

        <!--Call to action-->
        <div class="pt-4">
            <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/"
                target="_blank" role="button">Download MDB
                <i class="fas fa-download ml-2"></i>
            </a>
            <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank"
                role="button">Start free tutorial
                <i class="fas fa-graduation-cap ml-2"></i>
            </a>
        </div>
        <!--/.Call to action-->

        <?php
        include('./components/footer.php');

        ?>
</body>

</html>