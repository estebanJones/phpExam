
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
    <link href="css/style.css" rel="stylesheet">
    <title>Blog : Editer un article</title>
</head>

<body>
    <?php include('./components/header.php'); ?>
    <div class="categorie">
        <?php 
            
            $articles_category = $_GET['categorie'];
            $list_articles = $bdd->prepare("SELECT title, content, DATE_FORMAT(datepost, 'écrit le %d%m%Y à %Hh%imin%ss')
                                            AS datePostFr
                                            FROM articles 
                                            WHERE category = :categorie
                                            ORDER BY datePostFr DESC");
            $list_articles->execute(array(
                'categorie' => $articles_category
            ));
            
                while($req = $list_articles->fetch()) {

                ?>
                    <!--Main layout-->


                <div class="card" style="margin-top: 6em;">
                    <div class="card-body">
                        <form
                            method="POST">
                            <!--Title-->
                            <h4 name="title" class="card-title"><?php echo $req['title']; ?>

                            </h4>
                            <p>
                                <strong><?php echo $req['content']; ?></strong>
                            </p>
                            <!--Text-->
                            <a href="article.html" class="btn btn-primary btn-md">En savoir plus
                                <i class="fas fa-play ml-2"></i>
                            </a>
                        </form>
                        <span name="content" class="card-text float-right"><?php echo $req['datePostFr']; ?></span>

                    </div>
                </div>

                    <?php
                        }
                        $list_articles->closeCursor();

                    ?>
    </div>
        <!--Footer-->
    <?php
         include('./components/footer.php');

    ?>
</body>
</html>
    