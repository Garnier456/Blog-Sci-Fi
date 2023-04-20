<?php
// Démarrage de la session
session_start();

// Inclusion des dépendances
require 'config.php';
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

// Inclusion du template
$template = 'index';
include 'base.phtml';