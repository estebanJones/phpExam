<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog : Page d'accueil</title>
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

    <!--Main Navigation-->
    <header>

    <?php
    include('./components/header.php');

    ?>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="pt-5 main">
        <div class="container-fluid">
         
            <!--Section: Jumbotron-->
            <section class="card wow fadeIn" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
                <!-- Content -->
                <div class="card-body text-white text-center py-5 px-5 my-5">
                    <h1 class="mb-3">
                        <strong>Diginamic 2019</strong>
                    </h1>
                    <h3 class="mb-5">
                        <strong>Un blog géré depuis son administration !</strong>
                    </h3>
                    <em class="mt-5">By Jordan / With Bootstrap & PhP</em><br/>
                    <a  href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start free tutorial
                        <i class="fas fa-graduation-cap ml-2"></i>
                    </a>
                </div>
                <!-- Content -->
            </section>
            <!--Section: Jumbotron-->

            <hr class="my-5">

            <!--Section: Cards-->
            <section class="text-center">
                <!--Grid row-->
                <div class="row mb-4 wow fadeIn d-flex flex-column">
                    <!--Grid column-->
                    <div class="col-lg-12 col-md-12 mb-12 mb-4">
                        <!--Card-->
                       
                            <!--Card image-->
                            
                            <?php
                                
                                
                                
                                // PAGINAION IMCOMPLETE
                                // JE COMPTE LE NOMBRE D ARTICLES
                                $sql = $bdd->query('SELECT count(id) as nbArt FROM articles');
                                $data = $sql->fetch();



                                if(isset($_GET['page'])) {
                                    $current_page = $_GET['page'];
                                } else {
                                    $current_page = 1;
                                }

                                //LIMITE DU NOMBRE D'ARTICLES
                                $nbArt = $data['nbArt'];
                                var_dump($nbArt);
                                $perPage = 3;
                                $nb_page = ceil($nbArt/$perPage);
                                $current_page = 1;


                                $printMessage = $bdd->query("SELECT id, title, content, DATE_FORMAT(datepost, 'posté le %d/%m/%Y à %Hh%imin%ss') AS datePostFr FROM articles
                                ORDER BY id DESC LIMIT ".(($current_page - 1) * $perPage). ",$perPage");

                                // Maintenant qu'on a lié la valeur à la requête, on peut l'exécuter
                             
                                
                                //Boucle
                                while ($req = $printMessage->fetch())
                                {
            
                                 ?>

    
                                        <!--Card content-->
                                        <div class="card">
                                        <div class="card-body">
                                            <form method="POST">
                                                <!--Title-->
                                            
                                                <h4 name="title" class="card-title"><?php echo $req['title']; ?>
                                                
                                                </h4>
                                                <p><strong><?php echo $req['content']; ?></strong></p>
                                                <!--Text-->
                                                <a href="article.html"  class="btn btn-primary btn-md">En savoir plus
                                                    <i class="fas fa-play ml-2"></i>
                                                </a>
                                            </form>
                                            <span name="content" class="card-text float-right"><?php echo $req['datePostFr']; ?></span>
                                        </div>
                                    </div>
                                    <!--/.Card-->
                                </div>
                                    
                        <?php
                            }
                   
                            for ($i=1; $i <= $nb_page; $i++) {
                                echo "<a href=\"index.php?page=$i\">$i</a>";
                            }

                        ?>  

                        
    </main>
    <!--Main layout-->

    <!--Footer-->
    <?php
        include('./components/footer.php');

    ?>
</body>

</html>
