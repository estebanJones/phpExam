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
    <title>Blog : Editer un article</title>
</head>

<body>

<?php 

session_start();
include('./components/header.php');

// METTRE L ID DE LARTICLE EN SESSION
$_SESSION['idToEdit'] = $_GET['article'];

require('functionConnectBdd');
$bdd = connectDatabase();

// JE RECUPERE L ARTICLE A MODIFIER
$updateMess = $bdd->prepare('SELECT id, title, content FROM articles WHERE id = ?');
$updateMess->execute(array(
   $_GET['article']
));

$req = $updateMess->fetch();

?>
    <!--Main layout-->
    <main>

        <!--Section: Content-->
        <section class="p-5 text-center text-lg-left z-depth-1"
            style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background.jpg); background-size: cover; background-position: center center;">

                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <!-- Material form login -->
                        <div class="card">

                            <!--Card content-->
                            <div class="card-body">

                                <!-- Form -->
                                <form class="text-center" style="color: #757575;" 
                                    action="./traitement/updateArticle.php" method="POST">

                                    <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">Modifier</h3>

                                    <input name="newTitle" type="text" class="form-control mb-4"
                                        placeholder="<?php echo $req['title']; ?>">
                                    <!-- Name -->

                                    <!-- Email -->
                                    <textarea name="newContent" placeholder="<?php echo $req['content']; ?>" 
                                    class="form-control">
                                    </textarea>

                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn btn-outline-orange btn-rounded my-4 waves-effect">Modifier
                                        </button>
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
    <?php
        include('./components/footer.php');

    ?>
</body>

</html>