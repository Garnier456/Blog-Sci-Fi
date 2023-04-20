<?php
// Démarrage de la session
session_start();

// Inclusion des dépendances
require 'config.php';
require 'functions.php';

// Vérification si l'utilisateur est un administrateur
if (!isset($_SESSION['admin'])) {
    // Si l'utilisateur n'est pas un administrateur, rediriger vers la page de connexion
    header('Location: login.php');
    exit;
}

$articles = getLastArticles();
$users = getUsers();
$comments = getAllComments();



// Inclusion du template
$template = 'admin';
include 'base.phtml';
