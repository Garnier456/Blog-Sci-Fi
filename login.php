<?php

// Démarrage de la session
session_start();

// Inclusion des dépendances
require 'config.php';
require 'functions.php';

$error = '';

// Si le formulaire est soumis...
if (!empty($_POST))
{
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = getUserByEmail($email);
        $hash = $user['password'];

        if ($user !== null && verifyPassword($password, $hash)) {

            $_SESSION['user_id'] = $user['id'];

            // Si l'utilisateur est un administrateur, enregistrer les informations dans la session
            if ($user['is_admin'] == 1) {
                $_SESSION['admin'] = [
                    'username' => $user['username'],
                    'email' => $user['email']
                ];

                unset($_SESSION['admin']['password']);

                $_SESSION['flash'] = 'Bienvenue ' . $user['username'] . ' (admin)';

                header('Location: admin.php');
                exit;

            // Sinon, enregistrer les informations en tant qu'utilisateur normal
            } else {
                $_SESSION['user'] = [
                    'username' => $user['username'],
                    'email' => $user['email']
                ];

                unset($_SESSION['user']['password']);

                $_SESSION['flash'] = 'Bienvenue ' . $user['username'];

                header('Location: index.php');
                exit;
            }

        } else {
            $error = 'Identifiants incorrects';
        }
    } else {
        $error = 'Veuillez remplir tous les champs';
    }
}

// Inclusion du template
$template = 'login';
include 'base.phtml';
