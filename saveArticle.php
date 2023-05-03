<?php
session_start();

require 'config.php';
require 'functions.php';


// Récupération de l'identifiant de l'utilisateur à partir de la session
$userId = $_SESSION['user_id'];

// Récupération de l'identifiant de l'article à partir de la requête POST
$articleId = $_POST['articleId'];

if (checkSaveArticle($userId, $articleId) == false) {
  insertSaveArticle($userId, $articleId);
}
// Insertion de l'article sauvegardé dans la base de données

