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
		<link
		rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
		<!-- Bootstrap core CSS -->
		<link
		href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link
		href="css/mdb.min.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href="css/style.css" rel="stylesheet">
		<title>Blog: Liste des articles</title>
	</head>
        <?php   
        
        include('./components/header.php');
        // SELECTIONNE LES ARTICLES
        $listPost = $bdd->query('SELECT id, title, content, date_format(datepost, "écrit le %d%m%Y à %Hh%imin%ss") as datePostFr
                                FROM articles ORDER BY id DESC LIMIT 10');
        ?>
        <div class="container-fluid listEdit">

            <?php
            while ($req = $listPost->fetch()) {
                ?>

            <div class="card" style="margin-top: 6em;">
                <div class="card-body">
                    <form
                        method="POST">
                        <!--Title-->
                        <a href="./traitement/deletPost.php?idArticle=<?php echo $req['id'];?>" class="btn btn-danger float-right">X</a>
                        <h4 name="title" class="card-title"><?php echo $req['title']; ?>

                        </h4>
                        <p>
                            <strong><?php echo $req['content']; ?></strong>
                        </p>
                        <!--Text-->
                        <a href="article.html" class="btn btn-primary btn-md">En savoir plus
                            <i class="fas fa-play ml-2"></i>
                        </a>
                        <a href="update_Post.php?article=<?php echo $req['id']; ?>" class="btn btn-outline-orange btn-rounded my-4 waves-effect">Modifier l'article
                        </a>
                    </form>
                    <span name="content" class="card-text float-right"><?php echo $req['datePostFr']; ?></span>

                </div>
            </div>
        </div>
<!--/.Card-->
<?php
        }
        $listPost->closeCursor();
        ?>

</html>