<?php

require 'config.php';
require 'functions.php';

if (isset($_POST['envoi'])) {
    // Vérifier que tous les champs ont été remplis
    if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['category'])) {
        // Ajouter le nouvel article à la base de données
        $title = $_POST['title'];
        $content = $_POST['content'];
        $category = ($_POST['category']);

        // Récupérer le nom du fichier uploadé et le déplacer vers le dossier d'upload
        if (!empty($_FILES['image']['name'])) {
            $imageName = $_FILES['image']['name'];
            $imageTemp = $_FILES['image']['tmp_name'];
            $imagePath = 'images/' . $imageName;
            move_uploaded_file($imageTemp, $imagePath);
        } else {
            $imageName = '';
        }

        $addArticle = insertArticle($title, $content, $imagePath, $category);

        // Rediriger vers la page d'administration
        header("Location: admin.php");
        exit();
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}

