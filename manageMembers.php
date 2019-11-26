<?php
session_start();
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
    <link href="./css/style.css" rel="stylesheet">
    <title>Blog : Liste des membres</title>
</head>

<body>
    <?php
    include('./components/header.php');
    ?>
    <!--Main layout-->
    <main>

        <!--Section: Content-->
        <section class="p-5 mt-5 text-center text-lg-left z-depth-1 logo" 
            style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background.jpg); background-size: cover; background-position: center center;">

                <div class="row">
                    <div class="col-md-12 mx-auto colConnexion">
                        <!-- Material form login -->
                        <?php
                        
                            $listMembers = $bdd->query('SELECT * from users');
                            ?>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Pseudo</th>
                                    <th scope="col">Email</th>
                                    </tr>
                                </thead>

                                <?php 
                                while($req = $listMembers->fetch()){
                                ?>
                                <tbody>
                                <tbody>
                                    <tr>
                                        <th scope="row"><?php echo $req['id']; ?></th>
                                        <td><strong><?php echo $req['pseudo']; ?></strong></td>
                                        <td><strong><?php echo $req['email']; ?></strong></td>
                                        <td><strong><a href="./traitement/deletUsers.php?idUser=<?php echo $req['id'];?>" 
                                                       class="btn btn-danger">X</a></strong>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php 
                                }
                                ?>
                            </table>
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