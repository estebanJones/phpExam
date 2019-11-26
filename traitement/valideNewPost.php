<?php 

$title = htmlentities($_POST['title']);
$content = htmlentities($_POST['content']);
$category = htmlspecialchars($_POST['category']);
// CONNEXION BDD
require('functionConnectBdd.php');
$request = connectDatabase();

// INSERER ARTICLE 
$saveNew = $request->prepare('INSERT INTO articles(title,content, category) VALUES(:title, :content, :category)');
$saveNew->execute(array(
    'title' => $title,
    'content' => $content,
    'category' => $category
));

header('Location: ../index.php');