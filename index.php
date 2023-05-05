<?php

session_start();

require '../vendor/autoload.php';

use App\Model\ArticleModel;


require 'app/config.php';
require 'functions.php';

$flashMessage = null;

// Récupération du message flash
if (array_key_exists('flash', $_SESSION) && $_SESSION['flash']) {

    // On récupère le message flash dans une variable
    $flashMessage = $_SESSION['flash'];

    // On l'efface de la session
    $_SESSION['flash'] = null;
}

$articles = getLastArticles();
$topArticles = getLast3Articles();

// Inclusion du template
$template = 'index';
include 'base.phtml';