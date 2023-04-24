<?php

session_start();

require 'config.php';
require 'functions.php';

if (isset($_POST['envoi'])) {
    // Vérifier que tous les champs ont été remplis
    if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['intro']) && !empty($_POST['category'])) {
        // Ajouter le nouvel article à la base de données
        $title = $_POST['title'];
        $intro = $_POST['intro'];
        $content = $_POST['content'];
        $category = ($_POST['category']);
        $user_id = $_SESSION['user_id'];

        // Récupérer le nom du fichier uploadé et le déplacer vers le dossier d'upload
        if (!empty($_FILES['image']['name'])) {
            $imageName = $_FILES['image']['name'];
            $imageTemp = $_FILES['image']['tmp_name'];
            $imagePath = 'images/' . $imageName;
            move_uploaded_file($imageTemp, $imagePath);
        } else {
            $imageName = '';
            echo 'Une erreur est survenue lors du téléchargement du fichier';
        }

        $addArticle = insertArticle($title, $content, $intro, $imagePath, $category, $user_id);

        // Rediriger vers la page d'administration
        header("Location: admin.php");
        exit();
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}

