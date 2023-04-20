<?php
require 'config.php';
require 'functions.php';

$id = $_GET['id'];

$article = getArticle($id);

if (isset($_POST['author']) && isset($_POST['comment'])) {
    $author = $_POST['author'];
    $comment = $_POST['comment'];
    $article_id = $_GET['id'];
    addComment($author, $comment, $article_id);
}

$comments = getComments($id);

$template = 'article';
include 'base.phtml';