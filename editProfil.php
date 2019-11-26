<?php
session_start()

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ecrire un post</title>
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
    include('./components/header.php');
    ?>
    <!--Main layout-->
    <main>
        
        <!--Section: Content-->
        <section class="p-5 mt-5 text-center text-lg-left z-depth-1"
            style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background.jpg); background-size: cover; background-position: center center;">

                <div class="row">
                    <div class="col-md-6 mx-auto editPro">
                        <!-- Material form login -->
                        <div class="card">

                            <!--Card content-->
                            <div class="card-body">

                                <!-- Form -->
                                <form class="text-center" style="color: #757575;" 
                                action="./traitement/valideEditUser.php" method="POST">
                                       
                                    <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">Editer le profil</h3>

                                    <label>Votre pseudo : <input name="newLog" type="text" class="form-control mb-4"
                                        placeholder=<?php echo $_SESSION['login']; ?>></label><br>
                                    <!-- Name -->

                                    <!-- Email -->
                                    <label>Votre email :<br /><input class="form-control mb-4" type="text" name="newMail" placeholder=<?php echo $_SESSION['email']; ?>>
                                    </label><br>

                                    
                                    <label>Votre mot de passe :<br /><input class="form-control mb-4" type="password" name="newPass" >
                                    </label><br>

                                    <label>Confirmer votre mot de passe :<br /><input class="form-control mb-4" type="password" name="newPassConfirm">
                                    </label>

                                    <div class="text-center">
                                        <button type="submit"
                                        class="btn btn-outline-blue btn-rounded my-4 waves-effect">Confirmer</button>
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