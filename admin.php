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
		<title>Blog : Gestion du Blog</title>
	</head>
	<body>
	<?php
    include('./components/header.php');
    ?>
        <div class="adminBut container">

				<!-- BOUTTON ADMINISTRATION -->
                <a href="submit_Post.php" class="btn btn-outline-info btn-rounded my-4 waves-effect butAdm">Ecrire un article</a>
				<a href="article_liste_Post.php" class="btn btn-outline-info btn-rounded my-4 waves-effect butAdm">Modifier un article</a>
				<a href="./manageMembers.php" class="btn btn-outline-info btn-rounded my-4 waves-effect butAdm">Gérer les membres</a>
				<a href="add_Category.php" class="btn btn-outline-info btn-rounded my-4 waves-effect butAdm">Ajouter un Onglet</a>
				<a href="./traitement/destroySessionUser.php" class="btn btn-outline-red btn-rounded my-4 waves-effect butAdm">Se deconnecter</a>
		</div>

		<?php
        include('./components/footer.php');

    	?>
	</body>
</html>
