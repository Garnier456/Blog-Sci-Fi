<?php
session_start();

require 'config.php';
require 'functions.php';

$username = '';
$email = '';
$password = '';

// Si le formulaire a été soumis...
if (!empty($_POST)) {

    $hash = password_hash($password, PASSWORD_DEFAULT);

     // 1. Récupération des données du formulaire
    $username = trim($_POST['pseudo']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $passwordConfirm = $_POST['password-confirm'];

    $errors = validateForm(
        $username,
        $email,
        $password,
        $passwordConfirm
    );

    if(empty($errors)) {

        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Ajout du nouvel utilisateur dans la base de donnée
        addUser($username, $hash, $email);

         // Ajout d'un message flash en session
        $_SESSION['flash'] = 'Votre compte a été créé avec succès.';

        // Redirection vers l'index.php
        header('Location: index.php');
        exit;
    }
}

// Inclusion du template
$template = 'signup';
include 'base.phtml';